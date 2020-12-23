<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=['user_id','order_id','payment_reference','amount','paid_on'];
    public function customer()
    {
        return $this->belongsTo(User::class);

    }

    public function orders()
    {
        return $this->belongsTo(Order::class);

    }
}
