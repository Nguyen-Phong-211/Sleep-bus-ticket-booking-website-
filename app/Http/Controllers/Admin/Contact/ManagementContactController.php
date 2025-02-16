<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementContactController extends Controller
{
    //index
    public function index()
    {
        return view('admin.contact.contact');
    }
}
