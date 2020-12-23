<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use App\Role;
use App\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Admincontroller extends Controller
{
    public function signup(Request $request){

        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password  =Hash::make( $request->input('password'));
       // $user->shipping_address = $request->input('shipping_address');
        $user->api_token =bin2hex(openssl_random_pseudo_bytes(30));

        $user->role_id = 1;

        $user->save();
        $categpry = Category::with(['product'])->paginate(env('paginate_code'));
        return view('admin.admin.index',['category'=>$categpry]);

    }
public function viewsignup(){
        return view('admin.admin.signup');
}


    public function categories(){
        $categpry = Category::with(['product'])->paginate(env('paginate_code'));
        return view('admin.admin.index',['category'=>$categpry]);

    }
    public function products($id){
        $category = Category::query()->find($id);
        $prpduct = Product::with(['image','category'])->where('category_id','=',$category['id'])->get();
        return view('admin.admin.product',['product'=>$prpduct]);
    }
public function carts(){
    $product = Product::with(['image','category'])->where('id','=',1)->
    orWhere('id','=',2)->
    orWhere('id','=',3)->
    orWhere('id','=',4)->
    orWhere('id','=',5)->

    get();

    return view('admin.admin.cart',['products'=>$product]);
}













    public function user(){
        $users = User::with(['rolen'])->get();
        return view('admin.user.table',['user'=>$users]);
    }
    public  function home(){
        return view('admin.blank') ;
    }
    public function deleteuser(Request $request,$id){
        $user = User::query()->find($id);
        $user->delete();
        return redirect()->back();
    }
    public function returnupdate($id){
        $user = User::query()->find($id);
        return view('admin.user.form_update',['user'=>$user]);
    }
     public function userupdate(Request $request,$id){
         $user = User::query()->find($id);
         $user->update($request->toArray());
         return redirect()->back();
    }
    public  function returnadduser(Request $request)
    {
        $role = Role::all();
        return view('admin.user.form_add',['role'=>$role]);
    }
    public function creatuser(Request $request){
        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password =  Hash::make($request->input('password'));
        $user->save();
     return redirect()->back();

    }



    /////////////////Category ///
    public function category(){
        $categpry = Category::with(['product'])->paginate(env('paginate_code'));
        return view('admin.category.categories',['category'=>$categpry]);
    }

           /////update ///
    ///return
public  function return_catrgory_update(Request $request,$id){
    $category = Category::query()->find($id);
    return view('admin.category.form_update',['category'=>$category]);
}
    /// update now
    public function categoryupdate(Request $request,$id){
            $category = Category::query()->find($id);
         /*  if ($request->hasFile('url')){
$file = $request->file('url');
$ext = $file->getClientOriginalExtension();
$filename ="category_image".'_'.time().'.'.$ext;
$file->storeAs('public/category_update',$filename);
           }else{
               $filename='noimage.jpg';
           }
   */


        $category->update($request->toArray());

        return redirect()->back();

    }
        ///////////delete ///
    public function delete_category(Request $request,$id){
        $category = Category::query()->find($id);
        $category->delete();
        return redirect()->back();
    }
    ///////////add return form category
public function returnadd_catogery(){
        return view('admin.category.form_add');
}
         ///////new Category
function creatcategory(Request $request){
        if($request->hasFile('url')){
$file = $request->file('url');
$ext =$file->getClientOriginalExtension();
$filename ="cover_image".'_'.time().'.'.$ext ;
      $file->storeAs('public/image',$filename);
        }else{
            $filename = 'noimh.jpg';
        }
        $category = new Category();
        $category->name = $request->input('name');
        $category->url = $filename;
$category->save();
    return redirect()->back();
    }

////////////////////// Products //////////////////

    public function product(){
        $product = Product::with(['image','category'])->paginate(env('paginate_code'));
        return view('admin.product.product',['product'=>$product]);
    }

    /////update ///
    ///return
    public  function return_product_update(Request $request,$id){
        $product = Product::query()->find($id);
         $category=Category::all();
        return view('admin.product.form_update',['product'=>$product,'category'=>$category]);
    }
    /// update now
    public function productupdate(Request $request,$id){
        $product = Product::query()->find($id);
        $product->update($request->toArray());
        return redirect()->back();

    }
    ///////////delete ///
    public function delete_product(Request $request,$id){
        $product = Product::query()->find($id);
        $product->delete();
        return redirect()->back();
    }
    ///////////add return form Product
    public function returnadd_product(){
       $category = Category::all();
        return view('admin.product.form_add',['category'=>$category]);
    }
    ///////new Product
    function creatproduct(Request $request){
        $product =new Product();
        if($request->hasFile('url')){
            $file = $request->file('url');
            $ext =$file->getClientOriginalExtension();
            $filename ="cover_image".'_'.time().'.'.$ext ;
            $file->storeAs('public/product_image',$filename);
        }else{
            $filename = 'no_image.jpg';
        }
        $product->title  = $request->input('title');
        $product->total  = $request->input('total');
        $product->price  = $request->input('price');
        $product->unit  = $request->input('unit');
        $product->description  = $request->input('description');
        $product->category_id  = $request->input('category_id');
        $product->url = $filename;

        $product->save();

        return redirect()->back();
    }
    //////////////////////////////////Order ///////////////
        public function order()
        {
            $order = Order::with(['customer', 'payments', 'ticket'])->paginate(env('paginate_code'));
            return view('admin.orders.order', ['order' => $order]);
        }

        ////////////////////Role ///////////////////////////

    public function role(){
        $role = Role::paginate(env('paginate_code'));
        return view('admin.roles.role',['role'=>$role]);
    }

    /////update ///
    ///return
    public  function return_role_update(Request $request,$id){
        $role = Role::query()->find($id);
        return view('admin.roles.form_update',['role'=>$role]);
    }

    /// update now
    public function roleupdate(Request $request,$id){
        $role = Role::query()->find($id);
        /*  if ($request->hasFile('url')){
$file = $request->file('url');
$ext = $file->getClientOriginalExtension();
$filename ="category_image".'_'.time().'.'.$ext;
$file->storeAs('public/category_update',$filename);
          }else{
              $filename='noimage.jpg';
          }
  */


        $role->update($request->toArray());

        return redirect()->back();

    }
    ///////////delete ///
    public function delete_role(Request $request,$id){
        $role = Role::query()->find($id);
        $role->delete();
        return redirect()->back();
    }
    ///////////add return form role
    public function returnadd_role(){
        return view('admin.roles.form_add');
    }
    ///////new role
    function creatrole(Request $request){

        $role = new Role();
        $role->role = $request->input('role');
        $role->save();
        return redirect()->back();
    }



    ///////////////////// Store //////////////////

    public function store(){
        $store = Store::with(['admin'])->paginate(env('paginate_code'));
        return view('admin.store.store',['store'=>$store]);
    }

    /////update ///
    ///return
    public  function return_store_update(Request $request,$id){
        $store = Store::query()->find($id);
        $user=User::all();
        return view('admin.product.form_update',['store'=>$store,'user'=>$user]);
    }
    /// update now
    public function storeupdate(Request $request,$id){
        $store = Store::query()->find($id);
        $store->update($request->toArray());
        return redirect()->back();

    }
    ///////////delete ///
    public function delete_store(Request $request,$id){
        $store = Store::query()->find($id);
        $store->delete();
        return redirect()->back();
    }
    ///////////add return form store
    public function returnadd_store(){
        $user = User::all();
        return view('admin.store.form_add',['user'=>$user]);
    }
    ///////new store
    function creatstore(Request $request){
        $store =new Store();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext =$file->getClientOriginalExtension();
            $filename ="cover_image".'_'.time().'.'.$ext ;
            $file->storeAs('public/store_image',$filename);
        }else{
            $filename = 'no_image.jpg';
        }
        $store->name  = $request->input('name');
        $store->city  = $request->input('city');
        $store->store_id  = $request->input('user_id');
        $store->image = $filename;

        $store->save();

        return redirect()->back();
    }

}
