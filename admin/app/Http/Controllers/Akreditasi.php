<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class Akreditasi extends Controller
{
    public function modIndex() : View 
    {
        $data = DB::table('landing_akreditasi')->where('status','aktif')->get();
        return view('akreditasi.modAkreditasi.index', compact("data"));
    }

    public function modCreate() : View 
    {
        return view('akreditasi.modAkreditasi.create');
    }

    public function modStore(Request $req) 
    {
        $imageName = uniqid().time().'.png';
        $req->gambarakreditasi->move(public_path('/image/akreditasi/'), $imageName);
        $data["title"] = $req->title;
        $data["descripton"] = $req->deskripsi;
        $data["gambar"] =  $imageName;
        $data["tanggal"] = date('Y-m-d h:i:s');
        $data["status"] = "aktif";
        $insert = DB::table('landing_akreditasi')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }

    }

    public function modShow($id) 
    {
        return view('akreditasi.modAkreditasi.update', compact('id'));
    }

    public function modUpdate(Request $req) 
    {
        if ($req->gambarakreditasi != "") {
            $imageName = uniqid().time().'.png';
            $deleteImage = unlink(public_path('/image/akreditasi/'.$req->gambarLama));
            $req->gambarakreditasi->move(public_path('/image/akreditasi/'), $imageName);
            $data["gambar"] = $imageName;
        } else {
            $data["gambar"] = $req->gambarLama;
        }
        $data["title"] = $req->title;
        $data["descripton"] = $req->deskripsi;
        $update = DB::table('landing_akreditasi')->where('id_landing_akreditasi', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }
    }

    public function modDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('landing_akreditasi')
            ->where('id_landing_akreditasi', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }

    public function accreditationIndex() : View 
    {
        $data = DB::table('akreditasi')->where('status','aktif')->get();
        return view('akreditasi.accreditation.index', compact("data"))->with('no', 1);
    }

    public function accreditationCreate() : View 
    {
        return view('akreditasi.accreditation.create');
    }

    public function accreditationStore(Request $req) 
    {
        $data["fakultas"] = $req->fakultas;
        $data["no_butir"] = $req->noButir;
        $data["link"] = $req->link;
        $data["description"] = $req->deskripsi;
        $data["status"] = "aktif";
        $insert = DB::table('akreditasi')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }

    }

    public function accreditationShow($id) 
    {
        return view('akreditasi.accreditation.update', compact('id'));
    }

    public function accreditationUpdate(Request $req) 
    {
        $data["fakultas"] = $req->fakultas;
        $data["no_butir"] = $req->noButir;
        $data["link"] = $req->link;
        $data["description"] = $req->deskripsi;
        $update = DB::table('akreditasi')->where('id_akreditasi', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }
    }

    public function accreditationDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('akreditasi')
            ->where('id_akreditasi', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }
}
