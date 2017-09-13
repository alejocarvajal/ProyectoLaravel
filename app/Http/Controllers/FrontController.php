<?php

namespace NewsGame\Http\Controllers;

use Illuminate\Http\Request;
use NewsGame\Cats;
use NewsGame\Post;
use NewsGame\User;
use NewsGame\Notifications\SlackNoti;
use Flashy;
use Mapper;
class FrontController extends Controller
{
    public function __construct(){
        $this->middleware('menuMid');
    }
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

    public function contact(){

        Mapper::map(4.6457251,-74.0779328,['zoom'=>15]);
        $nomCategoria= Cats::catNameRandom();
        $postByCat = Post::PostByRandom($nomCategoria[0]->name);
        $parametros = [
            'nomCat' => $nomCategoria,
            'postByCat'=>$postByCat,
        ];
        
        return view('front.contact',$parametros);
    }
    public function send(Request $request){
        $user= User::find(1);
        $user->notify(new SlackNoti($request));
        Flashy::message('Tu mensaje se envio correctamente');
        return redirect('/contacto');
    }
}
