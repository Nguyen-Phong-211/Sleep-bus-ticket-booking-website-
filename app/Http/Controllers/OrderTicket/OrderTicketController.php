<?php

namespace App\Http\Controllers\OrderTicket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderTicketController extends Controller
{
    //index
    public function index(Request $request)
    {
        $type_vehicle_id = $request->input('type_vehicle_id');
        $route = $request->input('route');
        $seat_name = $request->input('seat_name');
        $total_price = $request->input('total_price');
        $routeId = $request->input('route');

        $displaySeats = DB::table('seats as s')
            ->join('type_vehicles as tv', 'tv.type_vehicle_id', '=', 's.type_vehicle_id')
            ->join('floors as f', 'f.floor_id', '=', 's.floor_id')
            ->select(
                's.*',
                'tv.type_vehicle_name',
                'tv.max_seat',
                'f.floor_name'
            )
            ->whereIn('s.type_vehicle_id', [1, 2, 3])
            ->get();

        $branches = DB::table('branches')
        ->get();

        $info_departures = DB::table('departurepoints as d')
        ->join('routes as r', 'r.departurepoint_id', '=', 'd.departurepoint_id')
        ->join('route_schedules as rs', 'rs.route_id', '=', 'r.route_id')
        ->where('r.route_id', '=', $routeId)
        ->get();

        return view('reservation/orderticket.orderticket',
         compact(
            'type_vehicle_id',
            'route',
            'displaySeats',
            'seat_name',
            'total_price',
            'branches',
            'info_departures'
            )
        );
    }
}
