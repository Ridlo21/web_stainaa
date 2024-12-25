<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Pendidikan;
use App\Http\Controllers\Tentang;
use App\Http\Controllers\Pengumuman;

Route::get('/', [Home::class, 'index'])->name('home.index');

Route::controller(Tentang::class)->group(function () {
    Route::get('/tentangIndex', 'index')->name('tentang.index');
    Route::get('/tentangPimpinan', 'tentangPimpinan')->name('tentangPimpinan.show');
});

Route::controller(Pendidikan::class)->group(function () {
    Route::get('/pendidikanIndex', 'index')->name('pendidikan.index');
    Route::get('/pendidikanShow/{id}', 'show')->name('pendidikan.show');
});


Route::controller(Pengumuman::class)->group(function () {
    Route::get('/pengumuman_detail/{seo}', 'show')->name('pengumuman.show');
    // Route::get('/semua_pengumuman', function () {
    //     return view('pengumuman.pengumumanlist');
    // });
    
    // Route::get('/pengumuman_detail', function () {
    //     return view('pengumuman.pengumumandetail');
    // });
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


