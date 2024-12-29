<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    //index
    public function index()
    {
        return view('delivery.delivery');
    }
}
