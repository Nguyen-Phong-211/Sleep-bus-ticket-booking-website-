<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    //index
    public function index()
    {
        return view('consultation.consultation');
    }
}
