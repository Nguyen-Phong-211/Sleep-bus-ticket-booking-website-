<?php

namespace App\Http\Controllers\Admin\Seat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementRowSeatController extends Controller
{
    //index
    public function index()
    {
        return view('admin.seat.rowseat.rowseat');
    }
}
