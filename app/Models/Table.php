<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Tovar;

class Table extends Model
{
    use HasFactory;

    protected $table = 'table';

    protected $fillable = ['tovar_id', 'product', 'mark', 'size', 'gost',];

    public function table_tovar()
    {
      return $this->belongsTo(Tovar::class, 'tovar_id', 'id')->where('status', true);
    }

}
