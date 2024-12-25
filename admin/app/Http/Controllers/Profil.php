<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class Profil extends Controller
{
    public function index() : View 
    {
        $data = DB::table('profile_singkat')->where('status','aktif')->get();
        return view('profil.index', compact("data"));
    }

    public function create() : View 
    {
        return view('profil.create');
    }

    public function store(Request $req) 
    {
        $imageName = uniqid().time().'.png';
        $req->gambarProfil->move(public_path('/image/profil/'), $imageName);
        $data["title"] = $req->title;
        $data["isi_profile"] = $req->deskripsi;
        $data["gambar"] =  $imageName;
        $data["tanggal"] = date('Y-m-d h:i:s');
        $data["status"] = "aktif";
        $insert = DB::table('profile_singkat')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }

    }

    public function destroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('profile_singkat')
            ->where('id_profile', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }

    public function Show($id) 
    {
        return view('profil.update', compact('id'));
    }

    public function Update(Request $req) 
    {
        if ($req->gambarprofil != "") {
            $imageName = uniqid().time().'.png';
            $deleteImage = unlink(public_path('/image/profil/'.$req->gambarLama));
            $req->gambarProfil->move(public_path('/image/profil/'), $imageName);
            $data["gambar"] = $imageName;
        } else {
            $data["gambar"] = $req->gambarLama;
        }
        $data["title"] = $req->title;
        $data["isi_profile"] = $req->deskripsi;
        $update = DB::table('profile_singkat')->where('id_profile', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }

    }
}
