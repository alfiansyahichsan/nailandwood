<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonfirmasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfirmasi', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('order_id')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('bank')->nullable();
            $table->string('metode')->nullable();
            $table->string('nama')->nullable();
            $table->string('telepon')->nullable();
            $table->string('status')->nullable();
            $table->string('bukti')->nullable();
            $table->decimal('transfer', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konfirmasi');
    }
}
