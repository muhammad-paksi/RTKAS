<?php

namespace App\Http\Controllers\Bendahara\Manage;

use App\Models\Kas;
use App\Models\BayarIuran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kk = Kas::all();

        $breadcrumb = (object)[
            'judul' => 'Admin ',
            'list' => '/ Data Kas'
        ];

        return view('bendahara.kas.viewKas', compact('kk', 'breadcrumb'));
    }

    public function totalNominal()
    {
        // Menghitung total nominal dari semua pembayaran kas yang masuk
        $kas = BayarIuran::where('status', 'selesai')->sum('nominal');
        $history = BayarIuran::orderBy('tanggal_bayar', 'desc')->get();
        $breadcrumb = (object)[
            'judul' => 'Admin ',
            'list' => '/ Data Kas'
        ];

        // Mengembalikan view dengan data total nominal
        return view('bendahara.manage.kas', compact('kas', 'history', 'breadcrumb'));
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
    public function show(Kas $kas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kas $kas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kas $kas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kas $kas)
    {
        //
    }
}
