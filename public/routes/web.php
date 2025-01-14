<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Pendidikan;
use App\Http\Controllers\Tentang;
use App\Http\Controllers\Pengumuman;
use App\Http\Controllers\Berita;
use App\Http\Controllers\Akreditasi;
use App\Http\Controllers\Contact;

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
    Route::get('/semua_pengumuman', 'all')->name('pengumuman.all');
});

Route::controller(Berita::class)->group(function () {
    Route::get('/berita_detail/{seo}', 'show')->name('berita.show');
    Route::get('/semua_berita', 'all')->name('berita.all');

    // Route::get('/semua_berita', function () {
    //     return view('berita.beritalist');
    // });
    
    // Route::get('/berita_detail', function () {
    //     return view('berita.beritadetail');
    // });
});


Route::controller(Akreditasi::class)->group(function () {
    Route::get('/akreditasiIndex', 'index')->name('akreditasi.index');
    Route::get('/akreditasiShow/{fakultas}', 'show')->name('akreditasi.show');
});

Route::controller(Contact::class)->group(function () {
    Route::get('/contactIndex', 'index')->name('contact.index');
});

// Route::get('/pendidikan_detail', function () {
//     return view('pendidikan.pendidikandetail');
// });

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





