<?php

namespace App\Http\Controllers\Clause;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClauseController extends Controller
{
    //index
    public function index()
    {
        return view('clause.clause');
    }
}
