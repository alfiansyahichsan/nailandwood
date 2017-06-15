<?php

use Illuminate\Database\Seeder;

class VideohomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videohomes')->insert([
            'link' => 'https://www.youtube.com/embed/01jcwGApTWA',
            ]);
    }
}
