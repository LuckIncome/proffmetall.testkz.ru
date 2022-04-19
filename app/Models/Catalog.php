<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Child;

class Catalog extends Model
{
    use HasFactory;

    protected $table = 'catalog';
    protected $fillable = array();

    public function child()
    {
      return $this->hasMany(Child::class)->where('status', true);
    }
}
