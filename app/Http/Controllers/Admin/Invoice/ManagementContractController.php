<?php

namespace App\Http\Controllers\Admin\Invoice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementContractController extends Controller
{
    //index
    public function index()
    {
        return view('admin.invoice.contract');
    }
}
