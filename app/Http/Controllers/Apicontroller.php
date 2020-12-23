<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Apicontroller extends Controller
{
    function product(){
        $product = Product::with(['image','category'])->paginate(env('paginate_code'));
        $price_code =env('price_code');
        return $product ;
        //response()->json(['success'=>true]);
    }

    public function loginuser(Request $request){
        $email=$request->email;
        $password=$request->password;
        if (Auth::attempt(['email'=>$email,'password'=>$password])){
            return response()->json(['success' => true]);
        } else{
            return response()->json(['success' => false]);

        }

    }
    public  function indexmobail(){
        $category = Category::all();
        return $category->toArray();
    }
}
