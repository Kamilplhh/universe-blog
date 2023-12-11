<?php

namespace App\Interfaces;

interface InformationRepositoryInterface
{
    public function getAll();
    public function getNews();
    public function getEvents();
    public function addNews(array $file);
}