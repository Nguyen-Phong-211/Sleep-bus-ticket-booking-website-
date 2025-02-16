<?php

namespace App\Http\Controllers\Admin\DepartureArrival;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartureArrivalController extends Controller
{
    //index
    public function index()
    {
        return view('admin.departurearrival.departurearrival');
    }
}
