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

    public function sejarahIndex() : View 
    {
        $data = DB::table('tentang_sejarah')->where('status','aktif')->get();
        return view('tentang.sejarah.index', compact("data"));
    }

    public function sejarahCreate() : View 
    {
        return view('tentang.sejarah.create');
    }

    public function sejarahStore(Request $req) 
    {
        $data["judul"] = $req->judul;
        $data["sub_judul"] = $req->subJudul;
        $data["isi_sejarah"] =  $req->isi;
        $data["penulis"] =  $req->penulis;
        $data["tanggal"] = $req->tanggal;
        $data["status"] = "aktif";
        $insert = DB::table('tentang_sejarah')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }
    }

    public function sejarahShow($id) 
    {
        return view('tentang.sejarah.update', compact('id'));
    }

    public function sejarahUpdate(Request $req) 
    {
        $data["judul"] = $req->judul;
        $data["sub_judul"] = $req->subJudul;
        $data["isi_sejarah"] =  $req->isi;
        $data["penulis"] =  $req->penulis;
        $data["tanggal"] = $req->tanggal;
        $data["status"] = "aktif";
        $update = DB::table('tentang_sejarah')->where('id_tentang_sejarah', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }
    }

    public function sejarahDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('tentang_sejarah')
            ->where('id_tentang_sejarah', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }

    public function visiIndex() : View 
    {
        $data = DB::table('tentang_visi')->where('status','aktif')->get();
        return view('tentang.visi.index', compact("data"))->with('no', 1);
    }

    public function visiCreate() : View 
    {
        return view('tentang.visi.create');
    }

    public function visiStore(Request $req) 
    {
        $data["isi_visi"] =  $req->visi;
        $data["tanggal"] = date('Y-m-d h:i:s');
        $data["status"] = "aktif";
        $insert = DB::table('tentang_visi')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }
    }

    public function visiShow($id) 
    {
        return view('tentang.visi.update', compact('id'));
    }

    public function visiUpdate(Request $req) 
    {
        $data["isi_visi"] =  $req->visi;
        $update = DB::table('tentang_visi')->where('id_tentang_visi', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }
    }

    public function visiDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('tentang_visi')
            ->where('id_tentang_visi', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }

    public function misiIndex() : View 
    {
        $data = DB::table('tentang_misi')->where('status','aktif')->get();
        return view('tentang.misi.index', compact("data"))->with('no', 1);
    }

    public function misiCreate() : View 
    {
        return view('tentang.misi.create');
    }

    public function misiStore(Request $req) 
    {
        $data["isi_misi"] =  $req->misi;
        $data["tanggal"] = date('Y-m-d h:i:s');
        $data["status"] = "aktif";
        $insert = DB::table('tentang_misi')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }
    }

    public function misiShow($id) 
    {
        return view('tentang.misi.update', compact('id'));
    }

    public function misiUpdate(Request $req) 
    {
        $data["isi_misi"] =  $req->misi;
        $update = DB::table('tentang_misi')->where('id_tentang_misi', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }
    }

    public function misiDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('tentang_misi')
            ->where('id_tentang_misi', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }

    public function mottoIndex() : View 
    {
        $data = DB::table('tentang_motto')->where('status','aktif')->get();
        return view('tentang.motto.index', compact("data"))->with('no', 1);
    }

    public function mottoCreate() : View 
    {
        return view('tentang.motto.create');
    }

    public function mottoStore(Request $req) 
    {
        $data["isi_motto"] =  $req->motto;
        $data["tanggal"] = date('Y-m-d h:i:s');
        $data["status"] = "aktif";
        $insert = DB::table('tentang_motto')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }
    }

    public function mottoShow($id) 
    {
        return view('tentang.motto.update', compact('id'));
    }

    public function mottoUpdate(Request $req) 
    {
        $data["isi_motto"] =  $req->motto;
        $update = DB::table('tentang_motto')->where('id_tentang_motto', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }
    }

    public function mottoDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('tentang_motto')
            ->where('id_tentang_motto', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }
}
