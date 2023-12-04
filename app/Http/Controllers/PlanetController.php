<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function getPlanet() 
    {
        $object = Planet::inRandomOrder()
        ->where('status', '=', 'active')
        ->limit(1)
        ->get();

        return view('planet', compact('object'));
    }

    public function addPlanet() 
    {

    }
}
