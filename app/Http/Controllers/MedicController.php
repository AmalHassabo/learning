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
        return view('home',['Medic' => $mid ]);
    }
}
