<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=['user_id','product_id','stars','review'];
    public function customer(){
        return $this->belongsTo(User::class,'user_id','id');

    }
    public   function product(){
        return $this->belongsTo(Product::class);
    }
//    public  function humandate(){
//return ::createTimeStamp(strtotime($this->created_at) )->diffforHumans() ;
//    }
}
