<?php

namespace App\Providers;

use App\Interfaces\MechanicShopsInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\Eloquent\MechanicShopsRepository;
use App\Repositories\Eloquent\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->createSingletons();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    private function createSingletons(): void
    {
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(MechanicShopsInterface::class, MechanicShopsRepository::class);
    }
}