<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Arrivalpoint;
use App\Models\Departurepoint;
use App\Models\TypeTime;
use App\Models\TypeVehicle;
use App\Models\Floor;
use App\Models\RowSeat;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

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
            $departurePoints = Departurepoint::with('arrivalPoints')->get();
            $typeVehicles = TypeVehicle::all();
            $view->with([
                'arrivalPoints' => $arrivalPoints,
                'departurePoints' => $departurePoints,
                'typeVehicles' => $typeVehicles,
                'typeTimes' => TypeTime::all(),
                'floors' => Floor::all(),
                'rowSeats' => RowSeat::all(),
            ]);
        });

        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }
    }
}
