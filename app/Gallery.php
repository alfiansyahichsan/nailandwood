<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['imgpath'];

    static function Gallery()
    {
    	$gallery = \App\Gallery::all();

        return $gallery;
    }
}
