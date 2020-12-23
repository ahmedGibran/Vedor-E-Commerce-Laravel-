<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public static function index(){
        $reviews =Review::with(['product','customer'])->paginate(env('paginate_code'));
        return view('admin.reviews.review',['review'=>$reviews]);

    }

}
