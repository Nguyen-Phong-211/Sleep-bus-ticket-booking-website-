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
        $getRoute = DB::table('routes')
        ->select('routes.*', 'departurepoints.departurepoint_name', 'arrivalpoints.arrivalpoint_name', 'type_vehicles.type_vehicle_name')
        ->join('departurepoints', 'routes.departurepoint_id', '=', 'departurepoints.departurepoint_id')
        ->join('arrivalpoints', 'routes.arrivalpoint_id', '=', 'arrivalpoints.arrivalpoint_id')
        ->join('type_vehicles', 'routes.type_vehicle_id', '=', 'type_vehicles.type_vehicle_id')
        ->get();

        return view('schedule.schedule', compact('getRoute'));
    }

    public function getRoutes(Request $request)
    {
        $departureId = $request->departure_id;
        $arrivalId = $request->arrival_id;

        $query = DB::table('routes')
            ->select('routes.*', 'departurepoints.departurepoint_name', 'arrivalpoints.arrivalpoint_name', 'type_vehicles.type_vehicle_name')
            ->join('departurepoints', 'routes.departurepoint_id', '=', 'departurepoints.departurepoint_id')
            ->join('arrivalpoints', 'routes.arrivalpoint_id', '=', 'arrivalpoints.arrivalpoint_id')
            ->join('type_vehicles', 'routes.type_vehicle_id', '=', 'type_vehicles.type_vehicle_id')
            ->where('routes.departurepoint_id', $departureId);

        if ($arrivalId) {
            $query->where('routes.arrivalpoint_id', $arrivalId);
        }

        return response()->json($query->get());
    }


}
