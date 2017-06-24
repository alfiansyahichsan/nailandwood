<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lmusic extends Model
{
    protected $table ='lmusics';

    static function Lmusic()
    {
    	$lmusic = \App\Lmusic::all();

        return $lmusic;
    }
}
