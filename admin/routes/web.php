<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Home;
use App\Http\Controllers\PersonalBrandController;
use App\Http\Controllers\Cover;
use App\Http\Controllers\PengumumanController;

Route::get('/', [Login::class, 'index']);
Route::get('/home', [Home::class, 'index']);
Route::post('singin', [Login::class, 'singin'])->name('singin');
Route::get('/logout', [Login::class, 'logout'])->name('logout');

Route::controller(PersonalBrandController::class)->group(function () {
    Route::get('/personalBrand', 'index')->name('personal.Brand');
    Route::get('/personalBrandAdd', 'create')->name('personalBrand.Add');
    Route::get('/personalBrandEdit/{id}', 'edit')->name('personalBrand.Edit');
    Route::post('personaltambah', 'store')->name('personal.tambah');
    Route::post('personalupdate', 'update')->name('personal.update');
    Route::post('personalnonaktif', 'nonaktifkan')->name('personal.nonaktif');
});

Route::resource('cover', Cover::class);

Route::controller(PengumumanController::class)->group(function () {
    Route::get('/pengumumanList', 'index')->name('pengumuman.list');
    Route::get('/pengumumanAdd', 'create')->name('pengumuman.Add');
    Route::get('/pengumumanEdit/{id}', 'edit')->name('pengumuman.Edit');
    Route::get('/pengumumanInfo/{id}', 'show')->name('pengumuman.Info');
    Route::post('pengumumantambah', 'store')->name('pengumuman.Tambah');
    Route::post('pengumumanupdate', 'update')->name('pengumuman.update');
    Route::post('pengumumannonaktif', 'nonaktifkan')->name('pengumuman.nonaktif');
    Route::get('/pengumumanMod', 'showMod')->name('pengumuman.mod');
    Route::get('/pengumumanModAdd', 'createMod')->name('pengumuman.mod.Add');
    Route::get('/modpengumumanEdit/{id}', 'edit_mod')->name('modpengumuman.Edit');
    Route::post('modpengumumantambah', 'store_mod')->name('modpengumuman.Tambah');
    Route::post('modpengumumanupdate', 'update_mod')->name('modpengumuman.update');
    Route::post('modpengumumanhapus', 'destroy')->name('modpengumuman.hapus');
});
