<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\InformationRepositoryInterface;

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

        return view('home', compact('objects'));
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
