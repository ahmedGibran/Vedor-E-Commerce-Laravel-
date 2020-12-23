<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table='addresses';
    protected $fillable=['street_name','street_number','state','city','country','post_code'];
    public function users(){
        return $this->belongsTo(User::class);
    }
}
