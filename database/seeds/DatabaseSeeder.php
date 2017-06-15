<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSlidersSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(NexteventsTableSeeder::class);
    }
}
