<?php

namespace NewsGame;
use DB;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';


    public static function myPostsCats(){
    	$posts  = DB::table('post')->join('categories','post.id_cat','=','categories.id')->select('post.id','post.title','post.slug','post.recomendado','categories.name')->paginate(10);

    	return $posts;
    }
}
