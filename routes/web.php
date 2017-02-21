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
use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola/{nombre?}',function($nombre='usuario') {
	return view("hola",['nombre'=>$nombre]);
});

Route::resource('/admin','AdminController');
Route:: resource('/categorias','Categorias');
Route::resource('/post','PostController');

Route::get('/subir',function() {
	return view("subir");
});
Route::post('storage',function(){
	$id = 1;
	$path = request()->file('image')->storeas('users/'.$id,'avatar'.Carbon::now()->second.'jpg');
	return 'Todo Ok '.$path;
});