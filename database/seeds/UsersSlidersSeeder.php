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
            'imagepathslider' => 'albumpinkfloyd.jpg',
            'imagepath2' => 'pakukayu.png',
            'text' => 'proper pause',
            'link' => '#'
            ]);
        $slider->save();
    }
}
