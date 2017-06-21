<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table ='events';

    static function Event()
    {
    	$event = \App\Event::all();

        return $event;
    }
}
