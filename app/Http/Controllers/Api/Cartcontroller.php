<?php

namespace App\Http\Controllers\Api;

use App\Cart;
use App\Http\Resources\CartRecource;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Cartcontroller extends Controller
{
    public function addproducttocart(Request $request){
        $request->validate([
            'product_id'=>'required',
            'qyt'=>'required',
            'user_id'=>'required',


        ]);
        /**
         * @var $user User
         */
        $user = Auth::user();
        $product_id = $request->input('product_id');
        $product = Product::query()->findOrFail($product_id);
        $qyt = $request->input('qyt');
        /**
         * @var $cart Cart
         */
       // dd($user->carts);
        $cart = $user->carts();
        if (is_null($cart)){
             $cart = new Cart();
             $cart->cart_items=[] ;
             $cart->user_id = Auth::user()->id;
             $cart->total=0;
         }



        if ($cart->cartInItem($product_id)){
             $cart->increaseproducttocart($product);

         }else{
             $cart->addproducttocart($product);

         }

        $cart->save();
       /* $user->cart_id = $cart->id;
        $user->save();*/
        return $cart ;
    }
}
