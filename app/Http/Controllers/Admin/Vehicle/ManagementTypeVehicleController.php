<?php

namespace App\Http\Controllers\Admin\Vehicle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ManagementTypeVehicleController extends Controller
{
    //index
    public function index(){

        $getTypeVehicle = DB::table('type_vehicles')->get();

        return view('admin.typevehicle.typevehicle', compact('getTypeVehicle'));
    }

    // update
    public function update(Request $request, $id, $tid) {
        DB::beginTransaction();
    
        try {
            $oldData = DB::table('type_vehicles')->where('type_vehicle_id', $id)->first();
            $updatedColumns = [];
    
            if ($oldData->type_vehicle_name != $request->nameTypeVehicle) {
                $updatedColumns[] = 'type_vehicle_name';
            }
            if ($oldData->max_seat != $request->maxSeat) {
                $updatedColumns[] = 'max_seat';
            }
    
            if (empty($updatedColumns)) {
                return redirect()->back()->with('info', 'Không có thay đổi nào.');
            }
    
            DB::table('type_vehicles')
                ->where('type_vehicle_id', $id)
                ->update([
                    'type_vehicle_name' => $request->nameTypeVehicle,
                    'max_seat' => $request->maxSeat,
                ]);
    
            DB::table('transactions')->insert([
                'transaction_' => $request->code_,
                'type_transaction_id' => 6,
                'status' => 1,
                'transaction_reference' => DB::raw('LPAD(FLOOR(RAND() * 10000000000), 10, "0")'),
                'note' => Auth::user()->user_code . ' đã cập nhật bảng type_vehicles, cột ' . implode(', ', $updatedColumns) . ' vào lúc ' . now(),
            ]);
    
            DB::commit();
            return redirect()->back()->with('success', 'Cập nhật thành công!');
    
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Cập nhật thất bại!');
        }
    }
    

    // insert
    public function insert(Request $request){
        return view('admin.typevehicle.insert');
    }

    // storage
    public function storage(Request $request){
        DB::beginTransaction();

        $insertTypeVehicle = DB::table('type_vehicles')
            ->insert([
                'type_vehicle_id' => $request->type_vehicle_id,
                'type_vehicle_name' => $request->type_vehicle_name,
                'max_seat' => $request->max_seat,
            ]);

        DB::commit();
        return redirect()->route('admin.typevehicle');
    }
}
