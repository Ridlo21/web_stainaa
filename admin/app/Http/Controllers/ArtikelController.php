<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    private function acak($long)
    {
        $char = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $string = "";
        for ($i = 0; $i < $long; $i++) {
            $u = rand(0, strlen($char) - 1);
            $string .= $char[$u];
        }
        return $string;
    }

    private function seo_title($s)
    {
        $c = array(' ');
        $d = array('-', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+', '–');
        $s = str_replace($d, '', $s);
        $s = strtolower(str_replace($c, '-', $s));
        return $s;
    }

    // Artikel
    public function index() {}
    public function create() {}
    public function store(Request $request) {}
    public function edit($id) {}
    public function update(Request $request) {}
    public function show() {}
    public function nonaktifkan() {}

    // Mod Artikel
    public function showMod()
    {
        $query = DB::table('landing_artikel')->orderBy('id_landing_artikel', 'DESC');

        $data = $query->paginate(9);
        return view('artikel.modartikel', compact('data'));
    }
    public function createMod()
    {
        return view('artikel.modartikeladd');
    }

    public function store_mod(Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['descripton'] = $request->descripton;
        $data['tanggal'] = date('Y-m-d');
        $data['status'] = 'aktif';

        if ($request->file('gambar')) {
            $image = $request->file('gambar');
            $imagename = 'cover' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT) . $this->acak(32) . ".jpg";
            $destinationPath = public_path('/image/mod_artikel');
            $img = Image::read($image->path());
            $img->resize(840, 464, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save($destinationPath . '/' . $imagename, 100);
            $data['gambar'] = $imagename;
        } else {
            $data['gambar'] = "";
        }

        DB::table('landing_artikel')->where('status', 'aktif')->update([
            'status' => 'tidak',
        ]);

        $simpan = DB::table('landing_artikel')->insert($data);
        if ($simpan == 0 || $simpan == 1) {
            return response()->json([
                'title' => 'Berhasil',
                'message' => 'Data berhasil disimpan',
                'icon' => 'success'
            ], 201);
        } else {
            return response()->json([
                'title' => 'Gagal',
                'message' => 'Data gagal disimpan',
                'icon' => 'error'
            ], 400);
        }
    }

    public function edit_mod($id)
    {
        $data = DB::table('landing_artikel')->where('id_landing_artikel', $id)->first();
        return view('artikel.modartikeledit', compact('data'));
    }
    public function update_mod(Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['descripton'] = $request->descripton;
        // $data['tanggal'] = date('Y-m-d');
        $data['status'] = 'aktif';

        if ($request->file('gambar')) {
            $image = $request->file('gambar');
            $imagename = 'cover' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT) . $this->acak(32) . ".jpg";
            $destinationPath = public_path('/image/mod_artikel');
            if (file_exists($destinationPath . '/' . $request->gambar_old)) {
                unlink($destinationPath . '/' . $request->gambar_old);
            }
            $img = Image::read($image->path());
            $img->resize(840, 464, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save($destinationPath . '/' . $imagename, 100);
            $data['gambar'] = $imagename;
        } else {
            $data['gambar'] = $request->gambar_old;
        }

        $simpan = DB::table('landing_artikel')->where('id_landing_artikel', $request->id)->update($data);

        if ($simpan == 0 || $simpan == 1) {
            return response()->json([
                'title' => 'Berhasil',
                'message' => 'Data berhasil diedit',
                'icon' => 'success'
            ], 201);
        } else {
            return response()->json([
                'title' => 'Gagal',
                'message' => 'Data gagal diedit',
                'icon' => 'error'
            ], 400);
        }
    }
    public function destroy(Request $request)
    {
        $data = DB::table('landing_artikel')->where('id_landing_artikel', $request->id)->first();

        if ($data->gambar) {
            $imagePath = public_path('/image/mod_artikel/' . $data->gambar);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        DB::table('landing_artikel')->where('id_landing_artikel', $request->id)->delete();

        return response()->json(['message' => 'Data berhasil dihapus'], 201);
    }

    // Kategori Artikel
}
