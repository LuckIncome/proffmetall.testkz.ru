<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends BaseModel
{
    use HasFactory;

    protected $table = 'article';

    public function getBigThumbAttribute()
    {
        return \Voyager::image($this->getThumbnail($this->image,'big'));
    }

    public function getSmallThumbAttribute()
    {
        return \Voyager::image($this->getThumbnail($this->image,'small'));
    }
}
