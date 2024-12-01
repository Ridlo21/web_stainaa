<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Home;
use App\Http\Controllers\PersonalBrandController;
use App\Http\Controllers\Cover;


Route::get('/', [Login::class, 'index']);
Route::get('/home', [Home::class, 'index']);
Route::post('singin', [Login::class, 'singin'])->name('singin');
Route::get('/logout', [Login::class, 'logout'])->name('logout');

Route::controller(PersonalBrandController::class)->group(function () {
    Route::get('/personalBrand', 'index')->name('personal.Brand');
    Route::get('/personalBrandAdd', 'create')->name('personalBrand.Add');
    Route::get('/personalBrandEdit/{uuid}', 'edit')->name('personalBrand.Edit');
    Route::post('personaltambah', 'store')->name('personal.tambah');
});

Route::resource('cover',Cover::class);