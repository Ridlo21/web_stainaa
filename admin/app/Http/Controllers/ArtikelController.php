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
    public function index(Request $request)
    {
        $search = $request->search;
        $query = DB::table('artikel')->where('status', 'aktif')->orderBy('id_artikel', 'DESC');
        if ($search) {
            $query->where('judul', 'like', '%' . $search . '%');
        }
        $data = $query->paginate(9);
        return view('artikel.artikel', compact('data', 'search'));
    }

    public function create()
    {
        $kategory = DB::table('kategori_artikel')->where('status', 'aktif')->orderBy('id_kategori_artikel', 'DESC')->get();
        return view('artikel.artikelAdd', compact('kategory'));
    }

    public function store(Request $request)
    {
        $data = array();

        Carbon::setLocale('id');
        $hariIni = Carbon::now()->translatedFormat('l');

        $data['judul'] = strtoupper($request->judul);
        $data['sub_judul'] = strtoupper($request->sub_judul);
        $data['judul_seo'] = $this->seo_title($request->judul);
        $data['id_kategori_artikel'] = $request->kategori;
        $data['isi_artikel'] = $request->isi_artikel;
        $data['sub_isi_artikel'] = $request->sub_isi_artikel;
        $data['ket_gambar'] = $request->ket_gambar;
        $data['hari'] = $hariIni;
        $data['tanggal'] = date('Y-m-d');
        $data['jam'] = Carbon::now('Asia/Jakarta')->toTimeString();
        $data['penulis'] = $request->penulis;
        $data['tag'] = $request->tag;
        $data['dibaca'] = 0;
        $data['status'] = 'aktif';

        if ($request->file('gambar_a')) {
            $image1 = $request->file('gambar_a');
            $imagename1 = 'img1' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT) . $this->acak(32) . ".jpg";
            $destinationPath = public_path('/image/artikel');
            $img = Image::read($image1->path());
            $img->resize(1902, 1069, function ($constraint) {
                $constraint->aspectRatio(); // Menjaga rasio gambar
                $constraint->upsize();      // Mencegah gambar menjadi lebih besar dari aslinya
            });
            $img->save($destinationPath . '/' . $imagename1, 100);
            $data['gambar1'] = $imagename1;
        } else {
            $data['gambar1'] = "";
        }

        if ($request->file('gambar_b')) {
            $image2 = $request->file('gambar_b');
            $imagename2 = 'img2' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT) . $this->acak(32) . ".jpg";
            $destinationPath = public_path('/image/artikel');
            $img = Image::read($image2->path());
            $img->resize(1902, 1069, function ($constraint) {
                $constraint->aspectRatio(); // Menjaga rasio gambar
                $constraint->upsize();      // Mencegah gambar menjadi lebih besar dari aslinya
            });
            $img->save($destinationPath . '/' . $imagename2, 100);
            $data['gambar2'] = $imagename2;
        } else {
            $data['gambar2'] = "";
        }

        $simpan = DB::table('artikel')->insert($data);
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

    public function edit($id)
    {
        $data = DB::table('artikel')->where('id_artikel', $id)->first();
        $kategory = DB::table('kategori_artikel')->where('status', 'aktif')->orderBy('id_kategori_artikel', 'DESC')->get();
        return view('artikel.artikelEdit', compact('data', 'kategory'));
    }

    public function update(Request $request)
    {
        $data = array();

        Carbon::setLocale('id');
        $hariIni = Carbon::now()->translatedFormat('l');

        $data['judul'] = strtoupper($request->judul);
        $data['sub_judul'] = strtoupper($request->sub_judul);
        $data['judul_seo'] = $this->seo_title($request->judul);
        $data['id_kategori_artikel'] = $request->kategori;
        $data['isi_artikel'] = $request->isi_artikel;
        $data['sub_isi_artikel'] = $request->sub_isi_artikel;
        $data['ket_gambar'] = $request->ket_gambar;
        $data['penulis'] = $request->penulis;
        $data['tag'] = $request->tag;
        $data['dibaca'] = 0;
        $data['status'] = 'aktif';

        if ($request->file('gambar_a')) {
            $image1 = $request->file('gambar_a');
            $imagename1 = 'img1' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT) . $this->acak(32) . ".jpg";
            $destinationPath = public_path('/image/artikel');
            if (file_exists($destinationPath . '/' . $request->gambar1_old)) {
                unlink($destinationPath . '/' . $request->gambar1_old);
            }
            $img = Image::read($image1->path());
            $img->resize(1902, 1069, function ($constraint) {
                $constraint->aspectRatio(); // Menjaga rasio gambar
                $constraint->upsize();      // Mencegah gambar menjadi lebih besar dari aslinya
            });
            $img->save($destinationPath . '/' . $imagename1, 100);
            $data['gambar1'] = $imagename1;
        } else {
            $data['gambar1'] = $request->gambar1_old;
        }

        if ($request->file('gambar_b')) {
            $image2 = $request->file('gambar_b');
            $imagename2 = 'img2' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT) . $this->acak(32) . ".jpg";
            $destinationPath = public_path('/image/artikel');
            if (file_exists($destinationPath . '/' . $request->gambar2_old)) {
                unlink($destinationPath . '/' . $request->gambar2_old);
            }
            $img = Image::read($image2->path());
            $img->resize(1902, 1069, function ($constraint) {
                $constraint->aspectRatio(); // Menjaga rasio gambar
                $constraint->upsize();      // Mencegah gambar menjadi lebih besar dari aslinya
            });
            $img->save($destinationPath . '/' . $imagename2, 100);
            $data['gambar2'] = $imagename2;
        } else {
            $data['gambar2'] = $request->gambar2_old;
        }

        $simpan = DB::table('artikel')->where('id_artikel', $request->id)->update($data);
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

    public function show($id)
    {
        $data = DB::table('artikel')->where('judul_seo', $id)->first();
        if ($data) {
            // Tentukan posisi untuk menyisipkan gambar2
            $posisiPenyisipan = 2; // Setelah paragraf kedua

            // Periksa apakah gambar2 tidak kosong
            $gambar2Path = null;
            if ($data->gambar2 && file_exists(public_path('image/artikel/' . $data->gambar2))) {
                $gambar2Path = asset('image/artikel/' . $data->gambar2);
            }

            // Pecah isi berdasarkan tag </p>
            $paragraf = preg_split('/(<\/p>)/i', $data->isi_artikel, -1, PREG_SPLIT_DELIM_CAPTURE);

            $html = '';
            foreach ($paragraf as $index => $content) {
                $html .= $content;

                // Sisipkan gambar hanya jika $gambar2Path ada (gambar hanya muncul jika gambar2 diunggah dan valid)
                if ($gambar2Path && $index === ($posisiPenyisipan * 2) - 1) {
                    $html .= '<img src="' . $gambar2Path . '" alt="Gambar 2" class="mb-3" width="670">';
                }
            }

            $data->isi_artikel = $html;
        }
        return view('artikel.artikelinfo', compact('data'));
    }

    public function nonaktifkan(Request $request)
    {
        DB::table('artikel')->where('id_artikel', $request->id)->update([
            'status' => 'tidak',
        ]);

        return response()->json(['message' => 'Data berhasil dinonaktifkan'], 201);
    }

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
            $img->resize(1902, 1069, function ($constraint) {
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
            $img->resize(1902, 1069, function ($constraint) {
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
    public function showKat()
    {
        $query = DB::table('kategori_artikel')->where('status', 'aktif')->orderBy('id_kategori_artikel', 'DESC');
        $data = $query->paginate(10);
        return view('artikel.kategoriartikel', compact('data'));
    }

    public function store_kat(Request $request)
    {
        $data = array();
        $data['kategori'] = $request->kategori;
        $data['tanggal'] = date('Y-m-d');
        $data['status'] = 'aktif';

        $existingCategory = DB::table('kategori_artikel')->where('kategori', $request->kategori)->first();

        if ($existingCategory) {
            return response()->json([
                'title' => 'Gagal',
                'message' => 'Kategori sudah ada',
                'icon' => 'error'
            ], 400);
        }

        $simpan = DB::table('kategori_artikel')->insert($data);

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

    public function edit_kat($id)
    {
        $kategori = DB::table('kategori_artikel')->where('id_kategori_artikel', $id)->first();

        if ($kategori) {
            return response()->json($kategori, 200);
        } else {
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    }

    public function update_kat(Request $request)
    {
        $data = array();
        $data['kategori'] = $request->kategori;

        $existingCategory = DB::table('kategori_artikel')->where('kategori', $request->kategori)->first();

        if ($existingCategory) {
            return response()->json([
                'title' => 'Gagal',
                'message' => 'Kategori sudah ada',
                'icon' => 'error'
            ], 400);
        }

        $simpan = DB::table('kategori_artikel')->where('id_kategori_artikel', $request->id)->update($data);

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

    public function nonaktif_kat(Request $request)
    {
        $simpan = DB::table('kategori_artikel')->where('id_kategori_artikel', $request->id)->update([
            'status' => 'tidak',
        ]);

        if ($simpan == 0 || $simpan == 1) {
            return response()->json([
                'title' => 'Berhasil',
                'message' => 'Data berhasil dihapus',
                'icon' => 'success'
            ], 201);
        } else {
            return response()->json([
                'title' => 'Gagal',
                'message' => 'Data gagal dihapus',
                'icon' => 'error'
            ], 400);
        }
    }
}
