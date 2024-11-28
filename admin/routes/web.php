<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Home;
use App\Http\Middleware\UseLogin;


// Route::get('/', function () {
//     return view('dashboard.dashboard');
// });
// Route::get('/home', [Home::class, 'index'])->middleware('auth');
Route::get('/', [home::class, 'index'])->middleware('admin');
Route::get('/login', [Login::class, 'index']);
Route::post('/singin', [Login::class, 'singin'])->name('singin');