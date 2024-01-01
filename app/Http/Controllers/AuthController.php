<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() 
    {
        return view('auth/login');
    }

    public function login(Request $request) 
    {  
        dd($request);
    }

    public function register(Request $request) 
    {
        dd($request);
    }
}
