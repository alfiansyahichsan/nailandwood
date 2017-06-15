<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('events')->insert([
            'date' => '15 July 2017',
            'eventname' => 'Art & Space',
            'venue' => 'Dago Tea House',
            'location' => 'Bandung, Indonesia',
            'tickets' => 'Free',
            'link' => '',
            ]);
    }
}
