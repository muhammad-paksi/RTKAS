<?php

namespace App\Http\Controllers\Bendahara\Manage;

use App\Models\BayarIuran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifikasiKasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = (object)[
            'judul' => 'Bendahara ',
            'list' => 'Verifikasi Kas'
            ];
        $list = BayarIuran::with('notif', 'warga')->where('status', 'belum')->get();      
        $listsudah = BayarIuran::with('notif', 'warga')->where('status', 'selesai')->get();
        return view('bendahara.manage.viewbayar', compact('list', 'listsudah', 'breadcrumb'));

    }

    public function updateStatus(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'status' => 'required|string'
        ]);

        // Temukan bayar iuran berdasarkan ID
        $bayarIuran = BayarIuran::findOrFail($id);

        // Update status
        $bayarIuran->status = $request->input('status');
        $bayarIuran->save();

        return redirect()->route('bendahara.verifikasi.kas')->with('success', 'Status berhasil diperbarui');
    }

    public function showDetail($id)
    {
        $breadcrumb = (object)[
            'judul' => 'Bendahara / Verifikasi Kas',
            'list' => '/ Detail'
        ];
        $bayar = BayarIuran::with(['notif', 'warga'])->findOrFail($id);
        return view('bendahara.manage.detailbayar', compact('bayar', 'breadcrumb'));
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
