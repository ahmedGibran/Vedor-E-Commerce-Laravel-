<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name','image','city'];
    function product(){
        return $this->hasMany(Product::class,'store_id');
    }
    public function admin(){
        return $this->belongsTo(User::class);
    }
}
