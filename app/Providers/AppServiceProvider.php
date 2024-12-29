<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Arrivalpoint;
use App\Models\Departurepoint;

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
    public function boot()
    {
        View::composer('*', function ($view) {
            $arrivalPoints = Arrivalpoint::all()->toArray();
            $departurePoints = Departurepoint::all()->toArray();
            $view->with([
                'arrivalPoints' => $arrivalPoints,
                'departurePoints' => $departurePoints
            ]);
        });
    }
}
