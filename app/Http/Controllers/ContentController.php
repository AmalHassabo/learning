<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
    //
     public function AddContent(Request $request){
     if($request->isMethod('post') ){
     	$go = new Content();
     		$go->add=$request->input('add');
     		$go->save();
     }
    

        return view('add');
    
}
    public function ShowContent( ){

         return view('add');

  }
}


