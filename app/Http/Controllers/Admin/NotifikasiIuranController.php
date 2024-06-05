<?php

namespace App\Http\Controllers\Admin;

use App\Models\NotifikasiIuran;
use App\Models\Iuran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotifikasiIuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifiuran = NotifikasiIuran::all();

        $breadcrumb = (object)[
            'judul' => 'Admin ',
            'list' => '/ Data Notifikasi Iuran'
        ];

        return view('admin.manage.notifIuran', compact('notifiuran', 'breadcrumb'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $iuran = Iuran::select('id_iuran', 'nama_iuran')->get();
        $breadcrumb = (object)[
            'judul' => 'Admin / Data Notifikasi Iuran',
            'list' => '/ Insert Notifikasi Iuran'
        ];

        return view('admin.manage.insertNotifikasi', compact('iuran','breadcrumb'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string',
        'id_iuran' => 'required|numeric',
        'nominal' => 'required|numeric', 
        'informasi' => 'nullable|string', 
        'tanggal' => 'required|date',
    ]);

    NotifikasiIuran::create($request->only(['judul', 'id_iuran', 'nominal', 'informasi', 'tanggal']));

    return redirect()->route('viewNotif')->with('success', 'Notifikasi telah ditambahkan');
}


    /**
     * Display the specified resource.
     */
    public function show(NotifikasiIuran $notifikasiIuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NotifikasiIuran $notifikasiIuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NotifikasiIuran $notifikasiIuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NotifikasiIuran $notifikasiIuran)
    {
        //
    }
}
