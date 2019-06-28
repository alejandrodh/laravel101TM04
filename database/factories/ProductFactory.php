<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
      $path = storage_path('app/public/products');

    return [
        'name' => $faker->sentence(3),
        'description' => $faker->sentence(20),
        'price'=> $faker->randomFloat(10, 2),
        'featured_img' => $faker->image($path, 300, 300, 'food', true, false),
        'user_id' => $faker->randomNumber(2)
    ];
});
