<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class Pendidikan extends Controller
{
    public function index() 
    {
        $data = DB::table('landing_pendidikan')->where('status','aktif')->get();
        $dataFakultas = DB::table('pendidikan')->where('status','aktif')->get();
        return view('pendidikan.pendidikan', compact('data','dataFakultas'));
    }

    public function show($id)
    {
        return view('pendidikan.pendidikandetail', compact('id'));
    }
}
