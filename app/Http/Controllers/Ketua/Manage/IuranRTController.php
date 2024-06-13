<?php

namespace App\Http\Controllers\Ketua\Manage;

use App\Models\Iuran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IuranRTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iuran = Iuran::all();

        $breadcrumb = (object)[
            'judul' => 'Ketua RT ',
            'list' => 'Data Iuran'
        ];

        return view('ketua.manage.iuran.iuran', compact('iuran', 'breadcrumb'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumb = (object)[
            'judul' => 'Ketua RT / Data Iuran',
            'list' => '/ Insert Iuran'
        ];

        return view('ketua.manage.iuran.insertIuran', compact('breadcrumb'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_iuran' => 'required|string',
            'tanggal' => 'required|date'
        ]);

        Iuran::create($request->only(['nama_iuran', 'tanggal']));

        return redirect()->route('ketua.iuran')->with('success', 'Iuran telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Iuran $iuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id_iuran)
    {
        if (!preg_match('/^\d+$/', $id_iuran)) {
            // Tambahkan logika untuk menangani kesalahan validasi
            return redirect()->back()->withErrors(['id_iuran' => 'Iuran tidak valid.']);
        }
        $iuran = Iuran::findOrFail($id_iuran);
        
        $breadcrumb = (object)[
            'judul' => 'Ketua RT / Kartu Keluarga /',
            'list' => ' Edit Kartu Keluarga'
        ];

        return view('ketua.manage.iuran.editIuran', compact('iuran', 'breadcrumb'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id_iuran)
    {
        $validateData=  $request->validate([
            'nama_iuran' => 'required|string',
            'tanggal' => 'required|date'
        ]);

        $iuran = Iuran::findOrFail($id_iuran);

        $iuran->update($validateData);

        return redirect()->route('ketua.iuran')->with('success', 'Iuran telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id_iuran)
    {
        $iuran = Iuran::findOrFail($id_iuran);
        $iuran->delete();

        return redirect()->route('viewIuran')->with('success', 'Kartu Keluarga telah didelete');
    }
}
