<?php

namespace App\Providers;

// use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
// use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $this->registerPolicies();

        Passport::ignoreMigrations(); // Optional: Ignore Passport's default migrations if you have custom ones
    }
}
