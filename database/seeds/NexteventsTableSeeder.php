<?php

use Illuminate\Database\Seeder;

class NexteventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nextevents')->insert([
            'backgroundpic' => 'koc.jpg',
            'logoeventpic' => 'box.png',
            'datemax' => '2017/06/16',
            'link' => 'https://www.instagram.com/pakudankayu/',
            ]);
    }
}
