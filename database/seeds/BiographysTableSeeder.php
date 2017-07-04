<?php

use Illuminate\Database\Seeder;

class BiographysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biographys')->insert([
            'text' => 'paku dan kayu merupakan',
            'alamat' => 'Bandung, Indonesia',
            'email' => 'pakukayu@gmail.com',
            'phone' => '087822228888',
            ]);
    }
}
