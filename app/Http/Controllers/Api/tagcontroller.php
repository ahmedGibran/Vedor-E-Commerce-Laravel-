<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\tagResource;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class tagcontroller extends Controller
{
  public function index(){
      return tagResource::collection(Tag::paginate());
  }

  public function show($id){
      return new tagResource(Tag::find($id));
  }
}
