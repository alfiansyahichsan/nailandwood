<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'bank';
    protected $primaryKey = 'id_bank';

    static function Semua()
    {
        $bank = Bank::all();

        return $bank;
    }
}
