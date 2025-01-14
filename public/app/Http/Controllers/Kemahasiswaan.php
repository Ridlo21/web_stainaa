<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kemahasiswaan extends Controller
{
    public function index()
    {
        $data = DB::table('landing_kemahasiswaan')->where('status','aktif')->get();
        $bems = DB::table('bem')->where('status','aktif')->get();
        return view('kemahasiswaan.kemahasiswaan', compact(
            'data',
            'bems',
        ));
    }
}
