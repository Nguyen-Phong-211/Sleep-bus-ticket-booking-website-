<?php

namespace App\Http\Controllers\Admin\Dashbroad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbroadController extends Controller
{
    //index
    public function index(){
        return view('admin.dashbroad.dashbroad');
    }
}
