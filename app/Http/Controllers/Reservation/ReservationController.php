<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeVehicle;
use App\Models\TypeTime;
use App\Models\Floor;
use App\Models\RowSeat;
use Illuminate\Support\Facades\DB;


class ReservationController extends Controller
{
    //index
    public function index()
    {
        $typeVehicles = TypeVehicle::all();
        $typeTimes = TypeTime::all();
        $floors = Floor::all();
        $rowSeats = RowSeat::all();

        $routeScheduleId = request('route_schedule'); 

        if($routeScheduleId)
        {
            $routes = DB::table('routes as r')
            ->join('departurepoints as d', 'r.departurepoint_id', '=', 'd.departurepoint_id')
            ->join('arrivalpoints as a', 'r.arrivalpoint_id', '=', 'a.arrivalpoint_id')
            ->join('route_details as rd', 'rd.route_id', '=', 'r.route_id')
            ->join('route_schedules as rs', 'rs.route_id', '=', 'r.route_id')
            ->join('type_vehicles as tv', 'tv.type_vehicle_id', '=', 'r.type_vehicle_id')
            ->join('row_seats as rst', 'rst.row_seat_id', '=', 'r.row_seat_id')
            ->join('floors as f', 'f.floor_id', '=', 'r.floor_id')
            ->select(
                'r.*',
                'd.departurepoint_id',
                'd.departurepoint_name',
                'd.detail_address as d_detail_address',
                'd.one_way as d_one_way',
                'd.transshipment as d_transshipment',
                'a.arrivalpoint_id',
                'a.arrivalpoint_name',
                'a.detail_address as a_detail_address',
                'a.one_way as a_one_way',
                'a.transshipment as a_transshipment',
                'rd.*',
                'rs.*',
                'tv.type_vehicle_name',
                'rst.row_seat_name',
                'f.floor_name'
            )
            ->when($routeScheduleId, function($query, $routeScheduleId) {
                return $query->where('rs.route_schedule_id', $routeScheduleId);
            })
            ->get();

            return view('reservation.reservation', compact('typeVehicles', 'typeTimes', 'floors', 'rowSeats', 'routes'));
        }
        else
        {
            $routes = DB::table('routes as r')
            ->join('departurepoints as d', 'r.departurepoint_id', '=', 'd.departurepoint_id')
            ->join('arrivalpoints as a', 'r.arrivalpoint_id', '=', 'a.arrivalpoint_id')
            ->join('route_details as rd', 'rd.route_id', '=', 'r.route_id')
            ->join('route_schedules as rs', 'rs.route_id', '=', 'r.route_id')
            ->join('type_vehicles as tv', 'tv.type_vehicle_id', '=', 'r.type_vehicle_id')
            ->join('row_seats as rst', 'rst.row_seat_id', '=', 'r.row_seat_id')
            ->join('floors as f', 'f.floor_id', '=', 'r.floor_id')
            ->select(
                'r.*',
                'd.departurepoint_id',
                'd.departurepoint_name',
                'd.detail_address as d_detail_address',
                'd.one_way as d_one_way',
                'd.transshipment as d_transshipment',
                'a.arrivalpoint_id',
                'a.arrivalpoint_name',
                'a.detail_address as a_detail_address',
                'a.one_way as a_one_way',
                'a.transshipment as a_transshipment',
                'rd.*',
                'rs.*',
                'tv.type_vehicle_name',
                'rst.row_seat_name',
                'f.floor_name'
            )
            ->get();

            return view('reservation.reservation', compact('typeVehicles', 'typeTimes', 'floors', 'rowSeats', 'routes'));
        }
    }
}