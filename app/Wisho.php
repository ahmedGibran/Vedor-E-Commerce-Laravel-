<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisho extends Model
{
    protected $fillable=['wishlist','user_id'];
    public function customer(){
        return$this->belongsTo(User::class);
    }
}
