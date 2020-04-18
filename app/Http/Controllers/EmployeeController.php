<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;


class EmployeeController extends Controller
{
    //
     public function ViewEmployee()
    {

    	$emp=Employee::all();
        return view('index',['Employee' => $emp]);
    }
}
