<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['date','eventname','venue','location','tickets','link'];

    static function Event()
    {
    	$event = \App\Event::all();

        return $event;
    }
}
