<?php

namespace App\Http\Controllers\Admin\Vehicle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagementTypeVehicleController extends Controller
{
    //index
    public function index(){

        $getTypeVehicle = DB::table('type_vehicles')->get();

        return view('admin.typevehicle.typevehicle', compact('getTypeVehicle'));
    }

    // update
    public function update(Request $request, $id){

        DB::beginTransaction();

        $updateTypeVehicle = DB::table('type_vehicles')
            ->where('id', $id)
            ->update([
                'name' => $request->name
            ]);

        DB::rollBack();
        return redirect()->back();
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
