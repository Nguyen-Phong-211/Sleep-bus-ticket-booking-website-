<?php

namespace App\Http\Controllers\OrderTicket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Auth;


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
        ->join('branches as b', 'd.branch_id', '=', 'b.branch_id')
        ->join('route_schedules as rs', 'rs.route_id', '=', 'r.route_id')
        ->where('r.route_id', '=', $routeId)
        ->get();

        $info_arrivalpoints = DB::table('arrivalpoints as a')
        ->join('branches as b', 'b.branch_id', '=', 'a.branch_id')
        ->join('routes as r', 'r.arrivalpoint_id', '=', 'a.arrivalpoint_id')
        ->join('route_details as rd', 'rd.route_id', '=', 'r.route_id')
        ->where('r.route_id', '=', $routeId)
        ->select(
            'a.*', 
            'b.branch_id',
            'b.branch_name', 
            'b.address', 
            'r.route_id', 
            'rd.*')
        ->get();

        function urlEncodeWithPlus($string) {
            return str_replace(' ', '+', $string);
        }        
    

        return view('reservation/orderticket.orderticket',
         compact(
            'type_vehicle_id',
            'route',
            'displaySeats',
            'seat_name',
            'total_price',
            'branches',
            'info_departures',
            'info_arrivalpoints',
            )
        );
    }

    // order ticket
    public function confirmOrderTicket(Request $request)
    {
        $departurepoint_name = $request->input('departurepoint_name');
        $arrivalpoint_name = $request->input('arrivalpoint_name');
        $user = Auth::user();
        $date_departure = $request->input('date_departure');
        $arrivalPoint = $request->input('arrivalPoint');
        $travelMode = $request->input('travelMode');

        $qrData = [
            'Họ tên' => $user->fullname,
            'Số điện thoại' => $user->number_phone,
            'Email' => $user->email,
            'Điểm đi' => $departurepoint_name,
            'Điểm đến' => $arrivalpoint_name
        ];
        $qrString = "Họ tên: {$user->fullname}\nSố điện thoại: {$user->number_phone}\nEmail: {$user->email}\nĐiểm đi: {$departurepoint_name}\nĐiểm đến: {$arrivalpoint_name}";

        $qrCode = QrCode::format('png')->encoding('UTF-8')->size(200)->generate($qrString);

        return view(
            'reservation/orderticket.confirm', 
        compact(
                'qrCode',
                'departurepoint_name',
                'arrivalpoint_name',
                'date_departure',
                'arrivalPoint',
                'travelMode',
            )
        );
    }
}
