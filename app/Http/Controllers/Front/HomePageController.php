<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomePageController extends Controller
{
    public function index(){
        $data = Post::where('status','publish')->orderby('id','desc')->paginate(5);
        return view('components.front.home-page',compact('data'));
    }
}
