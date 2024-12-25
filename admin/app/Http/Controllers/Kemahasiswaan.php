<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class Kemahasiswaan extends Controller
{
    public function seo_title($s)
    {
        $c = array(' ');
        $d = array('-', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+', '–');
        $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
        $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
        return $s;
    }

    public function modIndex() : View 
    {
        $data = DB::table('landing_kemahasiswaan')->where('status','aktif')->get();
        return view('kemahasiswaan.modKemahasiswaan.index', compact("data"));
    }

    public function modCreate() : View 
    {
        return view('kemahasiswaan.modKemahasiswaan.create');
    }

    public function modStore(Request $req) 
    {
        $imageName = uniqid().time().'.png';
        $req->gambarkemahasiswaan->move(public_path('/image/kemahasiswaan/'), $imageName);
        $data["title"] = $req->title;
        $data["descripton"] = $req->deskripsi;
        $data["gambar"] =  $imageName;
        $data["tanggal"] = date('Y-m-d h:i:s');
        $data["status"] = "aktif";
        $insert = DB::table('landing_kemahasiswaan')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }

    }

    public function modShow($id) 
    {
        return view('kemahasiswaan.modKemahasiswaan.update', compact('id'));
    }

    public function modUpdate(Request $req) 
    {
        if ($req->gambarkemahasiswaan != "") {
            $imageName = uniqid().time().'.png';
            $deleteImage = unlink(public_path('/image/kemahasiswaan/'.$req->gambarLama));
            $req->gambarkemahasiswaan->move(public_path('/image/kemahasiswaan/'), $imageName);
            $data["gambar"] = $imageName;
        } else {
            $data["gambar"] = $req->gambarLama;
        }
        $data["title"] = $req->title;
        $data["descripton"] = $req->deskripsi;
        $update = DB::table('landing_kemahasiswaan')->where('id_landing_kemahasiswaan', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }
    }

    public function modDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('landing_kemahasiswaan')
            ->where('id_landing_kemahasiswaan', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }

    public function bemIndex() : View 
    {
        $data = DB::table('bem')->where('status','aktif')->get();
        return view('kemahasiswaan.bem.index', compact("data"));
    }

    public function bemCreate() : View 
    {
        return view('Kemahasiswaan.bem.create');
    }

    public function bemStore(Request $req) 
    {
        $imageName = uniqid().time().'.png';
        $req->gambarbem->move(public_path('/image/kemahasiswaan/'), $imageName);
        $data["judul"] = $req->title;
        $data["isi"] = $req->isi;
        $data["gambar"] =  $imageName;
        $data["tanggal"] = date('Y-m-d h:i:s');
        $data["status"] = "aktif";
        $insert = DB::table('bem')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }

    }

    public function bemShow($id) 
    {
        return view('kemahasiswaan.bem.update', compact('id'));
    }

    public function bemUpdate(Request $req) 
    {
        if ($req->gambar != "") {
            $imageName = uniqid().time().'.png';
            $deleteImage = unlink(public_path('/image/kemahasiswaan/'.$req->gambarLama));
            $req->gambar->move(public_path('/image/kemahasiswaan/'), $imageName);
            $data["gambar"] = $imageName;
        } else {
            $data["gambar"] = $req->gambarLama;
        }
        $data["judul"] = $req->title;
        $data["isi"] = $req->isi;
        $update = DB::table('bem')->where('id_bem', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }
    }

    public function bemDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('bem')
            ->where('id_bem', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }

    public function ukmIndex() : View 
    {
        $data = DB::table('ukm')->where('status','aktif')->get();
        return view('kemahasiswaan.ukm.index', compact("data"))->with('no', 1);
    }

    public function ukmCreate() : View 
    {
        return view('Kemahasiswaan.ukm.create');
    }

    public function ukmStore(Request $req) 
    {
        $imageName1 = uniqid().time().'.png';
        $req->gambarSatu->move(public_path('/image/kemahasiswaan/'), $imageName1);
        $imageName2 = uniqid().time().'.png';
        $req->gambarDua->move(public_path('/image/kemahasiswaan/'), $imageName2);
        $data["judul"] = $req->judul;
        $data["sub_judul"] = $req->subJudul;
        $data["judul_seo"] =  $this->seo_title($req->judulSeo);
        $data["isi_ukm"] = $req->isiUkm;
        $data["sub_isi_ukm"] = $req->subIsiUkm;
        $data["gambar1"] =  $imageName1;
        $data["gambar2"] =  $imageName2;
        $data["ket_gambar"] =  $req->ketGambar;
        $data["hari"] = $req->hari;
        $data["tanggal"] = date('Y-m-d', strtotime($req->tanggal));
        $data["jam"] = $req->jam;
        $data["penulis"] = $req->penulis;
        $data["tag"] = $req->tag;
        $data["dibaca"] = 0;
        $data["status"] = "aktif";
        $insert = DB::table('ukm')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }

    }

    public function ukmShow($id) 
    {
        return view('kemahasiswaan.ukm.update', compact('id'));
    }

    public function ukmUpdate(Request $req) 
    {
        if ($req->gambarSatu != "") {
            $imageName1 = uniqid().time().'.png';
            $deleteImage = unlink(public_path('/image/kemahasiswaan/'.$req->gambarLama1));
            $req->gambarSatu->move(public_path('/image/kemahasiswaan/'), $imageName1);
            $data["gambar1"] = $imageName1;
        } else {
            $data["gambar1"] = $req->gambarLama1;
        }
        if ($req->gambarDua != "") {
            $imageName2 = uniqid().time().'.png';
            $deleteImage = unlink(public_path('/image/kemahasiswaan/'.$req->gambarLama2));
            $req->gambarDua->move(public_path('/image/kemahasiswaan/'), $imageName2);
            $data["gambar2"] = $imageName2;
        } else {
            $data["gambar2"] = $req->gambarLama2;
        }
        $data["judul"] = $req->judul;
        $data["sub_judul"] = $req->subJudul;
        $data["judul_seo"] =  $this->seo_title($req->judulSeo);
        $data["isi_ukm"] = $req->isiUkm;
        $data["sub_isi_ukm"] = $req->subIsiUkm;
        $data["ket_gambar"] =  $req->ketGambar;
        $data["hari"] = $req->hari;
        $data["tanggal"] = date('Y-m-d', strtotime($req->tanggal));
        $data["jam"] = $req->jam;
        $data["penulis"] = $req->penulis;
        $data["tag"] = $req->tag;
        $update = DB::table('ukm')->where('id_ukm', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }
    }

    public function ukmDetail($id) 
    {
        return view('kemahasiswaan.ukm.detail', compact('id'));
    }

    public function ukmDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('ukm')
            ->where('id_ukm', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }

}
