<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Artikel extends Controller
{
    public function index(Request $request)
    {

        $kategoriNama = $request->input('kategori');
        $search = $request->search;

        $mod = DB::table('landing_artikel')->where('status', 'aktif')->first();
        if ($kategoriNama) {
            $query = DB::table('artikel')
                ->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel', '=', 'artikel.id_kategori_artikel')
                ->where('kategori_artikel.kategori', $kategoriNama)
                ->where('artikel.status', 'aktif')
                ->orderBy('id_artikel', 'DESC');
            if (!empty($search)) {
                $query->where('judul', 'like', '%' . $search . '%');
            }
            $data = $query->paginate(5);
        } else {
            $query = DB::table('artikel')->where('status', 'aktif')->orderBy('id_artikel', 'DESC');
            if (!empty($search)) {
                $query->where('judul', 'like', '%' . $search . '%');
            }
            $data = $query->paginate(5);
        }

        $total = DB::table('artikel')->where('status', 'aktif')->count();
        $populer = DB::table('artikel')->where('status', 'aktif')->orderBy('dibaca', 'DESC')->limit(3)->get();
        $kategori = DB::table('kategori_artikel')
            ->leftJoin('artikel', 'kategori_artikel.id_kategori_artikel', '=', 'artikel.id_kategori_artikel')
            ->select('kategori_artikel.kategori', 'kategori_artikel.id_kategori_artikel', DB::raw('COUNT(artikel.id_artikel) as total_artikel'))
            ->where('kategori_artikel.status', 'aktif')
            ->groupBy('kategori_artikel.id_kategori_artikel', 'kategori_artikel.kategori')
            ->get();
        return view('artikel.artikel', compact('mod', 'data', 'search', 'kategori', 'total', 'populer'));
    }

    public function show($id)
    {
        $data = DB::table('artikel')->join('kategori_artikel', 'kategori_artikel.id_kategori_artikel', '=', 'artikel.id_kategori_artikel')->where('judul_seo', $id)->first();

        DB::table('artikel')
            ->where('id_artikel', $data->id_artikel)
            ->increment('dibaca');

        $populer = DB::table('artikel')
            ->whereNot('judul_seo', $id)
            ->where('status', 'aktif')
            ->orderBy('dibaca', 'DESC')
            ->limit(5)
            ->get();
        return view('artikel.artikeldetail', compact('data', 'populer'));
    }
}
