<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlists extends Model
{
    protected $fillable = ['title','audiopath','imgthumbnailpath'];

    static function Playlists()
    {
    	$playlist = \App\Playlists::all();

        return $playlist;
    }
}
