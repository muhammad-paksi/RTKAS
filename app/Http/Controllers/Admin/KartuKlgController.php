<?php

namespace App\Http\Controllers\Ketuart\Manage;

use App\Http\Controllers\Controller;
use App\Models\KartuKeluarga;
use App\Models\Alamat;
use Illuminate\Http\Request;

class KartuKlgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kk = KartuKeluarga::all();

        $breadcrumb = (object)[
            'judul' => 'Admin ',
            'list' => '/ Kartu Keluarga'
        ];

        return view('admin.manage.kk', compact('kk', 'breadcrumb'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumb = (object)[
            'judul' => 'Admin / Kartu Keluarga /',
            'list' => ' Insert Kartu Keluarga'
        ];

        return view('admin.manage.insertKk', compact('breadcrumb'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik_kk' => 'required|numeric',
            'nama_kepala' => 'required|string',
            'alamat_kk' => 'required|string',
        ]);
    
        KartuKeluarga::create($request->only(['nik_kk', 'nama_kepala', 'alamat_kk']));
    
        return redirect()->route('viewkk')->with('success', 'Kartu Keluarga Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kartukeluarga = KartuKeluarga::findOrFail($id);

        return view('admin.manage.show', compact('kartukeluarga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nik_kk)
    {
        if (!preg_match('/^\d+$/', $nik_kk)) {
            // Tambahkan logika untuk menangani kesalahan validasi
            return redirect()->back()->withErrors(['nik_kk' => 'Nomor Kartu Keluarga tidak valid.']);
        }
        $kartukeluarga = KartuKeluarga::findOrFail($nik_kk);
        
        $breadcrumb = (object)[
            'judul' => 'Admin / Kartu Keluarga /',
            'list' => ' Edit Kartu Keluarga'
        ];

        return view('admin.manage.editKK', compact('kartukeluarga', 'breadcrumb'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nik_kk)
    {
    // Validasi nik_kk jika diperlukan
    if (!preg_match('/^\d+$/', $nik_kk)) {
        // Tambahkan logika untuk menangani kesalahan validasi
        return redirect()->back()->withErrors(['nik_kk' => 'Nomor Kartu Keluarga tidak valid.']);
    }

    // Validasi input request
    $validatedData = $request->validate([
        'nama_kepala' => 'required|string',
        'alamat_kk' => 'required|string',
    ]);

    // Temukan Kartu Keluarga berdasarkan nik_kk, atau gagal jika tidak ditemukan
    $kartuKeluarga = KartuKeluarga::findOrFail($nik_kk);

    // Update data Kartu Keluarga
    $kartuKeluarga->update($validatedData);

    // Redirect ke route 'viewkk' dengan pesan sukses
    return redirect()->route('viewkk')->with('success', 'Kartu Keluarga telah diupdate');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nik_kk)
    {
        $kartuKeluarga = KartuKeluarga::findOrFail($nik_kk);
        $kartuKeluarga->delete();

        return redirect()->route('viewkk')->with('success', 'Kartu Keluarga telah didelete');

    }
}
