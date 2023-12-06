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

    public function addPlanet(Request $request) 
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'mainText' => ['required', 'text'],
            'mainText' => ['nullable', 'text'],
            'photo1' => ['required', 'mimes:jpg,png', 'max:1024'],
            'photo2' => ['nullable', 'mimes:jpg,png', 'max:1024'],
            'photo3' => ['nullable', 'mimes:jpg,png', 'max:1024'],
            'photo4' => ['nullable', 'mimes:jpg,png', 'max:1024'],
            'photo5' => ['nullable', 'mimes:jpg,png', 'max:1024'],
            'format' => ['required', 'number'],
            'emailPort' => ['required', 'string', 'max:20'],
        ]);
        dd($request);
    }
}
