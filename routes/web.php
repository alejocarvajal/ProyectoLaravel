<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Illuminate\Http\Request;
use Carbon\Carbon;

Route::get('/', "FrontController@home");

Route::get('post/{slug}','PostController@show');

Route::resource('/admin','AdminController');
Route::resource('/categorias','CategoriasController');
Route::resource('/post','PostController');

Route::get('subir',function(){
	return view('subir');
});

Route::post('storage',function(){
	$id = 1;
	$path = request()->file('image')->store('users/'.$id);
	return 'Todo Ok '.$path;
});

