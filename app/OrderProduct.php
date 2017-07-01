<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_products';

    protected $fillable = array('order_id','id_product','jumlah','harga','total');

    static function ReturnItem($id)
    {
        $order = OrderProduct::where('order_id',$id)->get();

        return $order;
    }
}
