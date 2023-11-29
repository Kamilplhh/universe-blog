<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function getAll() 
    {
        $objects = Planet::inRandomOrder()
        ->where('seen', '=', 'no')
        ->limit(1)
        ->get();
        
        return view('planet', compact('objects'));
    }
}
