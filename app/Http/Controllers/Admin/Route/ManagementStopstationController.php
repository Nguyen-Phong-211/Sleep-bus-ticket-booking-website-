<?php

namespace App\Http\Controllers\Admin\Route;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementStopstationController extends Controller
{
    //index
    public function index()
    {
        return view('admin.route.stopstation.route');
    }
}
