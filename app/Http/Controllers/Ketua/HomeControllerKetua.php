<?php

namespace App\Http\Controllers\Ketua;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeControllerKetua extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'judul' => 'Ketua RT ',
            'list' => '/ Dashboard'
        ];

        return view('ketua.dashboard', compact('breadcrumb'));
    }
}
