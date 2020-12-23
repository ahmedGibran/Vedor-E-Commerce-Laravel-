<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::paginate(env('paginate_code'));
        return view('admin.tag.tag',['tag'=>$tags]);
    }
}
