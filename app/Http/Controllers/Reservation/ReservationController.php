<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReservationController extends Controller
{
    //index
    public function index()
    {
        $routeScheduleId = request('route_schedule');

        // Cấu trúc chung của query lấy dữ liệu routes
        $routesQuery = DB::table('routes as r')
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
            );

        if ($routeScheduleId) {
            $routesQuery->where('rs.route_schedule_id', $routeScheduleId);
        }

        $routes = $routesQuery->get();

        $getSeatStatus = function ($typeVehicleId, $status) {
            return DB::table('routes as r')
                ->join('type_vehicles as tv', 'r.type_vehicle_id', '=', 'tv.type_vehicle_id')
                ->join('seats as s', 'tv.type_vehicle_id', '=', 's.type_vehicle_id')
                ->where('s.status', '=', $status)
                ->where('s.type_vehicle_id', '=', $typeVehicleId)
                ->select(DB::raw('COUNT(s.status) as status_seat'))
                ->first();
        };

        $status_seat_limousine = $getSeatStatus(1, 0);  
        $status_seat_sleepbus = $getSeatStatus(2, 0);  
        $status_seat_coach = $getSeatStatus(3, 0);   

        return view('reservation.reservation', compact('routes', 'status_seat_limousine', 'status_seat_sleepbus', 'status_seat_coach'));
    }


    public function findRoute(Request $request)
    {
        // get datas from request
        $arrivalPointId = $request->input('address_to');
        $departurePointId = $request->input('address_from');
        $departureDate = $request->input('date_start');
        $direct = $request->input('direct');
        $ticket = $request->input('number_ticket');

        // query
        $routes = DB::table('routes as r')
            ->join('departurepoints as d', 'r.departurepoint_id', '=', 'd.departurepoint_id')
            ->join('arrivalpoints as a', 'r.arrivalpoint_id', '=', 'a.arrivalpoint_id')
            ->join('route_details as rd', 'rd.route_id', '=', 'r.route_id')
            ->join('route_schedules as rs', 'rs.route_id', '=', 'r.route_id')
            ->join('type_vehicles as tv', 'tv.type_vehicle_id', '=', 'r.type_vehicle_id')
            ->join('row_seats as rst', 'rst.row_seat_id', '=', 'r.row_seat_id')
            ->join('floors as f', 'f.floor_id', '=', 'r.floor_id')

            ->where(function ($query) use ($direct) {
                $query->where('r.one_way', '=', $direct)
                    ->orWhere('r.round_trip', '=', 0);
            })
            ->where(function ($query) use ($direct) {
                $query->where('r.one_way', '=', 0)
                    ->orWhere('r.round_trip', '=', $direct);
            })
            ->where('r.departurepoint_id', '=', $departurePointId)
            ->where('r.arrivalpoint_id', '=', $arrivalPointId)
            ->where('rs.departure_date', '=', $departureDate)
            ->select(
                'r.*',
                'd.departurepoint_id',
                'd.departurepoint_name',
                'd.detail_address as d_detail_address',
                'a.arrivalpoint_id',
                'a.arrivalpoint_name',
                'a.detail_address as a_detail_address',
                'rd.*',
                'rs.*',
                'tv.type_vehicle_name',
                'rst.row_seat_name',
                'f.floor_name'
            )
            ->get();


        function getStatusSeat($typeVehicleId)
        {
            return DB::table('routes as r')
                ->join('type_vehicles as tv', 'r.type_vehicle_id', '=', 'tv.type_vehicle_id')
                ->join('seats as s', 'tv.type_vehicle_id', '=', 's.type_vehicle_id')
                ->where('s.status', '=', 0)
                ->where('s.type_vehicle_id', '=', $typeVehicleId)
                ->select(DB::raw('COUNT(s.status) as status_seat'))
                ->first();
        }

        $status_seat_limousine = getStatusSeat(1);
        $status_seat_sleepbus = getStatusSeat(2);
        $status_seat_coach = getStatusSeat(3);

        $status_seats = [
            'limousine' => $status_seat_limousine,
            'sleepbus' => $status_seat_sleepbus,
            'coach' => $status_seat_coach,
        ];

        foreach ($status_seats as $key => $status_seat) {
            if ($ticket <= $status_seat->status_seat) {
                return view('reservation.reservation', [
                    'routes' => $routes,
                    'direct' => $direct,
                    'departurePointId' => $departurePointId,
                    'arrivalPointId' => $arrivalPointId,
                    'departureDate' => $departureDate,
                    'ticket' => $ticket,
                    'status_seats' => $status_seats,
                    'status_seat_limousine' => $status_seat_limousine,
                    'status_seat_sleepbus' => $status_seat_sleepbus,
                    'status_seat_coach' => $status_seat_coach,
                ]);
            }
        }

        session()->flash('end_seats', 'Không đủ số ghế trống');
        // return redirect()->route('reservation.index'); 
        return view('reservation.reservation', [
            'routes' => $routes,
            'direct' => $direct,
            'departurePointId' => $departurePointId,
            'arrivalPointId' => $arrivalPointId,
            'departureDate' => $departureDate,
            'ticket' => $ticket,
            'status_seats' => $status_seats,
            'status_seat_limousine' => $status_seat_limousine,
            'status_seat_sleepbus' => $status_seat_sleepbus,
            'status_seat_coach' => $status_seat_coach,
        ]);
    }
    //find route by price
    public function findRouteByPrice(Request $request)
    {
        $price_range = request('price_range');

        $routesQuery = DB::table('routes as r')
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
            );

        if ($price_range) {
            $routesQuery->where('r.price', $price_range);
        }

        $routes = $routesQuery->get();

        $getSeatStatus = function ($typeVehicleId, $status) {
            return DB::table('routes as r')
                ->join('type_vehicles as tv', 'r.type_vehicle_id', '=', 'tv.type_vehicle_id')
                ->join('seats as s', 'tv.type_vehicle_id', '=', 's.type_vehicle_id')
                ->where('s.status', '=', $status)
                ->where('s.type_vehicle_id', '=', $typeVehicleId)
                ->select(DB::raw('COUNT(s.status) as status_seat'))
                ->first();
        };

        $status_seat_limousine = $getSeatStatus(1, 0);  
        $status_seat_sleepbus = $getSeatStatus(2, 0);  
        $status_seat_coach = $getSeatStatus(3, 0);   

        return view('reservation.reservation', compact('routes', 'status_seat_limousine', 'status_seat_sleepbus', 'status_seat_coach', 'price_range'));
    }
    //filter route
    public function filterRoutes(Request $request)
    {
        $date_filter = $request->input('date_filter');
        $vehicle_type = $request->input('vehicle_type');
        $sit_type = $request->input('sit_type');
        $floor_type = $request->input('floor_type');
        $time_filters = $request->input('time_filters', []);

        $query = DB::table('routes as r')
        ->join('departurepoints as d', 'r.departurepoint_id', '=', 'd.departurepoint_id')
        ->join('arrivalpoints as a', 'r.arrivalpoint_id', '=', 'a.arrivalpoint_id')
        ->join('route_details as rd', 'rd.route_id', '=', 'r.route_id')
        ->join('route_schedules as rs', 'rs.route_id', '=', 'r.route_id')
        ->join('type_vehicles as tv', 'tv.type_vehicle_id', '=', 'r.type_vehicle_id')
        ->join('row_seats as rst', 'rst.row_seat_id', '=', 'r.row_seat_id')
        ->join('floors as f', 'f.floor_id', '=', 'r.floor_id')
        ->join('type_times as tt', 'tt.type_time_id', '=', 'r.type_time_id')
        ->select(
            'r.*',
            'd.departurepoint_name',
            'd.detail_address as d_detail_address',
            'd.one_way as d_one_way',
            'a.arrivalpoint_name',
            'a.detail_address as a_detail_address',
            'rd.*',
            'rs.*',
            'tv.type_vehicle_name',
            'rst.row_seat_name',
            'f.floor_name',
            'tt.*'
        );

        if ($date_filter) {
            $query->where('rs.departure_date', '=', $date_filter);
        }
    
        if ($vehicle_type && $vehicle_type != 'all') {
            $query->where('r.type_vehicle_id', '=', $vehicle_type);
        }
    
        if ($sit_type && $sit_type != 'all') {
            $query->where('r.row_seat_id', '=', $sit_type);
        }
    
        if ($floor_type && $floor_type != 'all') {
            $query->where('r.floor_id', '=', $floor_type);
        }
    
        if (!empty($time_filters)) {
            $query->whereIn('r.type_time_id', $time_filters);
        }
    
        $routes = $query->get();

        $getSeatStatus = function ($typeVehicleId, $status) {
            return DB::table('routes as r')
                ->join('type_vehicles as tv', 'r.type_vehicle_id', '=', 'tv.type_vehicle_id')
                ->join('seats as s', 'tv.type_vehicle_id', '=', 's.type_vehicle_id')
                ->where('s.status', '=', $status)
                ->where('s.type_vehicle_id', '=', $typeVehicleId)
                ->select(DB::raw('COUNT(s.status) as status_seat'))
                ->first();
        };

        $status_seat_limousine = $getSeatStatus(1, 0);  
        $status_seat_sleepbus = $getSeatStatus(2, 0);  
        $status_seat_coach = $getSeatStatus(3, 0);   

        return view('reservation.reservation', compact('routes', 'status_seat_limousine', 'status_seat_sleepbus', 'status_seat_coach', 'date_filter', 'vehicle_type', 'sit_type', 'floor_type', 'time_filters'));
    }
}
