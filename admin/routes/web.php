<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.dashboard');
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
