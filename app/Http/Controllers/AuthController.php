<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index() 
    {
        return view('auth/login');
    }

    public function login(Request $request) 
    {  
        $request->validate([
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
        ]);
    }

    public function register(Request $request) 
    {
        $request->validate([
            'email' => ['required', 'unique', 'string', 'max:255'],
            'nickname' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
        ]);
    }
}
