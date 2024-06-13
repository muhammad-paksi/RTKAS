<?php

namespace App\Http\Controllers\Warga;

use App\Models\Pengumuman;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengumumanWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua pengumuman dari database
        $pengumuman = Pengumuman::all();

        // Mengembalikan view dengan data pengumuman
        return view('warga.pengumuman.index', compact('pengumuman'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Mengambil pengumuman berdasarkan ID
        $pengumuman = Pengumuman::findOrFail($id);

        // Mengembalikan view dengan data pengumuman
        return view('warga.pengumuman.detail', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengumuman $pengumuman)
    {
        //
    }
}
