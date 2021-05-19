<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class VideosController extends Controller
{
   public function index(){
   		$videos = App\Videos::all();
   		return view('welcome',compact('videos'));
   }
    

    public function uploap(Request $request){
     	$New = new App\Videos;	
     	$New->nombre = $request->nombre;			
		$New->url = $request->url;
		$New->save();
   		$videos = App\Videos::all();
   		return view('welcome',compact('videos'))->with('mensaje','New Video Añadido');
   		//return redirect()->route('welcome',compact('videos'))->with('mensaje','New Video Añadido');
   }
}
