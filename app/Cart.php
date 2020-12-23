<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=['cart_items','total','user_id'];

    public function carts(){
        return $this->belongsTo(User::class);
    }
    public function cart_order(){
        return $this->belongsTo(Order::class);
    }




    public function addproducttocart(Product $product, $qyt=1){
        $cartitems = $this->cart_items;
        if (is_null($cartitems)){
            $cartitems = [];
        }else{
            if(!is_array($cartitems)){
                $cartitems= json_decode($cartitems);

            }        }        /**
         * @var $cartitem Cart_item
         */
        $cartitem = new Cart_item($product,$qyt);
        array_push($cartitems,$cartitem);
        $this->cart_items = json_encode($cartitems);
         return $cartitems ;
    }
    public function increaseproducttocart(Product $product, $qyt=1){
        $cartitems = $this->cart_items;
        if (is_null($cartitems)){
            $cartitems = [];
        }else{
            if(!is_array($cartitems)){
                $cartitems= json_decode($cartitems);

            }
        }

        /**
         * @var $cartitem Cart_item
         */
       foreach ($cartitems as  $cartitem){
           if ($cartitem->product->id === $product->id){
               $cartitem->qyt = $qyt ;
           }
       }
        $this->cart_items = json_encode($cartitems);


    }
    public function cartInItem($product_id){
        $cartitems = $this->cart_items;
        if (is_null($cartitems)){
            $cartitems = [];
        }else{
            if(!is_array($cartitems)){

                $cartitems= json_decode($cartitems);

            }        }
        /**
         * @var $cartitem Cart_item ;
         */
        foreach ($cartitems as $cartitem){
            if ($product_id == $cartitem->product->id){
                return true ;
            }else{
               return false ;
            }
        }
    }
}
