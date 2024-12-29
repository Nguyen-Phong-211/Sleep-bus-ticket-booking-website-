<?php

namespace App\Http\Controllers\HireDriver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HireDriverController extends Controller
{
    //index
    public function index()
    {
        return view('hire-driver.hire-driver');
    }
}
