<?php

namespace App\Exports;

use App\Fisco;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fisco::all();
		/*return collect([
            [
                'ncm' => '',
                'cest' => '',
                'descricao' => '',
                'mva' => '',
				'grupo' => ''
            ]
        ]);
		*/
		
    }

    public function headings(): array
    {
        return [
            'NCM',
            'CEST',
            'DESCRICAO',
			'MVA',
			'GRUPO'
        ];
    }
}

