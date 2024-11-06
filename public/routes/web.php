<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.beranda');
});

Route::get('/tentang', function () {
    return view('tentang.tentang');
});

Route::get('/pendidikan', function () {
    return view('pendidikan.pendidikan');
});

Route::get('/kemahasiswaan', function () {
    return view('kemahasiswaan.kemahasiswaan');
});

Route::get('/artikel', function () {
    return view('artikel.artikel');
});

Route::get('/akreditasi', function () {
    return view('akreditasi.akreditasi');
});

Route::get('/narahubung', function () {
    return view('narahubung.narahubung');
});
