@extends('layouts.app')

@section('title')
GoFisco.com - Calculadora Tributária
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
@stop

@section('content')

<div class="row">

	<div class="col-md-12 py-2 px-5">
	
		<form action="/dashboard/tools/calculadora" method="POST" role="search">
		{{ csrf_field() }}
		<div class="form-row">
		  <div class="form-group input-group">
		  
			<div class="col-md-6 py-3">
				<label for="inputValor" class="sr-only">Valor</label>
				<div class="input-group">
					<div class="input-group-prepend">
					  <div class="input-group-text">Valor: </div>
					</div>
					<input type="text" name="qVALOR" id="inputValor" class="form-control mask">
				</div>
			</div>
			
			<div class="col-md-6 py-3">
				<label for="inputMVA" class="sr-only">MVA</label>  
				<div class="input-group">
					<div class="input-group-prepend">
					  <div class="input-group-text">MVA%: </div>
					</div>
				<input type="text" name="qMVA" id="inputMVA" class="form-control mask">
				</div>
			</div>
			
			<div class="col-md-6 py-3">
				<label for="selectEO" class="sr-only">Estado Origem</label>  
				<div class="input-group">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01">Estado Origem</label>
					</div>
					<select name="qEO" id="selectEO" class="form-control custom-select">
						<option value="1">Rio Grande do Sul</option>
						<option value="2">Santa Catarina</option>
						<option value="3">São Paulo</option>
					</select>
				</div>
			</div>
			
			<div class="col-md-6 py-3">
				<label for="selectED" class="sr-only">Estado Destino</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01">Estado Destino</label>
					</div>				
					<select name="qED" id="selectED" class="form-control custom-select">
						<option value="1">Rio Grande do Sul</option>
						<option value="2">Santa Catarina</option>
						<option value="3">São Paulo</option>
					</select>
				</div>
			</div>
			
			<div class="col-md-6 py-3">
				<label for="inputFrete" class="sr-only">Frete</label>
				<div class="input-group">
					<div class="input-group-prepend">
					  <div class="input-group-text">Frete: </div>
					</div>
				<input type="text" name="qFRETE" id="inputFrete" class="form-control mask">
				</div>
			</div>
			
			<div class="col-md-6 py-3">
				<label for="inputSeguro" class="sr-only">Seguro</label>
				<div class="input-group">
					<div class="input-group-prepend">
					  <div class="input-group-text">Seguro: </div>
					</div>				
				<input type="text" name="qSEGURO" id="inputSeguro" class="form-control mask">
				</div>
			</div>
			
			<div class="col-md-4 py-3">
				<label for="inputDespesa" class="sr-only">Despesa</label>
				<div class="input-group">
					<div class="input-group-prepend">
					  <div class="input-group-text">Despesa: </div>
					</div>
				<input type="text" name="qDESPESA" id="inputDespesa" class="form-control mask">
				</div>
			</div>
			
			<div class="col-md-4 py-3">
				<label for="inputDesconto" class="sr-only">Desconto</label>
				<div class="input-group">
					<div class="input-group-prepend">
					  <div class="input-group-text">Desconto: </div>
					</div>
				<input type="text" name="qDESCONTO" id="inputDesconto" class="form-control mask">
				</div>
			</div>

			<div class="col-md-4 py-3">
				<label for="inputIPI" class="sr-only">IPI</label>
				<div class="input-group">
					<div class="input-group-prepend">
					  <div class="input-group-text">IPI: </div>
					</div>
				<input type="text" name="qIPI" id="inputIPI" class="form-control mask">
				</div>
			</div>
			</div>
		</div>
			
		<button type="submit" class="btn btn-block btn-primary">Calcular</button>

		</form>
	</div>
	
	<div class="col-12 py-2 px-5">
		<h4 class="ml-3 mt-3">
			<ul>
				<li>Base de ICMS: {{ $base_icms ?? '' }}</li>
				<li>Valor de ICMS: {{ $valor_icms ?? '' }}</li>
				<li>Base de ICMS-ST: {{ $base_st ?? '' }}</li>
				<li>Valor de ICMS-ST: {{ $valor_st ?? '' }}</li>
				<li>Valor Total R$: {{ $valor_total ?? '' }}</li>
			</ul>
		</h4>	
	</div>
	
</div>
@stop
