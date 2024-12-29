<?php

namespace App\Http\Controllers\RentalContract;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentalContractController extends Controller
{
    //index
    public function index()
    {
        return view('rental-contract.rental-contract');
    }
}
