<?php

namespace App\Http\Controllers\Admin\Seat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementFloorController extends Controller
{
    //index
    public function index()
    {
        return view('admin.seat.floor.floor');
    }
}
