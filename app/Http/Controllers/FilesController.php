<?php

namespace NewsGame\Http\Controllers;

use Illuminate\Http\Request;
use NewsGame\files;
use Carbon\carbon;
use Storage;

class FilesController extends Controller
{
    function __construct(){
        $this->middleware('auth');
        $this->middleware('adminMid');
    }

    public function lis(){
        $file = files::all();
        return view('files.index',['files'=>$file]);
    }

    public function up(){
        return view('files.subir');
    }
    public function storaged(Request $request){
    	$myFiles = new files();
    	$file = $request->file('image');
    	$name = $file->getClientOriginalName();
    	$ext = $file->extension();
    	$path = $file->storeAs('files',Carbon::now()->second.$name);
    	$myFiles->name=$name;
    	$myFiles->type=$ext;
    	$myFiles->path=$path;
    	$myFiles->save();

    	return redirect('subir');
    }
    public function destroy($id){
        $file = files::find($id);
        Storage::delete($file->path);
        $file->delete();
        return redirect('subir');
    }
}
