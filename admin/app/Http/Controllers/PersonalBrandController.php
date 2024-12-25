<?php

namespace App\Http\Controllers;

use App\Models\PersonalBrandModel;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PersonalBrandController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $query = PersonalBrandModel::where('status', 'aktif');

        $query->orderBy('tanggal', 'DESC');

        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        $data = $query->paginate(9);

        return view('personalBrand.personal', compact('data', 'search',));
    }

    public function create()
    {
        return view('personalBrand.personaladd');
    }

    public function store(Request $request)
    {
        $id_personal_branding = Str::uuid()->toString();

        $data = new PersonalBrandModel();
        $data->id_personal_branding = $id_personal_branding;
        $data->title = $request->title;
        $data->context = $request->context;
        $data->tanggal = date('Y-m-d');
        $data->ket = $request->ket;
        $data->icon = $request->icon;
        $data->status = 'aktif';
        $data->save();

        return response()->json(['message' => 'Data berhasil disimpan'], 201);
    }

    public function edit($id)
    {
        $data = PersonalBrandModel::find($id);
        return view('personalBrand.personaledit', compact('data'));
    }

    public function update(Request $request)
    {
        PersonalBrandModel::where('id_personal_branding', $request->id)->update([
            'title' => $request->title,
            'context' => $request->context,
            'ket' => $request->ket,
            'icon' => $request->icon
        ]);

        return response()->json(['message' => 'Data berhasil diubah'], 201);
    }

    public function nonaktifkan(Request $request)
    {
        PersonalBrandModel::where('id_personal_branding', $request->id)->update([
            'status' => 'tidak',
        ]);

        return response()->json(['message' => 'Data berhasil dinonaktifkan'], 201);
    }
}
