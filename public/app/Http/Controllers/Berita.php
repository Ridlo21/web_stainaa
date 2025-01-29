<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Berita extends Controller
{
    public function index()
    {
        $mod = DB::table('landing_berita')->where('status', 'aktif')->first();
        $data = DB::table('berita')
            ->where('status', 'aktif')
            ->orderBy('id_berita', 'DESC')
            ->paginate(5);
        return view('berita.beritalist', compact('mod', 'data'));
    }

    public function show($id)
    {
        $data = DB::table('berita')->where('judul_seo', $id)->first();
        DB::table('berita')
            ->where('id_berita', $data->id_berita)
            ->increment('dibaca');

        $populer = DB::table('berita')
            ->whereNot('judul_seo', $id)
            ->where('status', 'aktif')
            ->orderBy('id_berita', 'DESC')
            ->limit(5)
            ->get();
        return view('berita.beritadetail', compact('data', 'populer'));
    }
}
