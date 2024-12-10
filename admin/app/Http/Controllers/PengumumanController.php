<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class PengumumanController extends Controller
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

    public function index(Request $request)
    {
        $search = $request->search;

        $query = DB::table('pengumuman')->where('status', 'aktif')->orderBy("id_pengumuman", "DESC");

        if ($search) {
            $query->where('judul', 'like', '%' . $search . '%');
        }

        $data = $query->paginate(9);

        return view('pengumuman.pengumuman', compact('data', 'search'));
    }

    public function create()
    {
        return view('pengumuman.pengumumanadd');
    }

    public function store(Request $request)
    {
        $data = array();

        Carbon::setLocale('id');
        $hariIni = Carbon::now()->translatedFormat('l');

        $data['judul'] = strtoupper($request->judul);
        $data['sub_judul'] = strtoupper($request->sub_judul);
        $data['judul_seo'] = $this->seo_title($request->judul);
        $data['isi_pengumuman'] = $request->isi_pengumuman;
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
            $destinationPath = public_path('/image/pengumuman');
            $img = Image::read($image1->path());
            $img->resize(840, 464, function ($constraint) {
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
            $destinationPath = public_path('/image/pengumuman');
            $img = Image::read($image2->path());
            $img->resize(840, 464, function ($constraint) {
                $constraint->aspectRatio(); // Menjaga rasio gambar
                $constraint->upsize();      // Mencegah gambar menjadi lebih besar dari aslinya
            });
            $img->save($destinationPath . '/' . $imagename2, 100);
            $data['gambar2'] = $imagename2;
        } else {
            $data['gambar2'] = "";
        }

        $simpan = DB::table('pengumuman')->insert($data);
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
        $data = DB::table('pengumuman')->where('id_pengumuman', $id)->first();
        return view('pengumuman.pengumumanedit', compact('data'));
    }

    public function show($id)
    {
        $data = DB::table('pengumuman')->where('judul_seo', $id)->first();
        if ($data) {
            // Tentukan posisi untuk menyisipkan gambar2
            $posisiPenyisipan = 2; // Setelah paragraf kedua

            // Periksa apakah gambar2 tidak kosong
            $gambar2Path = null;
            if ($data->gambar2 && file_exists(public_path('image/pengumuman/' . $data->gambar2))) {
                $gambar2Path = asset('image/pengumuman/' . $data->gambar2);
            }

            // Pecah isi berdasarkan tag </p>
            $paragraf = preg_split('/(<\/p>)/i', $data->isi_pengumuman, -1, PREG_SPLIT_DELIM_CAPTURE);

            $html = '';
            foreach ($paragraf as $index => $content) {
                $html .= $content;

                // Sisipkan gambar hanya jika $gambar2Path ada (gambar hanya muncul jika gambar2 diunggah dan valid)
                if ($gambar2Path && $index === ($posisiPenyisipan * 2) - 1) {
                    $html .= '<img src="' . $gambar2Path . '" alt="Gambar 2" class="mb-3" width="670">';
                }
            }

            $data->isi_pengumuman = $html;
        }
        return view('pengumuman.pengumumaninfo', compact('data'));
    }

    public function update(Request $request)
    {
        $data = array();

        Carbon::setLocale('id');
        $hariIni = Carbon::now()->translatedFormat('l');

        $data['judul'] = strtoupper($request->judul);
        $data['sub_judul'] = strtoupper($request->sub_judul);
        $data['judul_seo'] = $this->seo_title($request->judul);
        $data['isi_pengumuman'] = $request->isi_pengumuman;
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
            $destinationPath = public_path('/image/pengumuman');
            if (file_exists($destinationPath . '/' . $request->gambar1_old)) {
                unlink($destinationPath . '/' . $request->gambar1_old);
            }
            $img = Image::read($image1->path());
            $img->resize(840, 464, function ($constraint) {
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
            $destinationPath = public_path('/image/pengumuman');
            if (file_exists($destinationPath . '/' . $request->gambar2_old)) {
                unlink($destinationPath . '/' . $request->gambar2_old);
            }
            $img = Image::read($image2->path());
            $img->resize(840, 464, function ($constraint) {
                $constraint->aspectRatio(); // Menjaga rasio gambar
                $constraint->upsize();      // Mencegah gambar menjadi lebih besar dari aslinya
            });
            $img->save($destinationPath . '/' . $imagename2, 100);
            $data['gambar2'] = $imagename2;
        } else {
            $data['gambar2'] = $request->gambar2_old;
        }

        $simpan = DB::table('pengumuman')->where('id_pengumuman', $request->id)->update($data);
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

    public function nonaktifkan(Request $request)
    {
        DB::table('pengumuman')->where('id_pengumuman', $request->id)->update([
            'status' => 'tidak',
        ]);

        return response()->json(['message' => 'Data berhasil dinonaktifkan'], 201);
    }

    public function showMod(Request $request)
    {

        $query = DB::table('landing_pengumuman')->orderBy('id_landing_pengumuman', 'DESC');

        $data = $query->paginate(9);

        return view('pengumuman.modpengumuman', compact('data'));
    }

    public function createMod()
    {
        return view('pengumuman.modpengumumanadd');
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
            $destinationPath = public_path('/image/mod_pengumuman');
            $img = Image::read($image->path());
            $img->resize(840, 464, function ($constraint) {
                $constraint->aspectRatio(); // Menjaga rasio gambar
                $constraint->upsize();      // Mencegah gambar menjadi lebih besar dari aslinya
            });
            $img->save($destinationPath . '/' . $imagename, 100);
            $data['gambar'] = $imagename;
        } else {
            $data['gambar'] = "";
        }

        DB::table('landing_pengumuman')->where('status', 'aktif')->update([
            'status' => 'tidak',
        ]);

        $simpan = DB::table('landing_pengumuman')->insert($data);
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
        $data = DB::table('landing_pengumuman')->where('id_landing_pengumuman', $id)->first();
        return view('pengumuman.modpengumumanedit', compact('data'));
    }

    public function update_mod(Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['descripton'] = $request->descripton;
        $data['tanggal'] = date('Y-m-d');
        $data['status'] = 'aktif';

        if ($request->file('gambar')) {
            $image = $request->file('gambar');
            $imagename = 'cover' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT) . $this->acak(32) . ".jpg";
            $destinationPath = public_path('/image/mod_pengumuman');
            if (file_exists($destinationPath . '/' . $request->gambar_old)) {
                unlink($destinationPath . '/' . $request->gambar_old);
            }
            $img = Image::read($image->path());
            $img->resize(840, 464, function ($constraint) {
                $constraint->aspectRatio(); // Menjaga rasio gambar
                $constraint->upsize();      // Mencegah gambar menjadi lebih besar dari aslinya
            });
            $img->save($destinationPath . '/' . $imagename, 100);
            $data['gambar'] = $imagename;
        } else {
            $data['gambar'] = $request->gambar_old;
        }

        $simpan = DB::table('landing_pengumuman')->where('id_landing_pengumuman', $request->id)->update($data);

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

    public function destroy(Request $request)
    {

        $data = DB::table('landing_pengumuman')->where('id_landing_pengumuman', $request->id)->first();

        if ($data->gambar) {
            $imagePath = public_path('/image/mod_pengumuman/' . $data->gambar);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        DB::table('landing_pengumuman')->where('id_landing_pengumuman', $request->id)->delete();

        return response()->json(['message' => 'Data berhasil dihapus'], 201);
    }
}
