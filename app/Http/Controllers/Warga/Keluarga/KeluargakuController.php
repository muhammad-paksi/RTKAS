<?php

namespace App\Http\Controllers\Warga\Keluarga;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Penduduk;


class KeluargakuController extends Controller
{
    public function index()
    {
        // Dapatkan user yang sedang login
        $user = Auth::user();
        
        // Dapatkan penduduk berdasarkan nik user
        $penduduk = $user->penduduk;

        // Dapatkan nik_kk dari penduduk yang sesuai dengan user
        $nik_kk = $penduduk ? $penduduk->nik_kk : null;

        // Ambil daftar penduduk yang memiliki nik_kk yang sama
        $keluarga = Penduduk::where('nik_kk', $nik_kk)->get();

        // Kembalikan view dengan data keluarga
        return view('warga.keluarga.keluarga', compact('keluarga'));
    }
}
