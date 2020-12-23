<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AddressController extends Controller
{
public function returndata(){
   $user = User::with(['shipping_address'])->get();
    return $user->toArray();
}
}
