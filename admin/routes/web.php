<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/personalBrand', function () {
    return view('personalBrand.personal');
});

Route::get('/personalBrandAdd', function () {
    return view('personalBrand.personaladd');
});

Route::get('/personalBrandEdit', function () {
    return view('personalBrand.personaledit');
});
