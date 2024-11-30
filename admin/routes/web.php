<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Home;
use App\Http\Middleware\UseLogin;
use App\Http\Controllers\PersonalBrandController;



// Route::get('/', function () {
//     return view('dashboard.dashboard');
// });
// Route::get('/home', [Home::class, 'index'])->middleware('auth');
Route::get('/', [home::class, 'index'])->middleware('admin');
Route::get('/login', [Login::class, 'index']);
Route::post('/singin', [Login::class, 'singin'])->name('singin');

Route::controller(PersonalBrandController::class)->group(function () {
    Route::get('/personalBrand', 'index')->name('personal.Brand');
    Route::get('/personalBrandAdd', 'create')->name('personalBrand.Add');
    Route::get('/personalBrandEdit', 'edit')->name('personalBrand.Edit');
    Route::post('personaltambah', 'store')->name('personal.tambah');
});
