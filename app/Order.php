<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['order_date','cart_id','payment_id','user_id'];
    public function customer(){
        return $this->belongsTo(User::class,'user_id');

    }

    public function carts(){
        return $this->hasOne(Cart::class,'cart_id');

}
public function payments(){
    return $this->hasOne(Payment::class);
}
public function ticket(){
        return $this->hasMany(Ticket::class);

}



}
