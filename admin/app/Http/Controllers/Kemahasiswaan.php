<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class Kemahasiswaan extends Controller
{
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

}
