<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BigController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function index()
    {
        return view('basic');
    }

    public function hello()
    {
        return view('about');
    }

    public function show()
    {
        return view('cart');
    }

    public function welcome()
    {
        return view('checkout');
    }

    public function cont()
    {
        return view('contact');
    }

    public function home()
    {
        return view('shop-single');
    }

    public function boss()
    {
        return view('shop');
    }

    public function thank()
    {
        return view('thankyou');
    }

    
}
