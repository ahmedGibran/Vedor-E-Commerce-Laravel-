<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'description'=>$faker->paragraph,
        'unit'=>$faker->randomElement(['kg','cm','qyt']),
        'url'=>$faker->imageUrl(500,500),
        'total'=>$faker->numberBetween(1,200),
        'price'=>$faker->numberBetween(1,700),
        'category_id'=>$faker->numberBetween(1,50),
    ];
});
