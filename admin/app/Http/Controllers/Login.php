<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class Login extends Controller
{
    public function index() {
        return view('login');
    }
    
    public function singin(Request $req) : RedirectResponse 
    {
        $data = DB::table('login')
            ->where("username", $req->signInEmail)
            ->where("password", $req->signInPassword)
            ->where("status", "aktif")
            ->first();
        if (!$data) {
            return "data salah";
        }
        // $username = $req->signInEmail;
        // dd($username);
    }

}
