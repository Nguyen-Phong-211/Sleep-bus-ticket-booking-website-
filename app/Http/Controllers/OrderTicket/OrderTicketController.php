<?php

namespace App\Http\Controllers\OrderTicket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


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
                'rd.*'
            )
            ->get();

        function urlEncodeWithPlus($string)
        {
            return str_replace(' ', '+', $string);
        }


        return view(
            'reservation/orderticket.orderticket',
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
        $finalTotal = $request->input('finalTotal');
        $otherFees = $request->input('otherFees');
        $totalPrice = $request->input('totalPrice');
        $time_departure = $request->input('time_departure');
        $type_vehicle_id = $request->input('type_vehicle_id');
        $route = $request->input('route');

        $seatName = $request->input('seatName');
        $seatNames = explode(',', $seatName);

        $getInfoSeat = DB::table('seats as s')
            ->join('type_vehicles as tv', 'tv.type_vehicle_id', '=', 's.type_vehicle_id')
            ->join('vehicles as v', 'tv.type_vehicle_id', '=', 'v.type_vehicle_id')
            ->join('row_seats as rs', 's.row_seat_id', '=', 'rs.row_seat_id')
            ->join('routes as r', 's.type_vehicle_id', '=', 'r.type_vehicle_id')
            ->join('floors as f', 'f.floor_id', '=', 's.floor_id')
            ->whereIn('s.seat_name', $seatNames)
            ->where('s.type_vehicle_id', '=', $type_vehicle_id)
            ->select('s.seat_name', 'tv.type_vehicle_name', 'rs.row_seat_name', 'f.floor_name', 'v.license_plate', 'r.price')
            ->get();

        $uniqueLicensePlates = $getInfoSeat->pluck('license_plate')->unique();

        $getAllSeat = DB::table('seats')
            ->where('seat_name', '=', $seatName)
            ->get();

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
                'finalTotal',
                'otherFees',
                'seatName',
                'totalPrice',
                'getAllSeat',
                'time_departure',
                'getInfoSeat',
                'uniqueLicensePlates',
                'route'
            )
        );
    }

    public function storage(Request $request)
    {
        try {
            $routeId = $request->input('route');
            $type_vehicle_id = DB::table('routes')->where('route_id', $routeId)->value('type_vehicle_id');
            $userId = Auth::user()->user_id;

            $price = DB::table('routes')->where('route_id', '=', $routeId)->value('price');
            $dif_cost = $request->input('dif_cost');
            $seatName = $request->input('seatName');
            $seatArray = explode(',', $seatName);
            $seatIds = DB::table('seats')
                ->whereIn('seat_name', $seatArray)
                ->where('type_vehicle_id', '=', $type_vehicle_id)
                ->pluck('seat_id') 
                ->toArray();

            $seatCount = count($seatArray);
            $total_price = $dif_cost + ($seatCount * $price);
            $note = "Khách hàng " . Auth::user()->user_code . " đặt vé thành công.";
            $route_schedule_id = DB::table('route_schedules')->where('route_id', $routeId)->value('route_id');


            $licensePlates = $request->input('licensePlates');
            $vehicle_id = DB::table('vehicles')->where('license_plate', '=', $licensePlates)->value('vehicle_id');
            $type_time_id = DB::table('routes as r')
                ->join('type_times as tt', 'tt.type_time_id', '=', 'r.type_time_id')
                ->where('route_id', '=', $routeId)
                ->value('r.type_time_id');
            $transshipment = $request->input('travelMode') == 1 ? 1 : 0;
            $one_way = $round_trip = 0;

            $image_invoice = null;
            $base64Image = $request->input('img-qrcode');

            $transaction_ = Str::uuid7();

            if ($base64Image && preg_match('/^data:image\/(\w+);base64,/', $base64Image, $type)) {
                $fileType = strtolower($type[1]);
                $imageData = base64_decode(preg_replace('/^data:image\/\w+;base64,/', '', $base64Image));
                if ($imageData !== false) {
                    $fileName = uniqid('qrcode_', true) . '.' . $fileType;
                    $filePath = public_path('assets/img/qrcode/' . $fileName);
                    file_put_contents($filePath, $imageData);
                    $image_invoice = 'assets/img/qrcode/' . $fileName;
                }
            }

            DB::beginTransaction();

            // insert into order_tickets
            $orderTicketId = DB::table('order_tickets')->insertGetId([
                'route_id' => $routeId,
                'user_id' => $userId,
                'price' => $price,
                'number_of_ticket' => $seatCount,
                'dif_cost' => $dif_cost,
                'total_price' => $total_price,
                'note' => $note,
                'vehicle_id' => $vehicle_id,
                'type_time_id' => $type_time_id,
                'one_way' => $one_way,
                'round_trip' => $round_trip,
                'transshipment' => $transshipment,
                'image_invoice' => $image_invoice,
            ]);

            // insert into transactions
            DB::table('transactions')->insert([
                'transaction_' => $transaction_,
                'type_transaction_id' => 1,
                'transaction_date' => now(),
                'status' => 1,
                'amount' => $total_price, 
                'transaction_reference' => DB::raw('LPAD(FLOOR(RAND() * 100000000000000000000000), 20, "0")'),
                'currency' => 'VND'
            ]);

            foreach ($seatIds as $seat) {

                // insert into order_ticket_details
                DB::table('order_ticket_details')->insert([
                    'order_ticket_detail_' => Str::uuid7(),
                    'route_schedule_id' => $route_schedule_id,
                    'seat_id' => $seat,
                    'order_ticket_id' => $orderTicketId,
                    'order_trip_date' => now()
                ]);

                // update status seats
                DB::table('seats')
                    ->where('seat_id', '=', $seat)
                    ->update(['status' => 1]);
            }

            DB::commit();

            session()->flash('order_ticket_success', true);
            sleep(2);

            return view('reservation.orderticket.success');
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
