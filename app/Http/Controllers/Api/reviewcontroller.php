<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\reviewResource;
use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class reviewcontroller extends Controller
{
    public function index (){
        return reviewResource::collection(Review::paginate());
    }
    public function show ($id){
        return new reviewResource(Review::find($id));
    }

}
