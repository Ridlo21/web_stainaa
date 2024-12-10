<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class Pendidikan extends Controller
{
    public function modIndex() : View 
    {
        $data = DB::table('landing_pendidikan')->where('status','aktif')->get();
        return view('pendidikan.modpendidikan.index', compact("data"));
    }

    public function modCreate() : View 
    {
        return view('pendidikan.modpendidikan.create');
    }

    public function modStore(Request $req) 
    {
        $imageName = uniqid().time().'.png';
        $req->gambarpendidikan->move(public_path('/image/pendidikan/'), $imageName);
        $data["title"] = $req->title;
        $data["descripton"] = $req->deskripsi;
        $data["gambar"] =  $imageName;
        $data["tanggal"] = date('Y-m-d h:i:s');
        $data["status"] = "aktif";
        $insert = DB::table('landing_pendidikan')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }

    }

    public function modShow($id) 
    {
        return view('pendidikan.modpendidikan.update', compact('id'));
    }

    public function modUpdate(Request $req) 
    {
        if ($req->gambarpendidikan != "") {
            $imageName = uniqid().time().'.png';
            $deleteImage = unlink(public_path('/image/pendidikan/'.$req->gambarLama));
            $req->gambarpendidikan->move(public_path('/image/pendidikan/'), $imageName);
            $data["gambar"] = $imageName;
        } else {
            $data["gambar"] = $req->gambarLama;
        }
        $data["title"] = $req->title;
        $data["descripton"] = $req->deskripsi;
        $update = DB::table('landing_pendidikan')->where('id_landing_pendidikan', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }
    }

    public function modDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('landing_pendidikan')
            ->where('id_landing_pendidikan', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }

    public function educationIndex() : View 
    {
        $data = DB::table('pendidikan')->where('status','aktif')->get();
        return view('pendidikan.education.index', compact("data"));
    }

    public function educationCreate() : View 
    {
        return view('pendidikan.education.create');
    }

    public function educationStore(Request $req) 
    {
        $imageName1 = uniqid().time().'.png';
        $imageName2 = uniqid().time().'.png';
        $req->gambar1->move(public_path('/image/pendidikan/'), $imageName1);
        $req->gambar2->move(public_path('/image/pendidikan/'), $imageName2);
        $data["fakultas"] = $req->fakultas;
        $data["descripton"] = $req->deskripsi;
        $data["biografi"] = $req->biografi;
        $data["gambar1"] =  $imageName1;
        $data["gambar2"] =  $imageName2;
        $data["tanggal"] = date('Y-m-d h:i:s');
        $data["status"] = "aktif";
        $insert = DB::table('pendidikan')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }

    }

    public function educationShow($id) 
    {
        return view('pendidikan.education.update', compact('id'));
    }

    public function educationUpdate(Request $req) 
    {
        if ($req->gambar1 != "") {
            $imageName1 = uniqid().time().'.png';
            $deleteImage12 = unlink(public_path('/image/pendidikan/'.$req->gambarLama1));
            $req->gambar1->move(public_path('/image/pendidikan/'), $imageName1);
            $data["gambar1"] = $imageName1;
        } else {
            $data["gambar1"] = $req->gambarLama1;
        }
        if ($req->gambar2 != "") {
            $imageName2 = uniqid().time().'.png';
            $deleteImage = unlink(public_path('/image/pendidikan/'.$req->gambarLama2));
            $req->gambar2->move(public_path('/image/pendidikan/'), $imageName2);
            $data["gambar2"] = $imageName2;
        } else {
            $data["gambar2"] = $req->gambarLama2;
        }
        $data["fakultas"] = $req->fakultas;
        $data["descripton"] = $req->deskripsi;
        $data["biografi"] = $req->biografi;
        $update = DB::table('pendidikan')->where('id_pendidikan', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }
    }

    public function educationDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('pendidikan')
            ->where('id_pendidikan', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }

    public function educationDetail($id) 
    {
        return view('pendidikan.education.detail', compact('id'));
    }
}
