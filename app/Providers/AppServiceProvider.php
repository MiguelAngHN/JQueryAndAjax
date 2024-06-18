<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('App\Services\CategoriesService', 'App\Services\Implementacions\CategoriesService');
        $this->app->bind('App\Services\PatientsService', 'App\Services\Implementations\PatientsServicesImpl');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
