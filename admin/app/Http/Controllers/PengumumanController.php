<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Intervention\Image\ImageManagerStatic as image;

class PengumumanController extends Controller
{
    public function index()
    {
        return view('pengumuman.pengumuman');
    }

    public function create()
    {
        return view('pengumuman.pengumumanadd');
    }

    public function store(Request $request)
    {
        $data = array();
        function acak($long)
        {
            $char = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
            $string = "";
            for ($i = 0; $i < $long; $i++) {
                $u = rand(0, strlen($char) - 1);
                $string .= $char[$u];
            }
            return $string;
        }

        $gambar_1 = str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT) . acak(32) . ".jpg";
    }

    public function edit()
    {
        // 
    }

    public function update(Request $request)
    {
        // 
    }
}
