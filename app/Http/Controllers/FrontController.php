<?php

namespace NewsGame\Http\Controllers;

use Illuminate\Http\Request;
use NewsGame\Cats;
use NewsGame\Post;
class FrontController extends Controller
{
    public function home(){
    	$posts = Post::all();
    	return view("front.index",['posts'=>$posts]);
    }
}
