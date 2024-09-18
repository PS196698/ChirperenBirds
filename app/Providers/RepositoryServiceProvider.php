<?php

namespace App\Providers;

use App\Interfaces\BirdRepositoryInterface;
use App\Repositories\BirdRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BirdRepositoryInterface::class, BirdRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
