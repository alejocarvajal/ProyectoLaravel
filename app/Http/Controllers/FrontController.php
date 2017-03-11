<?php

namespace NewsGame\Http\Controllers;

use Illuminate\Http\Request;
use NewsGame\Cats;
use NewsGame\Post;
class FrontController extends Controller
{
    public function home(){
    	$posts = Post::all();
    	$recomendados = Post::join('categories','post.id','=','categories.id')->select('post.*','categories.name as categoria')->where('post.recomendado','like',true)->get();
    	return view("front.index",['posts'=>$posts,'recomendados'=>$recomendados]);
    }
}
