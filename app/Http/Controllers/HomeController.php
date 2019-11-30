<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Fisco;
use App\Estados;
use App\User;
use DB;

use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;


class UsersController extends Controller 
{
    public function export() 
    {
        return Excel::download(new UsersExport, 'result.xlsx');
    }
}

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
	
	public function searchNCM()
    {		
        return view('dashboard.search.ncm');
	}
	
	public function searchCEST()
    {		
        return view('dashboard.search.cest');
	}
	
	public function searchMVA()
    {		
        return view('dashboard.search.mva');
	}
	
	public function toolsAJUSTE()
    {		
        return view('dashboard.tools.ajuste');
	}
	
	public function toolsCALCULADORA()
    {		
        return view('dashboard.tools.calculadora');
	}
	
	public function toolsPAUTAS()
    {		
        return view('dashboard.tools.pautas');
	}
	
	/* Páginas Secundárias */
	public function redirecionaNCM(Request $request)
	{
		$q = $request->input('q'); // Recebe valor do input
		$msg = "Sem resultados encontrados";
		
		$ncm = Fisco::where('ncm','LIKE', $q.'%')->get(); // Query na tabela
		if(count($ncm) > 0)
			return view('dashboard.search.ncm')->withDetails($ncm)->withQuery($q);
		else
			return view ('dashboard.search.ncm')->withMessage($msg);
	}

	public function redirecionaCEST(Request $request)
	{
		$q = $request->input('q'); // Recebe valor do input
		$msg = "Sem resultados encontrados";
		
		$cest = Fisco::where('cest','LIKE', $q.'%')->get(); // Query na tabela
		if(count($cest) > 0)
			return view('dashboard.search.cest')->withDetails($cest)->withQuery($q);
		else 
			return view ('dashboard.search.cest')->withMessage($msg);
	}
	
	public function redirecionaMVA(Request $request)
	{
		$q = $request->input('q'); // Recebe valor do input
		$msg = "Sem resultados encontrados";
		
		$mva = Fisco::where('mva','LIKE', $q.'%')->get(); // Query na tabela
		if(count($mva) > 0)
			return view('dashboard.search.mva')->withDetails($mva)->withQuery($q);
		else 
			return view ('dashboard.search.mva')->withMessage($msg);
	}
			
	public function redirecionaAJUSTE(Request $request)
	{	

		$q = $request->input('q'); // Recebe valor do input
		
		/* Cálculo do ajuste da MVA */
		$rMVA = 1 + ($q / 100);
		$r12 = (1-(12/100)) / (1-(18/100));
		$r07 = (1-(7/100)) / (1-(18/100));
		$r04 = (1-(4/100)) / (1-(18/100));
		$mva_ajustada12 = (($rMVA * $r12) - 1) * 100;
		$mva_ajustada07 = (($rMVA * $r07) - 1) * 100;
		$mva_ajustada04 = (($rMVA * $r04) - 1) * 100;
		
		/* Converte text para float com duas casas decimais */
		$mva_original = number_format((float)$q, 2, ',', '.');
		$mva_ajustada12 = number_format((float)$mva_ajustada12, 2, ',', '.');
		$mva_ajustada07 = number_format((float)$mva_ajustada07, 2, ',', '.');
		$mva_ajustada04 = number_format((float)$mva_ajustada04, 2, ',', '.');
		
		/* Retorna para view os valores */
		return \View::make('dashboard.tools.ajuste')
		->with('mva18', $mva_original)
        ->with('mva12', $mva_ajustada12)
        ->with('mva07', $mva_ajustada07)
        ->with('mva04',$mva_ajustada04);
	}
	
	public function redirecionaCALCULADORA(Request $request)
	{
		/* Recebe o valor dos inputs */
		$valor = $request->input('qVALOR');
		$mva = $request->input('qMVA');
		$eo = $request->input('qEO');
		$ed = $request->input('qED');
		$frete = $request->input('qFRETE');
		$seguro = $request->input('qSEGURO');
		$despesa = $request->input('qDESPESA');
		$desconto = $request->input('qDESCONTO');
		$ipi = $request->input('qIPI');
		$aliqInterna = DB::table('estados')->where('id', $eo)->value('aliquota');
		
		/* Checa se o estado destino é igual ao estado origem */
		if($eo == $ed) {
			$aliqExterna = $aliqInterna;
		}
		else {
			$aliqExterna = 12.00;
		}
		
		/* ESSE CONDIÇÃO SÓ SERÁ USADA SE TIVER MAIS ESTADOS!
		elseif (Aliquota 12%) {
			$aliqExterna = 12.00;
		}
		elseif (Aliquota 7%) {
			$aliqExterna = 7.00;
		}
		elseif (Importado) {
			$aliqExterna = 4.00;
		}
		*/
		
		/* Cálculo dos tributos */
		$base_icms = $valor + $frete + $seguro + $despesa - $desconto;		
		if($eo == $ed) $valor_icms = $base_icms * ($aliqInterna/100);
		else $valor_icms = $base_icms * ($aliqExterna/100);
		$base_st = ($valor + $ipi + $frete + $seguro + $despesa - $desconto) * (1 + ($mva/100));
		$valor_st = ($base_st * ($aliqExterna/100)) - $valor_icms;
		$valor_total = $base_icms + $valor_st;
		
		/* Converte text para float com duas casas decimais */
		$base_icms = number_format((float)$base_icms, 2, ',', '.');
		$valor_icms = number_format((float)$valor_icms, 2, ',', '.');
		$base_st = number_format((float)$base_st, 2, ',', '.');
		$valor_st = number_format((float)$valor_st, 2, ',', '.');
		$valor_total = number_format((float)$valor_total, 2, ',', '.');
		
		/* Retorna para view os valores */
		return \View::make('dashboard.tools.calculadora')
		->with('base_icms', $base_icms)
        ->with('valor_icms', $valor_icms)
        ->with('base_st',$base_st)
		->with('valor_st',$valor_st)
		->with('valor_total',$valor_total);
		
	}
	
	public function export() 
    {
        return Excel::download(new DataExport, 'gofisco.xlsx');
    }
	
}
