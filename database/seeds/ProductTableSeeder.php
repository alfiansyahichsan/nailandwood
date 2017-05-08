<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagepath' => 'img\shop\1.jpg',
            'title' => 'Air Jordan',
            'description' => 'baju enakeun wa',
            'price' => '135000'
            ]);
        $product->save();
    }
}
