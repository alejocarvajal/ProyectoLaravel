<?php

namespace NewsGame\Http\Controllers;

use Illuminate\Http\Request;
use NewsGame\Cats;
use NewsGame\Post;

class FrontController extends Controller
{
    public function home(){
    	$posts = Post::orderBy('id','DESC')->paginate(6);
        $categorias = Cats::catsRadom(4);
        $nomCategoria= Cats::catNameRandom();
        $postByCat = Post::PostByRandom($nomCategoria[0]->name);
        $recomendados = Post::top();

    	$parametros = [
    		'posts'=>$posts,
    		'recomendados'=>$recomendados,
    		'categorias'=>$categorias,
            'nomCat' => $nomCategoria,
            'postByCat'=>$postByCat,
    	];

    	return view('front.index',$parametros);
    }

    public function tags($tag){
        $posts = Post::PostByTag($tag);
        $categorias = Cats::catsRadom(4);
        $nomCategoria= Cats::catNameRandom();
        $postByCat = Post::PostByRandom($nomCategoria[0]->name);

        $parametros = [
            'posts'=>$posts,
            'categorias'=>$categorias,
            'nomCat' => $nomCategoria,
            'postByCat'=>$postByCat,
        ];
        
        return view('front.categories',$parametros);
    }
}
