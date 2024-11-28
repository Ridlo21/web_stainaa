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

Route::get('/personalBrand', [PersonalBrandController::class, 'index']);

Route::get('/personalBrandAdd', [PersonalBrandController::class, 'create']);

Route::get('/personalBrandEdit', [PersonalBrandController::class, 'edit']);

Route::post('personaltambah', [PersonalBrandController::class, 'store'])->name('personal.tambah');
