<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\InformationRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\Http;

class InformationController extends Controller
{
    private InformationRepositoryInterface $InformationRepository;

    public function __construct(InformationRepositoryInterface $InformationRepository)
    {
        $this->InformationRepository = $InformationRepository;
    }

    public function index()
    {
        $objects = $this->InformationRepository->getAll();

        try {
            $response = Http::get('http://api.open-notify.org/astros.json');
            if ($response->successful()) {
                $Array = $response->json();
                $peoples = $Array['people'];
                $peoples = (array_slice($peoples, 0, 9));

                return view('home', compact('objects', 'peoples'));
            } else {
                $message = "There's 0 people out in the space right now.";

                return view('home', compact('objects', 'message'));
            }
        } catch (Exception $e) {
            $message = 'Wystąpił błąd: ' . $e->getMessage();
            
            return view('home', compact('objects', 'message'));
        }
    }

    public function news()
    {
        $objects = $this->InformationRepository->getNews();

        return view('news', compact('objects'));
    }

    public function events()
    {
        $objects = $this->InformationRepository->getEvents();

        return view('events', compact('objects'));
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

        $fileArray = $request->all([]);
        $this->InformationRepository->addNews($fileArray);
        return redirect()->back();
    }
}
