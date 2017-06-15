<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nextevent extends Model
{
    protected $fillable = ['backgroundpic','logoeventpic','datemax','link'];

    static function NextEvent()
    {
    	$nextevent = \App\Nextevent::all();

        return $nextevent;
    }
}
