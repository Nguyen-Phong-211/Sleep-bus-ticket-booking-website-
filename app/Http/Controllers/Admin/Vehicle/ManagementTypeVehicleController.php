<?php

namespace App\Http\Controllers\Admin\Vehicle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementTypeVehicleController extends Controller
{
    //index
    public function index(){
        return view('admin.typevehicle.typevehicle');
    }
}