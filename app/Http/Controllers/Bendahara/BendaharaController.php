<?php

namespace App\Http\Controllers\Bendahara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BendaharaController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'judul' => 'Bendahara ',
            'list' => 'Dashboard'
        ];

        return view('bendahara.dashboard', compact('breadcrumb'));
    }
}
