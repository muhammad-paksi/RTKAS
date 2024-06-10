<?php

namespace App\Http\Controllers\Warga\Bayar;

use App\Models\NotifikasiIuran;
use App\Models\BayarIuran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Penduduk;
use App\Http\Controllers\Controller;

class BayarIuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $penduduk = $user->penduduk;
        $nik_kk = $penduduk ? $penduduk->nik_kk : null;

        $notifikasi_belum_dibayar = NotifikasiIuran::whereDoesntHave('bayar', function($query) use ($nik_kk) {
            $query->where('nik_kk', $nik_kk);
        })->get();

        // Notifikasi yang sudah dibayar (pending)
        $notifikasi_pending = BayarIuran::where('nik_kk', $nik_kk)->where('status', 'belum')->get();

        return view('warga.bayar.listIuran', compact('notifikasi_belum_dibayar', 'notifikasi_pending'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function bayar(int $id_notifikasi)
    {
        $notifikasi = NotifikasiIuran::findOrFail($id_notifikasi);

        // Dapatkan data akun yang sedang login
        $akun = Auth::user();
        $nik = $akun->nik;

        // Dapatkan data penduduk yang terkait dengan akun
        $penduduk = Penduduk::where('nik', $nik)->firstOrFail();
        $nik_kk = $penduduk->nik_kk;

        return view('warga.bayar.bayarIuran', compact('id_notifikasi', 'nik', 'nik_kk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|string',
            'id_notifikasi' => 'required|numeric',
            'bukti' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nominal' => 'required|numeric',
            'nik_kk' => 'required|string',
            'tanggal_bayar' => 'required|date',
        ]);

        // Handle file upload
        if ($request->hasFile('bukti')) {
            $file = $request->file('bukti');
            $path = $file->store('public/bukti_pembayaran');
            $filename = basename($path);
        } else {
            return back()->with('error', 'Bukti pembayaran wajib diupload');
        }

        // Simpan data pembayaran
        BayarIuran::create([
            'nik' => $request->nik,
            'id_notifikasi' => $request->id_notifikasi,
            'bukti' => $filename,
            'nominal' => $request->nominal,
            'nik_kk' => $request->nik_kk,
            'status' => 'belum', // Anda bisa mengubah status sesuai kebutuhan
            'tanggal_bayar' => $request->tanggal_bayar,
        ]);

        return redirect()->route('warga/iuran')->with('success', 'Pembayaran berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(BayarIuran $bayarIuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BayarIuran $bayarIuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BayarIuran $bayarIuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BayarIuran $bayarIuran)
    {
        //
    }
}
