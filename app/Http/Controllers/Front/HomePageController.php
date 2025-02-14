<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

use function PHPUnit\Framework\returnSelf;

class HomePageController extends Controller
{
    public function index(){

        $lastData = $this->lastData();
        

        $data = Post::where('status','publish')->where('id','!=',$lastData->id)->orderby('id','desc')->paginate(2);
        return view('components.front.home-page',compact('data'));
    }

    private function lastData(){
        $data = Post::where('status','publish')->orderBy('id','desc')->latest()->first();
        return $data;
    }
}
