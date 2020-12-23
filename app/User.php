<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','email' ,'email_verified','phone','phone_verified','password','shipping_address' ,
        'billing_address','role_id','api_token','cart_id'
        ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function orders(){
        return $this->hasMany(Order::class);
    }
public function shipments(){
        return $this->hasMany(Shipment::class);
}
public function shipping_address(){
        return $this->hasOne(Address::class,'id','shipping_address');
}
    public function billing_address(){
        return $this->hasOne(Address::class,'id','billing_address');
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    public function review(){
        return $this->hasMany(Review::class);
    }
    public function whishlist(){
        return $this->hasOne(Wisho::class);

    }
    public function ticket(){
        return $this->hasMany(Ticket::class,'user_is','id');

    }
    public function rolen(){

        return $this->belongsToMany(Role::class);
    }
    public function roles(){

        return $this->belongsTo(Role::class,'role_id');
    }

    public function store(){
        return $this->hasOne(Store::class,'store_id','id');

    }
    public  function  carts(){
        return $this->hasOne(Cart::class,'cart_id','id');
    }
//public  function  formattedname(){
//        return $this->first_name . ' ' . $this->last__name ;
//    <p>{{$reviews->customer->formattedname}}</p>
//
//}

}
