<?php

namespace App\Http\Controllers\Warga;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeWargaController extends Controller
{
    public function index()
    {
        return view('warga.dashboard');
    }

    public function kontak()
    {
        return view('warga.kontak');
    }

    public function layanan()
    {
        return view('warga.layanan');
    }
}
