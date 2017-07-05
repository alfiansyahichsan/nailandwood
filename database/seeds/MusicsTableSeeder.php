<?php

use Illuminate\Database\Seeder;

class MusicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('musics')->insert([
            'title' => 'Proper Pause (EP)',
            'release' => '2017-07-21',
            'label' => 'Why Production',
            'format' => 'cd',
            ]);
    }
}
