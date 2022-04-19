<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Catalog;
use App\Models\Tovar;

class Child extends Model
{
    use HasFactory;

    protected $table = 'child';
    protected $fillable = array();

    public function child_catalog()
    {
      return $this->belongsTo(Catalog::class, 'catalog_id', 'id')->where('status', true);
    }

    public function tovar()
    {
      return $this->hasMany(Tovar::class)->where('status', true);
    }
}
