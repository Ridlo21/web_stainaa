<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class Home extends Controller
{
    public function index()
    {
        $dataCover = DB::table('cover')->where('status','aktif')->get();
        $dataPersonalBranding = DB::table('personal_branding')->where('status','aktif')->get();
        $dataProfilSingkat = DB::table('profile_singkat')->where('status','aktif')->get();
        return view('home.beranda', compact(
            'dataCover',
            'dataPersonalBranding',
            'dataProfilSingkat'
        ));
    }
}
