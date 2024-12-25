<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail; 
use App\Mail\SendEmail;

class Contact extends Controller
{
    public function modIndex() : View 
    {
        $data = DB::table('landing_contact')->where('status','aktif')->get();
        return view('contact.modContact.index', compact("data"));
    }

    public function modCreate() : View 
    {
        return view('contact.modContact.create');
    }

    public function modStore(Request $req) 
    {
        $imageName = uniqid().time().'.png';
        $req->gambarContact->move(public_path('/image/contact/'), $imageName);
        $data["title"] = $req->title;
        $data["descripton"] = $req->deskripsi;
        $data["gambar"] =  $imageName;
        $data["no_contact"] = $req->noContact;
        $data["map"] = $req->map;
        $data["email"] = $req->email;
        $data["tanggal"] = date('Y-m-d h:i:s');
        $data["status"] = "aktif";
        $insert = DB::table('landing_contact')->insert($data);
        if ($insert) {
            return response()->json(['message' => 'Data Berhasil Disimpan']);
        }

    }

    public function modShow($id) 
    {
        return view('contact.modContact.update', compact('id'));
    }

    public function modUpdate(Request $req) 
    {
        if ($req->gambarcontact != "") {
            $imageName = uniqid().time().'.png';
            $deleteImage = unlink(public_path('/image/contact/'.$req->gambarLama));
            $req->gambarcontact->move(public_path('/image/contact/'), $imageName);
            $data["gambar"] = $imageName;
        } else {
            $data["gambar"] = $req->gambarLama;
        }
        $data["title"] = $req->title;
        $data["descripton"] = $req->deskripsi;
        $data["no_contact"] = $req->noContact;
        $data["map"] = $req->map;
        $data["email"] = $req->email;
        $update = DB::table('landing_contact')->where('id_landing_contact', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Data Berhasil Diedit']);
        }
    }

    public function modDestroy(Request $req)
    {
        $id = $req->id;
        $destroy = DB::table('landing_contact')
            ->where('id_landing_contact', $id)
            ->update(['status' => 'tidak']);
        if ($destroy) {
            return response()->json(['message' => 'Data Berhasil Dihapus !']);
        }
    }

    public function mailIndex() : View 
    {
        $data = DB::table('contact')->get();
        return view('contact.sendMail.index', compact("data"))->with('no',1);
    }

    public function mailShow($id) 
    {
        return view('contact.sendMail.reply', compact('id'));
    }

    public function mailReplay(Request $req) 
    {
        $sendData = [
            'subject' => 'STAINAA DEVELOPER',
            'title' => 'Email Otomatis dari STAINAA',
            'body' => $req->balasanComment
        ];
        
        Mail::to($req->email)->send(new SendEmail($sendData));
        $data["balasan_comment"] = $req->balasanComment;
        $data["status"] = "selesai";
        $data["tanggal_balasan"] = date('Y-m-d');
        $update = DB::table('contact')->where('id_contact', $req->id)->update($data);
        if ($update) {
            return response()->json(['message' => 'Email Berhasil dikirim']);
        }
    }
}
