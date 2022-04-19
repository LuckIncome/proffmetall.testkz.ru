<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

use App\Models\Child;
use App\Models\Table;

class Tovar extends Model
{
    use HasFactory, SearchableTrait;

    protected $table = 'tovar';
    protected $fillable = array();

    protected $searchable = [
        'columns' => [
            'title' => 10,
        ],
    ];

    public function tovar_child()
    {
      return $this->belongsTo(Child::class, 'child_id', 'id')->where('status', true);
    }

    public function table()
    {
      return $this->hasMany(Table::class);
    }
}
