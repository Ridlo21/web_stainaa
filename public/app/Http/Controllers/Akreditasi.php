<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class Akreditasi extends Controller
{
    public function index() 
    {
        $data = DB::table('landing_akreditasi')->where('status','aktif')->get();
        return view('akreditasi.akreditasi', compact('data','data'));
    }

    public function show($fakultas)
    {
        $data = DB::table('akreditasi')
        ->where('fakultas', $fakultas)
        ->where('status', 'aktif')
        ->get();
        return view('akreditasi.akreditasidetail', compact(
            'fakultas',
            'data'
        ))->with('no', 1);
    }
}
