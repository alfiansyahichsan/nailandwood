<?php

use Illuminate\Database\Seeder;

class PlaylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('playlists')->insert([
            'title' => 'Wake Up, Alaska',
            'audiopath' => 'pakukayu2.mp3',
            'imgthumbnailpath' => 'thumbnail1.png',
            ]);

        DB::table('playlists')->insert([
            'title' => 'Fly You Up',
            'audiopath' => 'pakukayu1.mp3',
            'imgthumbnailpath' => 'thumbnail1.png',
            ]);
    }
}
