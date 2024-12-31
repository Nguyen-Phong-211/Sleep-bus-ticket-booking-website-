<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Arrivalpoint;
use App\Models\Departurepoint;
use App\Models\Route;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //index
    public function index()
    {
        return view('home.home');
    }
    //find route by one_way or round_way, departurepoint, arrivalpoint, date, tickets
    // public function findRoute(Request $request)
    // {
    //     // get datas from request
    //     $arrivalPointId = $request->input('address-to');
    //     $departurePointId = $request->input('address-from');
    //     $departureDate = $request->input('date-start');
    //     $direct = $request->input('direct'); 
    
    //     // query
    //     $results = DB::table('routes as r')
    //         ->join('departurepoints as d', 'r.departurepoint_id', '=', 'd.departurepoint_id')
    //         ->join('arrivalpoints as a', 'r.arrivalpoint_id', '=', 'a.arrivalpoint_id')
    //         ->join('route_details as rd', 'rd.route_id', '=', 'r.route_id')
    //         ->join('route_schedules as rs', 'rs.route_id', '=', 'r.route_id')
    //         ->join('type_vehicles as tv', 'tv.type_vehicle_id', '=', 'r.type_vehicle_id')
    //         ->join('row_seats as rst', 'rst.row_seat_id', '=', 'r.row_seat_id')
    //         ->join('floors as f', 'f.floor_id', '=', 'r.floor_id')
    
    //         ->where(function ($query) use ($direct) {
    //             $query->where('r.one_way', '=', $direct)
    //                   ->orWhere('r.round_trip', '=', 0);
    //         })
    //         ->orWhere(function ($query) use ($direct) {
    //             $query->where('r.one_way', '=', 0)
    //                   ->orWhere('r.round_trip', '=', $direct);
    //         })
    
    //         ->where('r.departurepoint_id', '=', $departurePointId)
    //         ->where('r.arrivalpoint_id', '=', $arrivalPointId)
    //         ->where('rs.departure_date', '=', $departureDate)
    
    //         ->select(
    //             'r.*',
    //             'd.departurepoint_id',
    //             'd.departurepoint_name',
    //             'd.detail_address as d_detail_address',
    //             'a.arrivalpoint_id',
    //             'a.arrivalpoint_name',
    //             'a.detail_address as a_detail_address',
    //             'rd.*',
    //             'rs.*',
    //             'tv.type_vehicle_name',
    //             'rst.row_seat_name',
    //             'f.floor_name'
    //         )
    //         ->get();
    
    //     return view('reservation.reservation', [
    //         'departurepoint' => $departurePointId, 
    //         'arrivalpoint' => $arrivalPointId, 
    //         'date' => $departureDate, 
    //         'tickets' => $results, 
    //         'modules' => 'module_value',
    //         'request'
    //     ]);
    // }    
}
