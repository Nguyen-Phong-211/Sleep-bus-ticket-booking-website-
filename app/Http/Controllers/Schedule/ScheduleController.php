<?php

namespace App\Http\Controllers\Schedule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Arrivalpoint;
use App\Models\Departurepoint;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    //index
    public function index()
    {
        return view('schedule.schedule');
    }
    //
    public function getAllDeparArriRoute()
    {
        $getRoute = DB::table('routes')
        ->select('routes.*', 'departurepoints.departurepoint_name', 'arrivalpoints.arrivalpoint_name', 'type_vehicles.type_vehicle_name')
        ->join('departurepoints', 'routes.departurepoint_id', '=', 'departurepoints.departurepoint_id')
        ->join('arrivalpoints', 'routes.arrivalpoint_id', '=', 'arrivalpoints.arrivalpoint_id')
        ->join('type_vehicles', 'routes.type_vehicle_id', '=', 'type_vehicles.type_vehicle_id')
        ->get();

        return view('schedule.schedule', compact('getRoute'));
    }
}
