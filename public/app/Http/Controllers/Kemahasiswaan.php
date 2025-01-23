<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kemahasiswaan extends Controller
{
    public function index()
    {
        $data = DB::table('landing_kemahasiswaan')->where('status', 'aktif')->get();
        $bems = DB::table('bem')->where('status', 'aktif')->get();
        $ukm = DB::table('ukm')->where('status', 'aktif')->orderBy('id_ukm', 'DESC')->paginate(4); // ditambahkan oleh ridlo
        return view('kemahasiswaan.kemahasiswaan', compact(
            'data',
            'bems',
            'ukm'
        ));
    }
}
