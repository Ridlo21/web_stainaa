<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Home;
use App\Http\Controllers\PersonalBrandController;
use App\Http\Controllers\Cover;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\Tentang;

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
    Route::post('pengumumantambah', 'store')->name('pengumuman.Tambah');
});

Route::controller(Tentang::class)->group(function () {
    Route::get('/tentangModIndex', 'modIndex')->name('tentang.modIndex');
    Route::get('/tentangModAdd', 'modCreate')->name('tentang.modCreate');
    Route::get('/tentangModShow/{id}', 'modShow')->name('tentang.modShow');
    Route::post('/tentangModInsert', 'modStore')->name('tentang.modStore');
    Route::post('/tentangModUpdate', 'modUpdate')->name('tentang.modUpdate');
    Route::post('/tentangModDelete', 'modDestroy')->name('tentang.modDestroy');
});
