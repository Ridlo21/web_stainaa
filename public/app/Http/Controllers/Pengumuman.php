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
        $sum = (int)$data->dibaca + 1;
        $insert = DB::table('pengumuman')
        ->where('judul_seo', $seo)
        ->update(['dibaca' => $sum]);
        return view('pengumuman.pengumumandetail', compact('data'));
    }

    public function all()
    {
        $data = DB::table('pengumuman')
        ->where('status','aktif')
        ->paginate(1);
        $dataLanding = DB::table('landing_pengumuman')
        ->where('status','aktif')
        ->get();
        return view('pengumuman.pengumumanlist', compact(
            'data',
            'dataLanding'
        ));
    }
}
