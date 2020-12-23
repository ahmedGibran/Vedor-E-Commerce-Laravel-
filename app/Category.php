<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name','url'];
    function product(){
        return $this->hasMany(Product::class,'category_id');
    }

}
