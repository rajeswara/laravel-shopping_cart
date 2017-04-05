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

        		'imagePath' => 'https://2.bp.blogspot.com/-Nliq0p3H3iY/V64Z41c-aaI/AAAAAAABjCk/JkKYgznMObIl6tvtRCQzCS4ypCJT8hUjwCLcB/s1600/handbag.jpg',
        		'title' => 'Deadpool Handbag',
        		'description' => 'SuperHeroStuff has listed a Deadpool purse for sale on their website. The purse costs $21.99 and is available now',
        		'price'=> 21.99


        	]);

        $product->save();


          $product = new \App\Product([

        		'imagePath' => 'https://content.adidas.co.in/static/Product-AW4984/Men_NEO_VULCANIZED_SHOES_LOW_AW4984_1.jpg',
        		'title' => 'The adidas Neo Hawthorne ST shoes for men',
        		'description' => ' This Vulcanized model is made with Suede Leather upper construction which gives you complete comfort and support to your feet',
        		'price'=> 10


        	]);

        $product->save();
    }
}
