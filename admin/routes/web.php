<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Home;
use App\Http\Controllers\PersonalBrandController;
use App\Http\Controllers\Cover;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\Tentang;
use App\Http\Controllers\Pendidikan;

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
    // profil
    Route::get('/tentangProfilIndex', 'profilIndex')->name('tentang.profilIndex');
    Route::get('/tentangProfilAdd', 'profilCreate')->name('tentang.profilCreate');
    Route::post('/tentangProfilInsert', 'profilStore')->name('tentang.profilStore');
    Route::get('/tentangProfilShow/{id}', 'profilShow')->name('tentang.profilShow');
    Route::get('/tentangProfilDetail/{id}', 'profilDetail')->name('tentang.profilDetail');
    Route::post('/tentangProfilUpdate', 'profilUpdate')->name('tentang.profilUpdate');
    Route::post('/tentangProfilDelete', 'profilDestroy')->name('tentang.profilDestroy');
    // sejarah
    Route::get('/tentangSejarahIndex', 'sejarahIndex')->name('tentang.sejarahIndex');
    Route::get('/tentangSejarahAdd', 'sejarahCreate')->name('tentang.sejarahCreate');
    Route::post('/tentangSejarahInsert', 'sejarahStore')->name('tentang.sejarahStore');
    Route::get('/tentangSejarahShow/{id}', 'sejarahShow')->name('tentang.sejarahShow');
    Route::post('/tentangSejarahUpdate', 'sejarahUpdate')->name('tentang.sejarahUpdate');
    Route::post('/tentangSejarahDelete', 'sejarahDestroy')->name('tentang.sejarahDestroy');
    // Visi
    Route::get('/tentangVisiIndex', 'visiIndex')->name('tentang.visiIndex');
    Route::get('/tentangVisiAdd', 'visiCreate')->name('tentang.visiCreate');
    Route::post('/tentangVisiInsert', 'visiStore')->name('tentang.visiStore');
    Route::get('/tentangVisiShow/{id}', 'visiShow')->name('tentang.visiShow');
    Route::post('/tentangVisiUpdate', 'visiUpdate')->name('tentang.visiUpdate');
    Route::post('/tentangVisiDelete', 'visiDestroy')->name('tentang.visiDestroy');
    // Misi
    Route::get('/tentangMisiIndex','misiIndex')->name('tentang.misiIndex');
    Route::get('/tentangMisiAdd', 'misiCreate')->name('tentang.misiCreate');
    Route::post('/tentangMisiInsert', 'misiStore')->name('tentang.misiStore');
    Route::get('/tentangMisiShow/{id}', 'misiShow')->name('tentang.misiShow');
    Route::post('/tentangMisiUpdate', 'misiUpdate')->name('tentang.misiUpdate');
    Route::post('/tentangMisiDelete', 'misiDestroy')->name('tentang.misiDestroy');
    // Motto
    Route::get('/tentangMottoIndex','mottoIndex')->name('tentang.mottoIndex');
    Route::get('/tentangMottoAdd', 'mottoCreate')->name('tentang.mottoCreate');
    Route::post('/tentangMottoInsert', 'mottoStore')->name('tentang.mottoStore');
    Route::get('/tentangMottoShow/{id}', 'mottoShow')->name('tentang.mottoShow');
    Route::post('/tentangMottoUpdate', 'mottoUpdate')->name('tentang.mottoUpdate');
    Route::post('/tentangMottoDelete', 'mottoDestroy')->name('tentang.mottoDestroy');
});

Route::controller(Pendidikan::class)->group(function () {
    Route::get('/pendidikanModIndex', 'modIndex')->name('pendidikan.modIndex');
    Route::get('/pendidikanModAdd', 'modCreate')->name('pendidikan.modCreate');
    Route::get('/pendidikanModShow/{id}', 'modShow')->name('pendidikan.modShow');
    Route::post('/pendidikanModInsert', 'modStore')->name('pendidikan.modStore');
    Route::post('/pendidikanModUpdate', 'modUpdate')->name('pendidikan.modUpdate');
    Route::post('/pendidikanModDelete', 'modDestroy')->name('pendidikan.modDestroy');
    //education
    Route::get('/pendidikanEducationIndex', 'educationIndex')->name('pendidikan.educationIndex');
    Route::get('/pendidikanEducationAdd', 'educationCreate')->name('pendidikan.educationCreate');
    Route::get('/pendidikanEducationShow/{id}', 'educationShow')->name('pendidikan.educationShow');
    Route::get('/pendidikanEducationDetail/{id}', 'educationDetail')->name('pendidikan.educationDetail');
    Route::post('/pendidikanEducationInsert', 'educationStore')->name('pendidikan.educationStore');
    Route::post('/pendidikanEducationUpdate', 'educationUpdate')->name('pendidikan.educationUpdate');
    Route::post('/pendidikanEducationDelete', 'educationDestroy')->name('pendidikan.educationDestroy');
});


