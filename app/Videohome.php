<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videohome extends Model
{
    protected $fillable = ['link'];

    static function Videohome()
    {
    	$video = \App\Videohome::all();

        return $video;
    }
}
