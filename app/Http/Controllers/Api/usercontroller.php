<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\userResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class usercontroller extends Controller
{
    public function index(){
        return userResource::collection(User::paginate());
    }
    public function show($id){
        return new userResource(User::find($id));
    }
}
