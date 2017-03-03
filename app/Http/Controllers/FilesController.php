<?php

namespace NewsGame\Http\Controllers;

use Illuminate\Http\Request;
use NewsGame\files;
use Carbon\carbon;

class FilesController extends Controller
{

    public function up(){
    	return view('subir');
    }
    public function storage(Request $request){
    	$myFiles = new files();
    	$file = $request->file('image');
    	$name = $file->getClientOriginalName();
    	$ext = $file->extension();
    	$path = $file->storeAs('files/',Carbon::now()->second.$name);
    	$myFiles->name=$name;
    	$myFiles->type=$ext;
    	$myFiles->path=$path;
    	$myFiles->save();

    	return 'Todo Ok '.$path;
    }
}
