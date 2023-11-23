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
}