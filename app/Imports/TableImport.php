<?php

namespace App\Imports;

use App\Models\Table;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

class TableImport implements 
ToModel, 
SkipsEmptyRows, 
WithHeadingRow, 
WithValidation
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $where = array(
            'product' => $row['product'],
            'mark' => $row['mark'],
            'size' => $row['size'],
            'gost' => $row['gost']
        );        

        $Table = Table::where($where)->first();

        if($Table !== null) {
            $Table->update([
                'tovar_id' => $row['tovar_id'],
                'product' => $row['product'],
                'mark' => $row['mark'],
                'size' => $row['size'],
                'gost' => $row['gost']
            ]);
        } else {
            return new Table([
                'tovar_id' => $row['tovar_id'],
                'product' => $row['product'],
                'mark' => $row['mark'],
                'size' => $row['size'],
                'gost' => $row['gost']
            ]);   
        }
    }

    public function rules(): array
    {
        return [
            'product' => 'required',
            'mark' => 'required',
            'size' => 'required',
            'gost' => 'required'
        ];
    } 
}
