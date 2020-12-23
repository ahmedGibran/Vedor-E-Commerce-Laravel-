<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    function index(){
        $product = Product::with(['image','category'])->paginate(env('paginate_code'));
        $price_code =env('price_code');
        return view('admin.product.product')->with(['product'=>$product,'price_code'=>$price_code]);
    }


    function product(){
        $product = Product::with(['image','category'])->paginate(env('paginate_code'));
        $price_code =env('price_code');
        return response()->json(['success'=>true]);
    }
}
