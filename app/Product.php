<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['title','description','unit','total','price'];
    public function image(){
        return $this->hasMany(Image::class);
    }
    public function review(){
        return $this->hasMany(Review::class,'product_id','id');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function store(){
        return $this->belongsTo(Store::class);
    }
    public function tag(){
return $this->belongsToMany(Tag::class);
    }
}
