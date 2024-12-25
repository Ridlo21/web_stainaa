<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tentang extends Controller
{
    public function index()
    {
        $data = DB::table('landing_tentang')->where('status','aktif')->get();
        $tentangSejarah = DB::table('tentang_sejarah')->where('status','aktif')->get();
        $tentangVisi = DB::table('tentang_visi')->where('status','aktif')->get();
        $tentangMisi = DB::table('tentang_misi')->where('status','aktif')->get();
        $tentangMotto = DB::table('tentang_motto')->where('status','aktif')->get();
        return view('tentang.tentang', compact(
            'data',
            'tentangSejarah',
            'tentangVisi',
            'tentangMisi',
            'tentangMotto'
        ));
    }

    public function tentangPimpinan()
    {
        $data = DB::table('tentang_profil_pimpinan')->where('status','aktif')->get();
        return view('tentang.profilPimpinan',compact('data'));
    }
}
