<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickettype extends Model
{
    protected $fillable=['type'];
    function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
