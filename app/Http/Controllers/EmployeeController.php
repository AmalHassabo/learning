<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Hash;


class EmployeeController extends Controller
{
    //
     public function ViewEmployee()
    {

    	$emp=Employee::all();
    	/**dd($emp);*/
        return view('index',['Employee' => $emp]);
    }

     public function AddEmployee(Request $request){
     if($request->isMethod('post') ){
     	$empo = new Employee();
     		$empo->name=$request->input('name');
     		$empo->phone_num=$request->input('phone_num');
     		$empo->degree_of_job=$request->input('degree_of_job');
     		$empo->job=$request->input('job');
     		$empo->email=$request->input('email');
     		$empo->password=Hash::make($request->input('password'));
     		$empo->save();
     }
    return view('index');
    
}
}
