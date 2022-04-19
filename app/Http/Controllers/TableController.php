<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\TableImport;
use App\Exports\TableExport;

class TableController extends Controller
{
    public function import(Request $request) 
    {   
        if ($request->hasFile('import_file')){
            $updateFile = $request->file('import_file');           
            $path = $updateFile->getRealPath();
            $fileExtension = $updateFile->getClientOriginalExtension();
            $formats = ['xls', 'xlsx', 'ods', 'csv'];
            if (!in_array($fileExtension, $formats)) {
                return back()->with(['oshibka' => 'Поддерживается файлы только форматами .xls, .xlsx, .ods, .csv']);
            } 
            $rows = \Excel::import(new TableImport(), $request->file('import_file'));
        }
        return back()->with(['success' => 'Данные успешно загружены!']);     
    }

    public function export() 
    { 
        return \Excel::download(new TableExport, 'table.xlsx');
    }
}
