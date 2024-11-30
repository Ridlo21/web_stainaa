<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Home extends Controller
{

    public function index() {
        if (!Auth::check()) {
            return redirect('/');
        } else {
            return view('dashboard.dashboard');
        }
    }
}
