<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['imagepathslider','imagepath2','text','link'];

    static function imageSlider()
    {
    	$slider = \App\Slider::all();

        return $slider;
    }
}
