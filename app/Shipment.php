<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable=['user_id','payment_id','order_id','shipment_date','status'];

    public function customar(){
        return $this->belongsTo(User::class);
    }
    public function payments(){
        return $this->hasOne(Payment::class);
    }

    public function orders(){
        return $this->belongsTo(Payment::class);
    }
}
