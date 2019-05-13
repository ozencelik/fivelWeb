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
        'imagePath' => 'theme/img/product-img/fivel-pro.png',
    	'name' => 'FIVEL PRO',
    	'description' => 'Fivel Pro is the most detailed product in the FIVEL product family. There are 5 different glove which are doing different movements.',
    	'price' => '5000']);

    	$product->save();

    	$product = new \App\Product([
        'imagePath' => 'theme/img/product-img/fivel.png',
    	'name' => 'FIVEL',
    	'description' => 'Fivel was designed for the consumer which will be rented from a physiotherapy center. There is only one glove which is doing the flexion.',
    	'price' => '1000']);

    	$product->save();

    	$product = new \App\Product([
        'imagePath' => 'theme/img/product-img/fivel-x.png',
    	'name' => 'FIVEL X',
    	'description' => 'Fivel X is the physical glove not digital. The patient can do their movements for the cure.',
    	'price' => '150']);

    	$product->save();
    }
}
