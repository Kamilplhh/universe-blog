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
}
