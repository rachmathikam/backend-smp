<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eskul;


class EskulController extends Controller
{

    public function index()
    {
       $data = Eskul::latest()->get();

       return response()->json([
        'data' => $data,
       ]);
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
       $request->validate([
            'nama'    => 'required|string|max:100|min:3|unique:mata_pelajarans,nama'
       ],
       [
            'nama.required' => 'Eskul harus terisi.',
            'nama.unque'    => 'Eskul sudah ada.',
            'nama.min'      => 'Eskul minimal 3 karakter.',
            'nama.max'      => 'Eskul minimal 100 karakter.',
       ]);

       $data = $request->all();

       $item = Eskul::create($data);

       if($item){
            return response()->json([
                'success' => true,
                'message'   => "$item->nama berhasil ditambahkan",
                'item' => $item,
            ]);
       } else {
        return response()->json([
            'success' => true,
            'message'   => "$item->nama gagal ditambahkan",
            'item' => $item,
        ]);
       }
    }


    public function show($id)
    {
       $data = Eskul::findOrFail($id);

       return response()->json([
        'data' => $data
       ]);
    }


    public function edit($id)
    {
        $data = Eskul::findOrFail($id);

        return response()->json($data);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'    => 'required|string|max:100|min:3|unique:mata_pelajarans,nama,'.$id
       ],
       [
            'nama.required' => 'Eskul harus terisi.',
            'nama.unque'    => 'Eskul sudah ada.',
            'nama.min'      => 'Eskul minimal 3 karakter.',
            'nama.max'      => 'Eskul minimal 100 karakter.',
       ]);

       $data = $request->all();

       $item = Eskul::findOrDail($id)->update($data);

       if($item){
            return response()->json([
                'success' => true,
                'message'   => "$item->nama berhasil diupdate",
                'item' => $item,
            ]);
       } else {
        return response()->json([
            'success' => true,
            'message'   => "$item->nama gagal diupdate",
            'item' => $item,
        ]);
       }
    }


    public function destroy($id)
    {
        $data = Eskul::findOrFail($id)->delete();

        if($data){
            return response()->json([
                'success' => true,
                'message'   => "$data->nama berhasil dihapus",
            ]);
       } else {
        return response()->json([
            'success' => true,
            'message'   => "$data->nama gagal dihapus",
        ]);
       }
    }
}
