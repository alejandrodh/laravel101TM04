<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
      $path = storage_path('app/public/products');

    return [
        'name' => $faker->sentence(3),
        'description' => $faker->sentence(20),
        'price'=> $faker->randomFloat(2, 300, 4000),
        'featured_img' => $faker->image($path, 300, 300, 'food',false),
        'user_id' => $faker->numberBetween(1,5) //Acá está la clave primaria. Hay que tener en cuenta que los valores a ingresar deben EXISTIR en la tabla users de lo contrario la consola dara error de SQL.
        
    ];
});
