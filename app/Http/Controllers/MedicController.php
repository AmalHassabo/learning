<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medic;

class MedicController extends Controller
{
    //
     public function ViewMedic()
    {
    	$mid=Medic::all();
    	
        return view('home',['Medic' => $mid


         ]);
    }

    //
     public function AddMedic(Request $request){
     if($request->isMethod('post') ){
     	$con = new Medic();
     		$con->name=$request->input('name');
     		$con->company_name=$request->input('company_name');
     		$con->pass=$request->input('pass');
     		$con->price=$request->input('price');
     		$con->pharmacy=$request->input('pharmacy');
     		$con->status=$request->input('status');
     		$con->save();
     }
    

        return view('home');
    
}

 public function EditMedic(Request $request,$id){
     if($request->isMethod('post') ){
        $con = Medic::find($id);
            $con->name=$request->input('name');
            $con->company_name=$request->input('company_name');
            $con->pass=$request->input('pass');
            $con->price=$request->input('price');
            $con->pharmacy=$request->input('pharmacy');
            $con->status=$request->input('status');
            $con->save();
            
            return redirect("edit"); 

     }
     else{
        $Medic=Medic::find($id);
        return view('edit',['Medic' => $Medic


         ]);
     }

}
}
