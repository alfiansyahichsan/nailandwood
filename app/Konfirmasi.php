<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    protected $table = 'konfirmasi';

    static function KonfirmasiOrder($orderid)
    {
        $konfirmasi = Konfirmasi::where('order_id',$orderid)->first();

        return $konfirmasi;
    }
}
