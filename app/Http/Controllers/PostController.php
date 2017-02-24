<?php

namespace NewsGame\Http\Controllers;

use Illuminate\Http\Request;
use NewsGame\Cats;
use NewsGame\Post;
use Illuminate\Validation\Rule;
use Flashy;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =[
    'title'=>['required','min:3','max:30'],
    'tags'=>['max:30'],
    'slug'=>['required','max:15','unique:post'],
    'cat_id'=>['required']];

    public function index()
    {
       $post= Post::myPostsCats();

       
        return view('post.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $cats=Cats::pluck('name','id');

        return view('post.create',['cats'=>$cats]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,$this->rules);
        $post = new Post;
        $post->title=$request->title;
        $post->slug=$request->slug;
        if($request->file('image')==null){
            $post->path = "";
        }else{
            $post->path = $request->file('image')->store('post');
        }
        $post->content=$request->content;
        $post->tags=$request->tags;
        $post->id_cat=$request->cat_id;
        $post->save();
        Flashy::success('Entrada agregada correctamente');
        return view("/post");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($value)
    {
        $post = Post::join('categories','post.id','=','categories.id')->select('post.*','categories.name as categoria')->where('post.slug','like',$value)->first();
        return view('front.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "hola";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
