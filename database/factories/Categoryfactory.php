<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [    'name'=>$faker->word,
        'url'=>$faker->imageUrl(500,500),

    ];
});
