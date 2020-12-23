<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Address::class,1000)->create();
        factory(\App\Image::class,3500)->create();
      factory(\App\User::class,500)->create();
       factory(\App\Product::class,100)->create();
      factory(\App\Category::class,20)->create();
       //factory(\App\Role::class,50)->create();
         factory(\App\Tag::class,50)->create();


        factory(\App\Review::class,2000)->create();
factory(\App\Ticket::class,100)->create();


    }
}
