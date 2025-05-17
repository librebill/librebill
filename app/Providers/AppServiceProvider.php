<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        // Load default language
        if (Auth::check()) {
            $user = Auth::user();
            app()->setLocale($user->language);
        } else {
            app()->setLocale(config('app.locale'));
        }

        // Load default theme
        View::getFinder()->addLocation(resource_path('views/' . config('app.theme')));
    }
}
