<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Session;

class Login extends Controller
{
    public function index() {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('login');
        }
    }
    
    public function singin(Request $req) : RedirectResponse 
    {
        $data = [
            'name' => $req->input('username'),
            'password' => $req->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('home');
        }else{
            session()->flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function logout(Request $req) : RedirectResponse {
        Auth::logout();
        return redirect('/');
    }

}
