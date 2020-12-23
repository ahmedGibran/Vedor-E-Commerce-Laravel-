<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//API Product Collection
Route::get('products','Api\productcontroller@index');
Route::get('products/{id}','Api\productcontroller@show');
Route::get('category/product/{id}','Api\productcontroller@product_of_category');
//API category Collection
Route::get('category','Api\categorycontroller@index');
Route::get('category/{id}','Api\categorycontroller@show');
//API user Collection
Route::get('users','Api\usercontroller@index');
Route::get('users/{id}','Api\usercontroller@show');

//API review Collection
Route::get('review','Api\reviewcontroller@index');
Route::get('review/{id}','Api\reviewcontroller@show');
//API tag Collection
Route::get('tag','Api\tagcontroller@index');
Route::get('tag/{id}','Api\tagcontroller@show');
//API register/login Collection
Route::post('auth/register','Api\Authcontroller@register');
Route::post('auth/login','Api\Authcontroller@login');
Route::middleware('auth:api')->group(function (){
    Route::post('/cart','Api\Cartcontroller@addproducttocart');

});

Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
});

route::get('product','Apicontroller@product');
//////////////////////login//////////////
//route::get('login','Apicontroller@loginuser');
//////////////////////////login////////////////////
route::post('check_user','Apicontroller@loginuser');

route::get('category','Apicontroller@indexmobail');
