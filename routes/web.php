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
use App\Role;

Route::get('/', function () {
    return view('admin.admin.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware(['auth','users_is_role']);
Route::get('/user/users','AddressController@returndata');

//Route::get('home-test', function (){
////    return 'Hello' ;
////})->middleware(['auth','email_verified']);
////Route::get('test_user',function (){
////    $role = Role::find(2);
////  return  $role->users;
////})->middleware('users_is_role');

Route::group(['auth','users_is_role'],function (){
    route::get('test-category','CategoryController@index')->middleware('auth');
    route::get('test-product','ProductController@index')->middleware('auth');
    route::get('test-tag','TagController@index')->middleware('auth');
    route::get('test-review','ReviewController@index')->middleware('auth');
    route::get('test-ticket','TicketController@index')->middleware('auth');
    route::get('test-role','RoleController@index')->middleware('auth');
    Route::delete('/test-roles/{id}','RoleController@delete')->middleware('auth');

    route::get('/check_user','Logincontroller@loginuser');
    route::get('/check_users','Logincontroller@login');
    route::get('/checkuser','Logincontroller@viewlogin');

    Route::get('/home/roles', 'RoleController@viewtablestore');

    Route::get('/home/table/delete/{id}','RoleController@deleted');
    /////////////////////////////delete user ///////////////////
    Route::get('/user/table/delete/{id}','Admincontroller@deleteuser');
///////////////////////////////user update ///////////////

    Route::get('/update/user/{id}','Admincontroller@returnupdate');

    Route::post('/user/update/{id}','Admincontroller@userupdate');
    ////////////////////view user data //////////////////
    route::get('/admin/user','Admincontroller@user');

    Route::get('/admin/home','Admincontroller@home')->name('admin');

    ////////////////////user creat ////////////////////
    Route::get('/user/add','Admincontroller@returnadduser');
    Route::post('/creat/user','Admincontroller@creatuser');

    //////////////////////////view data category ////////////
     route::get('/admin/category','Admincontroller@category');
                   ////////////update category//////////
    Route::post('/user/category/{id}','Admincontroller@categoryupdate');
    Route::get('/update/category/{id}','Admincontroller@return_catrgory_update');
                        //////delete category //////
    Route::get('/category/table/delete/{id}','Admincontroller@delete_category');

                                    ////add category //
    Route::get('/category/add','Admincontroller@returnadd_catogery');
    Route::post('/creat/category','Admincontroller@creatcategory');

          //////////////////////////view data product ////////////
     Route::get('/admin/product','Admincontroller@product');
                   ////////////update product//////////
    Route::post('/user/product/{id}','Admincontroller@productupdate');
    Route::get('/update/product/{id}','Admincontroller@return_product_update');
                        //////delete product //////
    Route::get('/product/table/delete/{id}','Admincontroller@delete_product');

                                    ////add product //
    Route::get('/product/add','Admincontroller@returnadd_product');
    Route::post('/creat/product','Admincontroller@creatproduct');

    ///////////////////////////////////////Order /////////////////////////

    Route::get('/admin/order','Admincontroller@order');


    ///////////////////////////view Data Role //////////////////////////
    route::get('/admin/role','Admincontroller@role');
    ////////////update role//////////
    Route::post('/user/role/{id}','Admincontroller@roleupdate');
    Route::get('/update/role/{id}','Admincontroller@return_role_update');
    //////delete role //////
    Route::get('/role/table/delete/{id}','Admincontroller@delete_role');

    ////add role //
    Route::get('/role/add','Admincontroller@returnadd_role');
    Route::post('/creat/role','Admincontroller@creatrole');

    //////////////////////////view data store ////////////
    Route::get('/admin/store','Admincontroller@store');
    ////////////update store//////////
    Route::post('/user/store/{id}','Admincontroller@storeupdate');
    Route::get('/update/store/{id}','Admincontroller@return_store_update');
    //////delete store //////
    Route::get('/store/table/delete/{id}','Admincontroller@delete_store');

    ////add store //
    Route::get('/store/add','Admincontroller@returnadd_store');
    Route::post('/creat/store','Admincontroller@creatstore');

});


//////////////////USERS //////////////
Route::group(['auth'],function (){
    Route::get('home/product/{id}','Usercontroller@product');

    Route::get('home/category','Usercontroller@category');



});



/////////////////////////new Application //////////////////
Route::get('home/categories','Admincontroller@categories');
Route::get('home/product/{id}','Admincontroller@products');
Route::get('home/cart','Admincontroller@carts');
Route::get('home/signup','Admincontroller@viewsignup');
Route::post('home/home/signup/new','Admincontroller@signup');
