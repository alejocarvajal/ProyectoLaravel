<?php

namespace NewsGame\Http\Controllers;

use Illuminate\Http\Request;
use NewsGame\Cats;
use NewsGame\Post;

class FrontController extends Controller
{
    public function home(){
    	$posts = Post::orderBy('id','DESC')->paginate(6);
    	$recomendados = Post::join('categories','post.id_cat','=','categories.id')->select('post.*','categories.name as categoria')->where('post.recomendado','like',true)->get();
    	$categorias = Cats::inRandomOrder()->limit(4)->get();

        $nomCategoria= Cats::select('name')->inRandomOrder()->limit(1)->get();
        $postByCat = Post::join('categories','post.id_cat','=','categories.id')->select('post.*')->where('categories.name','like',$nomCategoria[0]->name)->get();

    	$parametros = [
    		'posts'=>$posts,
    		'recomendados'=>$recomendados,
    		'categorias'=>$categorias,
            'nomCat' => $nomCategoria,
            'postByCat'=>$postByCat,
    	];

    	return view('front.index',$parametros);
    }
}
