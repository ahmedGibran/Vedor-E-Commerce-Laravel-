<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,

        'email' => $faker->unique()->safeEmail,
        'email_verified' =>$faker->randomElement([true,false]),

        'phone' => $faker->unique()->safeEmail,
        'phone_verified' =>$faker->randomElement([true,false]),
'shipping_address'=>$faker->numberBetween(1,1000),
    'billing_address'=>$faker->numberBetween(1,1000),
        //'api_token'=>$faker ->bin2hex(openssl_random_pseudo_bytes(30)),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
