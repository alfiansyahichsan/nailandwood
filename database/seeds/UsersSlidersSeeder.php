<?php

use Illuminate\Database\Seeder;

class UsersSlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider = new \App\Slider([
            'imagepathslider' => '2.jpg',
            'text' => 'P R O P E R  P A U S E (EP)',
            'textbutton' => 'Order'
            ]);
        $slider->save();
    }
}
