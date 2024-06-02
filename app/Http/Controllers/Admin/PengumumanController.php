<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(){
        $pengumuman = Pengumuman::orderBy('created_at', 'DESC')->get();

        $breadcrumb = (object)[
            'judul' => 'Admin ',
            'list' => '/ Pengumuman'
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
        ]);
    
        Pengumuman::create($request->only(['judul_pengumuman', 'isi_pengumuman']));
    
        return redirect()->route('viewpengumuman')->with('success', 'Pengumuman Telah Ditambahkan');
    }
    
}
