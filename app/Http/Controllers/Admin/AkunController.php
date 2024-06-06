<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akun;
class AkunController extends Controller
{
    public function index(){
        $judul = 'Tabel Akun';
        $user = Akun::all();
        return view('admin.akun', ['data' => $user, 'judul'=>$judul]); 
    }

    public function rute(){
        $judul = 'Tabel';
        return view('admin.akun', ['judul'=>$judul]);    }

}
