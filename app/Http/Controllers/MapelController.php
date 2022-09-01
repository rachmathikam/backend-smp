<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran;

class MapelController extends Controller
{

    public function index()
    {
        $data = MataPelajaran::latest()->get();

        return response()->json([
            'data' => $data,
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required',
            'nama'    => 'required|string|max:100|min:3|unique:mata_pelajarans,nama'
       ],
       [
            'guru_id.required' => 'Guru harus terisi.',
            'nama.required' => 'Mata Pelajaran harus terisi.',
            'nama.unque'    => 'Mata Pelajaran sudah ada.',
            'nama.min'      => 'Mata Pelajaran minimal 3 karakter.',
            'nama.max'      => 'Mata Pelajaran minimal 100 karakter.',
       ]);

       $data = $request->all();

       $item = MataPelajaran::create($data);

       if($item){
            return response()->json([
                'success' => true,
                'message' => "$item->nama berhasil ditambahkan",
                'item'  => $item
            ]);
       } else {
            return response()->json([
                'success' => false,
                'message' => "$item->nama gagal ditambahkan",
                'item' => $item
            ]);
       }
    }


    public function show($id)
    {
        $data = MataPelajaran::findOrFail($id);

        return response()->json([
            'data'  => $data
        ]);
    }


    public function edit($id)
    {
        $data = MataPelajaran::findOrFail($id);

        return response()->json([
            'data'  => $data
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'guru_id' => 'required',
            'nama'    => 'required|string|max:100|min:3|unique:mata_pelajarans,nama,'.$id
       ],
       [
            'guru_id.required' => 'Guru harus terisi.',
            'nama.required' => 'Mata Pelajaran harus terisi.',
            'nama.unque'    => 'Mata Pelajaran sudah ada.',
            'nama.min'      => 'Mata Pelajaran minimal 3 karakter.',
            'nama.max'      => 'Mata Pelajaran minimal 100 karakter.',
       ]);

       $data = $request->all();

       $item = MataPelajaran::finfOrFail($id)->update($data);

       if($item){
            return response()->json([
                'success' => true,
                'message' => "$item->nama berhasil diupdate",
                'item'  => $item
            ]);
       } else {
            return response()->json([
                'success' => false,
                'message' => "$item->nama gagal diupdate",
                'item' => $item
            ]);
       }
    }


    public function destroy($id)
    {
        $data = MataPelajaran::findOrFail($id)->delete();

        if($data){
            return response()->json([
                'success' => true,
                'message' => "$data->nama berhasil diupdate"
            ]);
       } else {
            return response()->json([
                'success' => false,
                'message' => "$data->nama gagal diupdate"
            ]);
       }

    }
}
