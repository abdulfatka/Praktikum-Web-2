<?php

namespace App\Http\Controllers;

use App\Models\Rombongan_belajar;
use Illuminate\Http\Request;

class RombonganBelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_rombongan_belajar = Rombongan_belajar::all();
        return view('rombongan_belajar.index', compact('list_rombongan_belajar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rombongan_belajar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string',
            'thn_masuk' => 'required|string',
            'dosen_pa' => 'required|string',
        ]);


        Rombongan_belajar::create([
            'kode' => $request->kode,
            'thn_masuk' => $request->thn_masuk,
            'dosen_pa' => $request->dosen_pa,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('rombongan_belajars.index')->with('success', 'Rombel Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rombongan_belajar $rombongan_belajar)
    {
        return view('rombongan_belajar.show', compact('rombongan_belajar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rombongan_belajar $rombongan_belajar)
    {
        return view('rombongan_belajar.edit', compact('rombongan_belajar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rombongan_belajar $rombongan_belajar)
    {
        $rombongan_belajar->update($request->all());
        return redirect()->route('rombongan_belajars.index')->with('success', 'Rombel Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rombongan_belajar $rombongan_belajar)
    {
        $rombongan_belajar->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('rombongan_belajars.index')->with('success', 'Rombel Berhasil Dihapus');
    }
}
