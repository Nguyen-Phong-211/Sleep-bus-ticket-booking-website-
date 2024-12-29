<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Arrivalpoint;
use App\Models\Departurepoint;

class HomeController extends Controller
{
    //index
    public function index()
    {
        return view('home.home');
    }
}
