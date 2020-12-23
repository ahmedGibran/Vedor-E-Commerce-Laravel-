<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function product($id){
        $category = Category::query()->find($id);
        $prpduct = Product::with(['image','category'])->where('category_id','=',$category['id'])->paginate(env('paginate_code'));
        return view('users.product',['product'=>$prpduct]);
    }
    public function category(){
        $category = Product::paginate(env('paginate_code'));
        return view('users.home',['category'=>$category]);

    }
}
