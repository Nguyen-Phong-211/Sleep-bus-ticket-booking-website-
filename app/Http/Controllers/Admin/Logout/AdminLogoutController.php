<?php

namespace App\Http\Controllers\Admin\Logout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLogoutController extends Controller
{
    //
    public function logout()
    {
        Auth::logout();
        session()->flush(); 
        session()->flash('success', 'You have successfully logged out!');
        sleep(1);
        return redirect()->route('admin.index');
    }
}
