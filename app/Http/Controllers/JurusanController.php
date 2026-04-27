<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController
{
    public function index()
    {
        return view('jurusan.index', [
            'jurusan' => Jurusan::all()
        ]);
    }

    public function create()
    {
        return view('jurusan.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        Jurusan::create($data);
        return redirect()->route('jurusan.index');
    }

    public function show($id)
    {
        return Jurusan::find($id);
    }

    public function edit($id)
    {
        return view('jurusan.edit', [
            'jurusan' => Jurusan::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        Jurusan::find($id)->update($data);
        return redirect()->route('jurusan.index');
    }

    public function destroy($id)
    {
        $jurusan = \App\Models\Jurusan::findOrFail($id);
        $jurusan->delete();
        return redirect()->route('jurusan.index')->with('success', 'Data berhasil dihapus');
    }
}