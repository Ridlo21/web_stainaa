<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Artikel extends Controller
{
    public function index(Request $request)
    {

        $kategoriNama = $request->input('kategori');

        $mod = DB::table('landing_artikel')->where('status', 'aktif')->first();
        if ($kategoriNama) {
            $data = DB::table('artikel')
                ->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel', '=', 'artikel.id_kategori_artikel')
                ->where('kategori_artikel.kategori', $kategoriNama)
                ->where('artikel.status', 'aktif')
                ->get();
        } else {
            $data = DB::table('artikel')->where('status', 'aktif')->get();
        }

        $total = DB::table('artikel')->where('status', 'aktif')->count();
        $populer = DB::table('artikel')->where('status', 'aktif')->orderBy('dibaca', 'DESC')->limit(3)->get();
        $kategori = DB::table('kategori_artikel')
            ->leftJoin('artikel', 'kategori_artikel.id_kategori_artikel', '=', 'artikel.id_kategori_artikel')
            ->select('kategori_artikel.kategori', 'kategori_artikel.id_kategori_artikel', DB::raw('COUNT(artikel.id_artikel) as total_artikel'))
            ->where('kategori_artikel.status', 'aktif')
            ->groupBy('kategori_artikel.id_kategori_artikel', 'kategori_artikel.kategori')
            ->get();
        return view('artikel.artikel', compact('mod', 'data', 'kategori', 'total', 'populer'));
    }

    public function show($id)
    {
        $data = DB::table('artikel')->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel', '=', 'artikel.id_kategori_artikel')->where('judul_seo', $id)->first();
        if ($data) {

            DB::table('artikel')
                ->where('id_artikel', $data->id_artikel)
                ->increment('dibaca');

            // Tentukan posisi untuk menyisipkan gambar2
            $posisiPenyisipan = 2; // Setelah paragraf kedua

            // Periksa apakah gambar2 tidak kosong
            $gambar2Path = null;

            // URL Publik atau Direktori Bersama
            $externalUrl = 'http://localhost:8000/image/artikel/' . $data->gambar2; // Ganti dengan domain proyek Laravel lain
            $sharedImagesPath = public_path('shared-images/artikel/' . $data->gambar2); // Ganti jika menggunakan symlink

            // Cek apakah gambar tersedia di URL publik
            if ($data->gambar2) {
                // Cek dengan URL publik
                $headers = @get_headers($externalUrl);
                if ($headers && strpos($headers[0], '200') !== false) {
                    $gambar2Path = $externalUrl;
                }
                // Atau cek dengan symlink ke direktori bersama
                elseif (file_exists($sharedImagesPath)) {
                    $gambar2Path = asset('shared-images/artikel/' . $data->gambar2);
                }
            }

            // Pecah isi berdasarkan tag </p>
            $paragraf = preg_split('/(<\/p>)/i', $data->isi_artikel, -1, PREG_SPLIT_DELIM_CAPTURE);

            $html = '';
            foreach ($paragraf as $index => $content) {
                $html .= $content;

                // Sisipkan gambar hanya jika $gambar2Path ada (gambar hanya muncul jika gambar2 diunggah dan valid)
                if ($gambar2Path && $index === ($posisiPenyisipan * 2) - 1) {
                    $html .= '<img src="' . $gambar2Path . '" alt="Gambar 2" class="mb-3" width="840" height="464">';
                }
            }

            $data->isi_artikel = $html;
        }
        $populer = DB::table('artikel')
            ->whereNot('judul_seo', $id)
            ->where('status', 'aktif')
            ->orderBy('dibaca', 'DESC')
            ->limit(5)
            ->get();
        return view('artikel.artikeldetail', compact('data', 'populer'));
    }
}
