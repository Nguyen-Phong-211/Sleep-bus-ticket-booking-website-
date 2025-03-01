<?php

namespace App\Http\Controllers\RentalContract;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RentalContractController extends Controller
{
    //index
    public function index()
    {
        //get all branches
        $branches = DB::table('branches')->get();
        $vehicles = DB::table('vehicles')->get();

        return view('rental-contract.rental-contract', compact('branches', 'vehicles'));
    }
}
