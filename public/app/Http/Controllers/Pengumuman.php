<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pengumuman extends Controller
{
    public function show($seo)
    {
        $data = DB::table('pengumuman')
        ->where('judul_seo',$seo)
        ->where('status','aktif')
        ->first();
        $insert = DB::table('users')
        ->where('judul_seo', $seo)
        ->update(['dibaca' => 1]);
        return view('pengumuman.pengumumandetail', compact('data'));
    }
}
