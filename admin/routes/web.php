<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalBrandController;

Route::get('/', function () {
    return view('dashboard.dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/personalBrand', [PersonalBrandController::class, 'index']);

Route::get('/personalBrandAdd', [PersonalBrandController::class, 'create']);

Route::get('/personalBrandEdit', [PersonalBrandController::class, 'edit']);

Route::post('personaltambah', [PersonalBrandController::class, 'store'])->name('personal.tambah');
