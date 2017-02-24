<?php

namespace NewsGame;
use DB;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    public static function myPostsCats(){
    	$posts = DB::table('post')->join('categories','post.id_cat','=','categories.id')->select('post.title','post.slug','categories.name')->paginate(4);
    	return $posts;
    }
}
