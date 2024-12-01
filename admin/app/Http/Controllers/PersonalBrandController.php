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
        $data = PersonalBrandModel::where('status', 'aktif')->paginate(9);
        return view('personalBrand.personal', compact('data'));
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

    public function edit($id)
    {
        $data = PersonalBrandModel::where('id_personal_branding', $id);
        return view('personalBrand.personaledit', compact('data'));
    }

    public function update(Request $request)
    {
        // 
    }
}
