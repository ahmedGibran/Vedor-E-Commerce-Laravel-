<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=['role'];
    function usern(){
        return $this->belongsToMany(User::class);
    }
    function users(){
        return $this->hasMany(User::class,'role_id');
    }
}
