<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeVehicle;
use App\Models\TypeTime;
use App\Models\Floor;
use App\Models\RowSeat;

class ReservationController extends Controller
{
    //index
    public function index()
    {
        $typeVehicles = TypeVehicle::all();
        $typeTimes = TypeTime::all();
        $floors = Floor::all();
        $rowSeats = RowSeat::all();

        return view('reservation.reservation', compact('typeVehicles', 'typeTimes', 'floors', 'rowSeats'));
    }
}