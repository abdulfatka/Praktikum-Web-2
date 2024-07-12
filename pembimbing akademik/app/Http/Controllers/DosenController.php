<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_dosen = Dosen::all();
        return view('dosen.index', compact('list_dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'jk' => 'required|string',
            'prodi_id' => 'required|string',
        ]);


        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'prodi_id' => $request->prodi_id,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('dosens.index')->with('success', 'Dosen Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        return view('dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $dosen->update($request->all());
        return redirect()->route('dosens.index')->with('success', 'Dosen Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {

        $dosen->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('dosens.index')->with('success', 'Dosen Berhasil Dihapus');
    }
}
