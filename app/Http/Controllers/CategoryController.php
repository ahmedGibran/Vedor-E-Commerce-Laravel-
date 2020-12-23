<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $category = Category::paginate(15);
        return view('admin.category.categories')->with(['category'=>$category]);
    }
    public  function indexmobail(){
        $category = Category::all();
        return $category->toArray();
    }

}
