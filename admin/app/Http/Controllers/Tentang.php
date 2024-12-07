<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class Tentang extends Controller
{
    public function modIndex() : View 
    {
        $data = DB::table('landing_tentang')->where('status','aktif')->get();
        return view('tentang.modTentang.index', compact("data"));
    }

    public function modCreate() : View 
    {
        return view('tentang.modTentang.create');
    }

    public function modStore(Request $req) 
    {
        $imageName = uniqid().time().'.png';
        $req->gambarTentang->move(public_path('/image/tentang/'), $imageName);
        $data["title"] = $req->title;
        $data["descripton"] = $req->deskripsi;
        $data["gambar"] =  $imageName;
        $data["tanggal"] = date('Y-m-d h:i:s');
        $data["status"] = "aktif";
        $insert = DB::table('landing_tentang')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }

    }

    public function modDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('landing_tentang')
            ->where('id_landing_tentang', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }

    public function modShow($id) 
    {
        return view('tentang.modTentang.update', compact('id'));
    }

    public function modUpdate(Request $req) 
    {
        if ($req->gambarTentang != "") {
            $imageName = uniqid().time().'.png';
            $deleteImage = unlink(public_path('/image/tentang/'.$req->gambarLama));
            $req->gambarTentang->move(public_path('/image/tentang/'), $imageName);
            $data["gambar"] = $imageName;
        } else {
            $data["gambar"] = $req->gambarLama;
        }
        $data["title"] = $req->title;
        $data["descripton"] = $req->deskripsi;
        $update = DB::table('landing_tentang')->where('id_landing_tentang', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }

    }

    public function profilIndex() : View 
    {
        $data = DB::table('tentang_profil_pimpinan')->where('status','aktif')->get();
        return view('tentang.profil.index', compact("data"));
    }

    public function profilCreate() : View 
    {
        return view('tentang.profil.create');
    }

    public function profilStore(Request $req) 
    {
        $imageName = uniqid().time().'.png';
        $req->gambar->move(public_path('/image/tentang/'), $imageName);
        $data["nama"] = $req->nama;
        $data["gelar"] = $req->gelar;
        $data["jabatan"] = $req->jabatan;
        $data["biografi"] = $req->biografi;
        $data["gambar"] =  $imageName;
        $data["status"] = "aktif";
        $insert = DB::table('tentang_profil_pimpinan')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }

    }

    public function profilShow($id) 
    {
        return view('tentang.profil.update', compact('id'));
    }

    public function profilUpdate(Request $req) 
    {
        if ($req->gambarTentang != "") {
            $imageName = uniqid().time().'.png';
            $deleteImage = unlink(public_path('/image/tentang/'.$req->gambarLama));
            $req->gambarTentang->move(public_path('/image/tentang/'), $imageName);
            $data["gambar"] = $imageName;
        } else {
            $data["gambar"] = $req->gambarLama;
        }
        $data["nama"] = $req->nama;
        $data["gelar"] = $req->gelar;
        $data["jabatan"] = $req->jabatan;
        $data["biografi"] = $req->biografi;
        $update = DB::table('tentang_profil_pimpinan')->where('id_tentang_profil_pimpinan', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }

    }

    public function profilDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('tentang_profil_pimpinan')
            ->where('id_tentang_profil_pimpinan', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }
}
