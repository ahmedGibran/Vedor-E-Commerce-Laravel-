<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=['url','product_id'];

public function products(){
    return $this->belongsTo(Product::class,'product_id','id');
}
}
