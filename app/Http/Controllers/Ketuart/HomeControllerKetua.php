<?php

namespace App\Http\Controllers\Ketuart;

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

        return view('ketuart.dashboard', compact('breadcrumb'));
    }
}
