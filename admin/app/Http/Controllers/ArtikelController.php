<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    // Artikel
    public function index() {}
    public function create() {}
    public function store(Request $request) {}
    public function edit($id) {}
    public function update(Request $request) {}
    public function show() {}
    public function nonaktifkan() {}

    // Mod Artikel
    public function showMod() {}
    public function createMod() {}
    public function store_mod(Request $request) {}
    public function edit_mod($id) {}
    public function update_mod(Request $request) {}
    public function destroy(Request $request) {}

    // Kategori Artikel
}
