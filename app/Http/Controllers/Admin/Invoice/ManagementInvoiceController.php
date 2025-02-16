<?php

namespace App\Http\Controllers\Admin\Invoice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementInvoiceController extends Controller
{
    //index
    public function index()
    {
        return view('admin.invoice.invoice');
    }
}
