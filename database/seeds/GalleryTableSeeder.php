<?php

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            'imgpath' => '1.png',
            'title' => 'bandung',
            ]);
        DB::table('galleries')->insert([
            'imgpath' => '2.jpg',
            'title' => 'jakarta',
            ]);
        DB::table('galleries')->insert([
            'imgpath' => '3.jpg',
            'title' => 'medan',
            ]);
        DB::table('galleries')->insert([
            'imgpath' => '4.jpg',
            'title' => 'surabaya',
            ]);
        DB::table('galleries')->insert([
            'imgpath' => '5.png',
            'title' => 'yogyakarta',
            ]);
    }
}
