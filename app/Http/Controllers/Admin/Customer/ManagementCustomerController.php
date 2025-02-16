<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementCustomerController extends Controller
{
    //index
    public function index()
    {
        return view('admin.customer.customer');
    }
}
