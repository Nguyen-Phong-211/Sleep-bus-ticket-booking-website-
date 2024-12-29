<?php

namespace App\Http\Controllers\OrderTicket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderTicketController extends Controller
{
    //index
    public function index()
    {
        return view('reservation/orderticket.orderticket');
    }
}
