<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class Contact extends Controller
{
    public function index() 
    {
        $data = DB::table('landing_contact')->where('status','aktif')->get();
        return view('narahubung.narahubung', compact('data'));
    }

}
