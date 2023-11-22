<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\InformationRepositoryInterface;
use App\Repositories\InformationRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(InformationRepositoryInterface::class, InformationRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
