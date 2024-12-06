<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager as Images;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class PengumumanController extends Controller
{
    function seo_title($s)
    {
        $c = array(' ');
        $d = array('-', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+', '–');
        $s = str_replace($d, '', $s);
        $s = strtolower(str_replace($c, '-', $s));
        return $s;
    }

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

        $gambar = str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT) . acak(32) . ".jpg";

        $data['judul'] = $request->judul;
        $data['sub_judul'] = $request->sub_judul;
        $data['judul_seo'] = $this->seo_title($request->judul);
        $data['isi_pengumuman'] = $request->isi_pengumuman;

        if ($request->gambar_a) {
            $gambar1 = Images::make($request->file('gambar_a'));
            $gambar1->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $destinationPath = public_path('public/dokumen');
            $gambar1->move($destinationPath, "gambar1" . $gambar, 100);
            $data['gambar1'] = "gambar_1" . $gambar;
        } else {
            $data['gambar1'] = "";
        }

        // $data['gambar2'] = $request->gambar_b;
        $data['ket_gambar'] = $request->ket_gambar;
        $data['hari'] = 'hari';
        $data['tanggal'] = 'tanggal';
        $data['jam'] = 'jam';
        $data['penulis'] = $request->penulis;
        $data['tag'] = $request->tag;
        $data['status'] = 'aktif';
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
