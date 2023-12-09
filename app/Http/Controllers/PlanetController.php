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

    public function addNews(Request $request) 
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'mainText' => ['required', 'max:5000'],
            'mainText' => ['nullable', 'max:5000'],
            'photo1' => ['required', 'mimes:jpg,png'],
            'photo2' => ['nullable', 'mimes:jpg,png'],
            'photo3' => ['nullable', 'mimes:jpg,png'],
            'photo4' => ['nullable', 'mimes:jpg,png'],
            'photo5' => ['nullable', 'mimes:jpg,png'],
            'format' => ['required', 'numeric'],
            'category' => ['required', 'string', 'max:20'],
        ]);

        dd($request);
    }
}
