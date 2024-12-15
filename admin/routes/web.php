<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Home;
use App\Http\Controllers\PersonalBrandController;
use App\Http\Controllers\Cover;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\Tentang;
use App\Http\Controllers\Pendidikan;
use App\Http\Controllers\Kemahasiswaan;
use App\Http\Controllers\Akreditasi;

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
    Route::get('/tentangMisiIndex', 'misiIndex')->name('tentang.misiIndex');
    Route::get('/tentangMisiAdd', 'misiCreate')->name('tentang.misiCreate');
    Route::post('/tentangMisiInsert', 'misiStore')->name('tentang.misiStore');
    Route::get('/tentangMisiShow/{id}', 'misiShow')->name('tentang.misiShow');
    Route::post('/tentangMisiUpdate', 'misiUpdate')->name('tentang.misiUpdate');
    Route::post('/tentangMisiDelete', 'misiDestroy')->name('tentang.misiDestroy');
    // Motto
    Route::get('/tentangMottoIndex', 'mottoIndex')->name('tentang.mottoIndex');
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

Route::controller(BeritaController::class)->group(function () {
    Route::get('/beritaList', 'index')->name('berita.list');
    Route::get('/beritaAdd', 'create')->name('berita.Add');
    Route::get('/beritaEdit/{id}', 'edit')->name('berita.Edit');
    Route::get('/beritaInfo/{id}', 'show')->name('berita.Info');
    Route::post('beritatambah', 'store')->name('berita.Tambah');
    Route::post('beritaupdate', 'update')->name('berita.update');
    Route::post('beritanonaktif', 'nonaktifkan')->name('berita.nonaktif');
    Route::get('/beritaMod', 'showMod')->name('berita.mod');
    Route::get('/beritaModAdd', 'createMod')->name('berita.mod.Add');
    Route::get('/modberitaEdit/{id}', 'edit_mod')->name('modberita.Edit');
    Route::post('modberitatambah', 'store_mod')->name('modberita.Tambah');
    Route::post('modberitaupdate', 'update_mod')->name('modberita.update');
    Route::post('modberitahapus', 'destroy')->name('modberita.hapus');
});

Route::controller(Kemahasiswaan::class)->group(function () {
    Route::get('/kemahasiswaanModIndex', 'modIndex')->name('kemahasiswaan.modIndex');
    Route::get('/kemahasiswaanModAdd', 'modCreate')->name('kemahasiswaan.modCreate');
    Route::get('/kemahasiswaanModShow/{id}', 'modShow')->name('kemahasiswaan.modShow');
    Route::post('/kemahasiswaanModInsert', 'modStore')->name('kemahasiswaan.modStore');
    Route::post('/kemahasiswaanModUpdate', 'modUpdate')->name('kemahasiswaan.modUpdate');
    Route::post('/kemahasiswaanModDelete', 'modDestroy')->name('kemahasiswaan.modDestroy');
    //Bem
    Route::get('/kemahasiswaanBemIndex', 'bemIndex')->name('kemahasiswaan.bemIndex');
    Route::get('/kemahasiswaanBemAdd', 'bemCreate')->name('kemahasiswaan.bemCreate');
    Route::get('/kemahasiswaanBemShow/{id}', 'bemShow')->name('kemahasiswaan.bemShow');
    Route::post('/kemahasiswaanBemInsert', 'bemStore')->name('kemahasiswaan.bemStore');
    Route::post('/kemahasiswaanBemUpdate', 'bemUpdate')->name('kemahasiswaan.bemUpdate');
    Route::post('/kemahasiswaanBemDelete', 'bemDestroy')->name('kemahasiswaan.bemDestroy');
    //Ukm
    Route::get('/kemahasiswaanUkmIndex', 'ukmIndex')->name('kemahasiswaan.ukmIndex');
    Route::get('/kemahasiswaanUkmAdd', 'ukmCreate')->name('kemahasiswaan.ukmCreate');
    Route::get('/kemahasiswaanUkmShow/{id}', 'ukmShow')->name('kemahasiswaan.ukmShow');
    Route::get('/kemahasiswaanUkmDetail/{id}', 'ukmDetail')->name('kemahasiswaan.ukmDetail');
    Route::post('/kemahasiswaanUkmInsert', 'ukmStore')->name('kemahasiswaan.ukmStore');
    Route::post('/kemahasiswaanUkmUpdate', 'ukmUpdate')->name('kemahasiswaan.ukmUpdate');
    Route::post('/kemahasiswaanUkmDelete', 'ukmDestroy')->name('kemahasiswaan.ukmDestroy');
});

Route::controller(Akreditasi::class)->group(function () {
    Route::get('/akreditasiModIndex', 'modIndex')->name('akreditasi.modIndex');
    Route::get('/akreditasiModAdd', 'modCreate')->name('akreditasi.modCreate');
    Route::get('/akreditasiModShow/{id}', 'modShow')->name('akreditasi.modShow');
    Route::post('/akreditasiModInsert', 'modStore')->name('akreditasi.modStore');
    Route::post('/akreditasiModUpdate', 'modUpdate')->name('akreditasi.modUpdate');
    Route::post('/akreditasiModDelete', 'modDestroy')->name('akreditasi.modDestroy');
    //accreditation
    Route::get('/akreditasiAccreditationIndex', 'accreditationIndex')->name('akreditasi.accreditationIndex');
    Route::get('/akreditasiAccreditationAdd', 'accreditationCreate')->name('akreditasi.accreditationCreate');
    Route::get('/akreditasiAccreditationShow/{id}', 'accreditationShow')->name('akreditasi.accreditationShow');
    Route::get('/akreditasiAccreditationDetail/{id}', 'accreditationDetail')->name('akreditasi.accreditationDetail');
    Route::post('/akreditasiAccreditationInsert', 'accreditationStore')->name('akreditasi.accreditationStore');
    Route::post('/akreditasiAccreditationUpdate', 'accreditationUpdate')->name('akreditasi.accreditationUpdate');
    Route::post('/akreditasiAccreditationDelete', 'accreditationDestroy')->name('akreditasi.accreditationDestroy');
});

Route::controller(ArtikelController::class)->group(function () {
    Route::get('/artikelMod', 'showMod')->name('artikel.mod');
    Route::get('/artikelModAdd', 'createMod')->name('artikel.mod.Add');
    Route::get('/modartikelEdit/{id}', 'edit_mod')->name('modartikel.Edit');
    Route::post('modartikeltambah', 'store_mod')->name('modartikel.Tambah');
    Route::post('modartikelupdate', 'update_mod')->name('modartikel.update');
    Route::post('modartikelhapus', 'destroy')->name('modartikel.hapus');
    
});
