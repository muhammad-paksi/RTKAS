<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(){
        $pengumuman = Pengumuman::orderBy('created_at', 'DESC')->get();

        $breadcrumb = (object)[
            'judul' => 'Admin ',
            'list' => 'Pengumuman'
        ];

        return view('admin.manage.pengumuman', compact('pengumuman', 'breadcrumb'));
    }


    public function insert(){
        $breadcrumb = (object)[
            'judul' => 'Admin / Pengumuman /',
            'list' => ' Insert Pengumuman'
        ];

        return view('admin.manage.insertPengumuman', ['breadcrumb' =>$breadcrumb]);
    }

    public function store(Request $request){
        
        $request->validate([
            'judul_pengumuman' => 'required|string|max:255',
            'isi_pengumuman' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal' => 'required|date'
        ]);


        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = $file->store('public/pengumuman');
            $filename = basename($path);

        } else {
            $filename = null;
        }

        // Menyimpan data ke database
        Pengumuman::create([
            'judul_pengumuman' => $request->judul_pengumuman,
            'isi_pengumuman' => $request->isi_pengumuman,
            'gambar' => $filename,
            'tanggal' => $request->tanggal,
        ]);

    
        
        return redirect()->route('viewpengumuman')->with('success', 'Pengumuman Telah Ditambahkan');
        }
        
        public function destroy(int $id)
        {
            $pengumuman = Pengumuman::findOrFail($id);
            $pengumuman->delete();

        return redirect()->route('viewpengumuman')->with('success', 'penduduk telah didelete');
        }
}
