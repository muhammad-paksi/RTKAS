<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akun;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class AuthController extends Controller
{
    public function index()
    {
        // if (Auth::check()) {
        //     $user = Auth::user();

        //     $redirectRoutes = [
        //         'admin' => 'admin',
        //         'ketuart' => 'ketuart',
        //         'bendahara' => 'bendahara',
        //         'warga' => 'warga',
        //     ];

        //     if (array_key_exists($user->level, $redirectRoutes)) {
        //         return redirect()->intended($redirectRoutes[$user->level]);
        //     }
        // }

        return view('auth.login');
    }

    public function proses_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
    
        $credential = $request->only('username', 'password');
    
        if (Auth::attempt($credential)) {
            $user = Auth::user();
            $redirectRoutes = [
                'admin' => 'admin',
                'ketuart' => 'ketuart',
                'bendahara' => 'bendahara',
                'warga' => 'warga',
            ];
            return redirect()->intended($redirectRoutes[$user->level] ?? '/');
        }
    
        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Pastikan kembali username dan password yang dimasukkan benar!']);
    }
    
    public function logout(Request $request)
    {
        $request->session()->flush();

        Auth::logout();
        return redirect('login');
    }
}