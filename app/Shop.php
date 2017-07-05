<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table ='shops';

    static function SemuaProduk()
    {
        $products = \App\Shop::all();

        return $products;
    }

    static function NamaProduk($id)
    {
        $products = \App\Shop::find($id);

        return $products->title;
    }

    static function GambarProduk($id)
    {
        $products = \App\Shop::find($id);

        return $products->imgpath;
    }

    static function HargaProduk($id)
    {
        $products = \App\Shop::find($id);


        return $products->price;


    }
    static function DetailProduk($id)
    {
        $products = \App\Shop::find($id);


        return $products->detail;


    }

}
