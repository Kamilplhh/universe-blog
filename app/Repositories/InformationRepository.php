<?php

namespace App\Repositories;

use App\Interfaces\InformationRepositoryInterface;
use App\Models\Information;

class InformationRepository implements InformationRepositoryInterface 
{
    public function getAll() 
    {
        return Information::all();
    }

    public function getNews() 
    {
        return Information::orderBy('created_at', 'DESC')->where('category', '=', 'News')->get();
    }

    public function getEvents() 
    {
        return Information::orderBy('created_at', 'DESC')->where('category', '=', 'Event')->get();
    }

    public function addNews(array $file)
    {
        return Information::create($file);
    }
}