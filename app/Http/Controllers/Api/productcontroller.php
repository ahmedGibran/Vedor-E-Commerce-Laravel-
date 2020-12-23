<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Resources\productRecource;
use App\Product;

use App\Http\Controllers\Controller;

class productcontroller extends Controller
{
    public function index(){
        return productRecource::collection(Product::paginate());
    }
    public function show($id){
        return new productRecource(Product::find($id));
    }
    public function product_of_category($id){
        $category = Category::query()->find($id);
        $prpduct = Product::with(['image','category'])->where('category_id','=',$category['id'])->paginate(env('paginate_code'));
        return productRecource::collection(Product::with(['image','category'])->where('category_id','=',$category['id'])->paginate(env('paginate_code')));
    }
}
