<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable=['user_id','order_id','ticket_type_id','status','message','title'];
    function tickettypes(){
        return $this->belongsTo(Tickettype::class);
    }
    public function customer(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function order(){
        return $this->belongsTo(Order::class,'order_id','id');
    }

}
