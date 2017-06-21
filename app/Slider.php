<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table ='sliders';

    static function imageSlider()
    {
    	$slider = \App\Slider::all();

        return $slider;
    }
}
