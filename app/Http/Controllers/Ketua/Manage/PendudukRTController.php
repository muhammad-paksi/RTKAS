<?php

namespace App\Http\Controllers\Ketua\Manage;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use App\Models\KartuKeluarga;
use Illuminate\Http\Request;

class PendudukRTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warga = Penduduk::with('kk')->get();

        $breadcrumb = (object)[
            'judul' => 'Ketua RT ',
            'list' => '/ Data Warga'
        ];

        return view('ketua.manage.warga.penduduk', compact('warga', 'breadcrumb'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kkList = KartuKeluarga::select('nik_kk', 'nama_kepala')->get();
        $breadcrumb = (object)[
            'judul' => 'Ketua RT / Data Warga /',
            'list' => ' Insert Penduduk'
        ];

        return view('ketua.manage.warga.insertPenduduk', compact('kkList', 'breadcrumb'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'nik_kk' => 'required|numeric'
        ]);
    
        Penduduk::create($request->only(['nik', 'nama_lengkap', 'tanggal_lahir', 'nik_kk']));
    
        return redirect()->route('ketua.penduduk')->with('success', 'Penduduk Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nik)
    {
        $kkList = KartuKeluarga::select('nik_kk', 'nama_kepala')->get();
        if (!preg_match('/^\d+$/', $nik)) {
            // Tambahkan logika untuk menangani kesalahan validasi
            return redirect()->back()->withErrors(['nik' => 'NIK tidak valid.']);
        }
        $warga = Penduduk::findOrFail($nik);
        
        $breadcrumb = (object)[
            'judul' => 'Ketua RT / Data Penduduk /',
            'list' => ' Edit Data Penduduk'
        ];

        return view('ketua.manage.warga.editWarga', compact('warga', 'breadcrumb', 'kkList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nik)
    {
        if (!preg_match('/^\d+$/', $nik)) {
            // Tambahkan logika untuk menangani kesalahan validasi
            return redirect()->back()->withErrors(['nik' => 'NIK tidak valid.']);
        }
    
        // Validasi input request
        $validatedData = $request->validate([
            'nik' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'nik_kk' => 'required|numeric'
        ]);
    
        // Temukan Kartu Keluarga berdasarkan nik_kk, atau gagal jika tidak ditemukan
        $warga = Penduduk::findOrFail($nik);
    
        // Update data Kartu Keluarga
        $warga->update($validatedData);
    
        // Redirect ke route 'viewkk' dengan pesan sukses
        return redirect()->route('ketua.penduduk')->with('success', 'Data Penduduk telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nik)
    {
        $warga = Penduduk::findOrFail($nik);
        $warga->delete();

        return redirect()->route('ketua.penduduk')->with('success', 'Penduduk telah didelete');
    }
}
