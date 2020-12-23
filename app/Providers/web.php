<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/users','usersController@index');

route::get('/user/{id}', 'usersController@selectUser');

route::post('/pharmacy/add','pharmacyController@store');

Route::put('/pharmacy/update/{id}','pharmacyController@update');

Route::delete('/pharmacy/harddelete/{id}','pharmacyController@hard_delete');

Route::delete('/pharmacy/softdelete/{id}','pharmacyController@soft_delete');

route::get('/user/pharmacy','usersController@UserPharmacy');

route::get('fetch/user/pharmacy/{id}','usersController@fetchUserPharmacy');

route::get('view','pharmacyController@returnView');

route::get('admin/view','adminController@index');

route::get('admin/view/pharmacy','adminController@pharmacy_index');

route::get('admin/create/pharmacy','adminController@pharmacy_create');

route::post('admin/store/pharmacy','adminController@pharmacy_add');

route::get('admin/edit/pharmacy/{id}','adminController@pharmacy_edit');

route::post('admin/update/pharmacy/{id}','adminController@pharmacy_update');

route::get('admin/delete/pharmacy/{id}','adminController@pharmacy_delete');

route::get('login/user','AuthController@getLogin');

route::post('login/user/attempt','AuthController@login');