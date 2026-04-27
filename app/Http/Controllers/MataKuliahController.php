<?php

namespace App\Http\Controllers;

use App\Models\Mata_Kuliah;
use Illuminate\Http\Request;

class MataKuliahController
{
    public function index()
    {
        return view('matakuliah.index', [
            'matakuliah' => Mata_Kuliah::all()
        ]);
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        Mata_Kuliah::create($data);
        return redirect()->route('matakuliah.index');
    }

    public function edit($id)
    {
        return view('matakuliah.edit', [
            'matakuliah' => Mata_Kuliah::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        Mata_Kuliah::find($id)->update($data);
        return redirect()->route('matakuliah.index');
    }

    public function destroy($id)
    {
        Mata_Kuliah::findOrFail($id)->delete();
        return redirect()->route('matakuliah.index');
    }
}