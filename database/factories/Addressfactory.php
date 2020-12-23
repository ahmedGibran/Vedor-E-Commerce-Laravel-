<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'street_name'=>$faker->streetName,
        'street_number'=>$faker->numberBetween(1,5000),
        'state'=>$faker->streetName,
        'city'=>$faker->city,
        'country'=>$faker->country,
        'post_code'=>$faker->numberBetween(1,1000),
    ];
});
