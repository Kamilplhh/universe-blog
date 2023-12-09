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
}
