<?php

namespace App\Exports;

use App\Models\Table;
use Maatwebsite\Excel\Excel;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TableExport implements FromView
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    private $fileName = 'table.xlsx';

    private $writerType = Excel::XLSX;

    private $headers = [
        'Content-Type' => 'text/csv',
    ];

    public function view(): View
    {
        return view('exports.table', [
            'tables' => Table::all()
        ]);
    }

}
