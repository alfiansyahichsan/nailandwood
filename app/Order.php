<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = array('username','alamat','total');

    public function orderItems()
    {
        return $this->belongsToMany('Product')->withPivot('jumlah','total');
    }

    static function TransaksiPending()
    {
        $transaksi = Order::where('status','unpaid')->get();

        return $transaksi;

    }
    static function TransaksiSelesai()
    {
        $transaksi = Order::where('status','paid')->get();

        return $transaksi;

    }
}
