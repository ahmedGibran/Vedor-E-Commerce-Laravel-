<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Resources\categoryResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class categorycontroller extends Controller
{

    public function index()
    {
        return categoryResource::collection(Category::paginate());
    }
    public function show($id){
        return new categoryResource(Category::find($id));
    }

}
