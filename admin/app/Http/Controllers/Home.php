<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{

    public function index() {
        if (!Auth::check()) {
            return redirect('/');
        } else {
            $dataPengunjung = DB::table('pengunjung_website')->count();
            $dataBerita = DB::table('berita')->where('status','aktif')->count();
            $dataPengumuman = DB::table('pengumuman')->where('status','aktif')->count();
            $dataArtikel = DB::table('artikel')->where('status','aktif')->count();
            return view('dashboard.dashboard', compact(
                'dataPengunjung',
                'dataBerita',
                'dataPengumuman',
                'dataArtikel'
            ));
        }
    }
}
