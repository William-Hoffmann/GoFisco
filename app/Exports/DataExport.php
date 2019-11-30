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
    }

    public function headings(): array
    {
        return [
            'fisco ncm',
            'fisco cest',
            'fisco desc',
			'fisco mva',
			'fisco grupo'
        ];
    }
}

