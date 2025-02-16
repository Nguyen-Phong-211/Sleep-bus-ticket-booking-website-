<?php

namespace App\Http\Controllers\Admin\Route;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementRouteController extends Controller
{
    //index
    public function index()
    {
        return view('admin.route.route.route');
    }
}
