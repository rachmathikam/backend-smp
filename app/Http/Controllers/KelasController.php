<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{

    public function index()
    {
        $data = Kelas::latest()->get();

        return response()->jsno([
            'data' => $data,
        ]);
    }

    public function create()
    {

    }


    public function store(Request $request)
    {
        $request->validate([
            'nama'    => 'required|string|max:100|min:3|unique:classes,nama',
            'deskripsi' => 'nullable|string'
        ]);

        $data = $request->all();

        $item = Kelas::create($data);

        if($item){
            return response()->json([
                'success' => true,
                'message'   => "$item->nama berhasil ditambahkan",
                'item'  => $item
            ]);
       } else {
            return response()->json([
                'success' => false,
                'message'   => "$item->nama gagal ditambahkan",
                'item' => $item
            ]);
       }
    }

    public function show($id)
    {
        $item = Kelas::find($id);

        return response()->json([
            'item' => $item
        ]);
    }


    public function edit($id)
    {
        $data = Kelas::findOrFail($id);

        return response()->json([
            'data'  => $data
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'    => 'required|string|max:100|min:3|unique:classes,nama,'.$id,
            'deskripsi' => 'nullable|string'
        ]);

        $data = $request->all();

        $item = Kelas::findOrFail($id)->update($data);

        if($item){
            return response()->json([
                'success' => true,
                'message'   => "$item->nama berhasil diupdate",
                'item'  => $item
            ]);
       } else {
            return response()->json([
                'success' => false,
                'message'   => "$item->nama gagal diupdate",
                'item' => $item
            ]);
       }
    }


    public function destroy($id)
    {
        $data = Kelas::findOrFail($id)->delete();

        if($data){
            return response()->json([
                'success' => true,
                'message'   => "$data->nama berhasil dihapus",
            ]);
       } else {
            return response()->json([
                'success' => false,
                'message'   => "$data->nama gagal dihapus",
            ]);
       }
    }
}
