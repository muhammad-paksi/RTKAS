<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        
    public function index()
    {
        $breadcrumb = (object)[
            'judul' => 'Admin ',
            'list' => 'Dashboard'
        ];
        $activemenu = 'dashboard';

        return view('admin.dashboard', ['breadcrumb'=>$breadcrumb, 'activemenu' => $activemenu]);
    }
}
