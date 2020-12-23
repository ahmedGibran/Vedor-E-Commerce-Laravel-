<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');

            $table->string('email')->unique();
            $table->boolean('email_verified')->default(false);

            $table->string('phone')->nullable();
            $table->boolean('phone_verified')->default(false);
            $table->bigInteger('shipping_address')->nullable();
            $table->bigInteger('billing_address')->nullable();
            $table->bigInteger('role_id')->nullable();
            $table->string('password');
            $table->bigInteger('cart_id')->nullable();
            $table->string('api_token')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
