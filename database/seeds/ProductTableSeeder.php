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
        //
        $product = new \App\Product([

        		'imagePath' => 'http://www.cutlerywholesaler.com/images/products/detail/JS652_4.jpg',
        		'title' => 'Hand Forged Samurai Sword Japanese Katana',
        		'description' => 'This sword is beautiful in the very traditional sense of the samurai. The samurai found beauty in all things in nature. The blade of the sword is HQSS stainless steel, already sharpened, with the hamon along the edge of the blade.',
        		'price'=> 10


        	]);

        $product->save();

          $product = new \App\Product([

        		'imagePath' => 'http://www.cutlerywholesaler.com/images/products/detail/JS652_4.jpg',
        		'title' => 'Hand Forged Samurai Sword Japanese Katana',
        		'description' => 'This sword is beautiful in the very traditional sense of the samurai. The samurai found beauty in all things in nature. The blade of the sword is HQSS stainless steel, already sharpened, with the hamon along the edge of the blade.',
        		'price'=> 10


        	]);

        $product->save();

          $product = new \App\Product([

        		'imagePath' => 'http://www.cutlerywholesaler.com/images/products/detail/JS652_4.jpg',
        		'title' => 'Hand Forged Samurai Sword Japanese Katana',
        		'description' => 'This sword is beautiful in the very traditional sense of the samurai. The samurai found beauty in all things in nature. The blade of the sword is HQSS stainless steel, already sharpened, with the hamon along the edge of the blade.',
        		'price'=> 10


        	]);

        $product->save();

          $product = new \App\Product([

        		'imagePath' => 'http://www.cutlerywholesaler.com/images/products/detail/JS652_4.jpg',
        		'title' => 'Hand Forged Samurai Sword Japanese Katana',
        		'description' => 'This sword is beautiful in the very traditional sense of the samurai. The samurai found beauty in all things in nature. The blade of the sword is HQSS stainless steel, already sharpened, with the hamon along the edge of the blade.',
        		'price'=> 10


        	]);

        $product->save();
    }
}
