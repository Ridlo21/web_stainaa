<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cover extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $data = DB::table('cover')->get();
        return view('cover.cover',compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('cover.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageName = uniqid().time().'.png';
        $request->croppedImg->move(public_path('/image/cover/'), $imageName);

        $data["nama_cover"] = $request->nama;
        $data["cover"] = $imageName;
        $data["tanggal"] = date('Y-m-d h:i:s');
        $data["status"] = "aktif";
        $insert = DB::table('cover')->insert($data);

        if ($insert) {
            //redirect to index
            return redirect()->route('cover.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


       $data = DB::table('cover')->where('id_cover',$id)->first();
       $deleteImage = unlink(public_path('/image/cover/'.$data->cover));
       $deleteData = DB::table('cover')->where('id_cover', $id)->delete();

        //redirect to index
        return redirect()->route('cover.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
