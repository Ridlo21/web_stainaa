<?php

namespace App\Http\Controllers;

// use App\Models\PersonalBrandModel;

use App\Models\PersonalBrandModel;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PersonalBrandController extends Controller
{
    public function index()
    {
        return view('personalBrand.personal');
    }

    public function create()
    {
        return view('personalBrand.personaladd');
    }

    public function store(Request $request)
    {
        $id_personal_branding = Str::uuid()->toString();

        $validated = $request->validate([
            'title' => 'required|string',
            'context' => 'required|string',
            'ket' => 'required|string',
        ]);

        $data = new PersonalBrandModel();
        $data->id_personal_branding = $id_personal_branding;
        $data->title = $validated['title'];
        $data->context = $validated['context'];
        $data->tanggal = date('Y-m-d');
        $data->ket = $validated['ket'];
        $data->status = 'aktif';
        $data->save();

        return response()->json(['message' => 'Data berhasil disimpan'], 201);
    }

    public function edit()
    {
        return view('personalBrand.personaledit');
    }

    public function update(Request $request)
    {
        // 
    }
}
