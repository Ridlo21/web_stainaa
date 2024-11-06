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

Route::get('/pendidikan_detail', function () {
    return view('pendidikan.pendidikandetail');
});

Route::get('/kemahasiswaan', function () {
    return view('kemahasiswaan.kemahasiswaan');
});

Route::get('/ukm_detail', function () {
    return view('kemahasiswaan.ukmdetail');
});

Route::get('/artikel', function () {
    return view('artikel.artikel');
});

Route::get('/artikel_detail', function () {
    return view('artikel.artikeldetail');
});

Route::get('/akreditasi', function () {
    return view('akreditasi.akreditasi');
});

Route::get('/akreditasi_detail', function () {
    return view('akreditasi.akreditasidetail');
});

Route::get('/narahubung', function () {
    return view('narahubung.narahubung');
});

Route::get('/semua_berita', function () {
    return view('berita.beritalist');
});

Route::get('/berita_detail', function () {
    return view('berita.beritadetail');
});

Route::get('/semua_pengumuman', function () {
    return view('pengumuman.pengumumanlist');
});

Route::get('/pengumuman_detail', function () {
    return view('pengumuman.pengumumandetail');
});
