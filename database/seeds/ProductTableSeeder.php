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
          'imagePath' => 'src\product_images\1.jpg',
          'title' => 'Item1',
          'description' => 'Super cool - at least as a child.',
          'price' => 17
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'src\product_images\2.jpg',
          'title' => 'Item2',
          'description' => 'd tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa',
          'price' => 18
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'src\product_images\3.jpg',
          'title' => 'Item3',
          'description' => 'Super cool - at least as a child.',
          'price' => 33
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'src\product_images\4.jpg',
          'title' => 'Item4',
          'description' => 't. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'price' => 777
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'src\product_images\5.jpg',
          'title' => 'Item5',
          'description' => 'Super cool - at least as a child.',
          'price' => 111
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'src\product_images\6.jpg',
          'title' => 'Item6',
          'description' => 'Super cool - at least as a child.',
          'price' => 70
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'src\product_images\7.jpg',
          'title' => 'Item7',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo',
          'price' => 240
        ]);
        $product->save();

    }
}
