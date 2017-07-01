<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Session;

class Cart  extends Model
{
    protected $fillable = array('username','session','id_product','jumlah','total');

    public function Products(){

        return $this->belongsTo('Product','id_product');

    }

    static function JumlahItem()
    {
        $item = Cart::where('session',Session::getId())->count();
//        $jumlah = 5;
        return $item;
    }

    static function Total()
    {
        $item = Cart::where('session',Session::getId())->sum('total');
//        $jumlah = 5;
        return $item;
    }

    static function Item()
    {
        $item = Cart::where('session',Session::getId())->get();
//        $jumlah = 5;
        return $item;
    }
}

