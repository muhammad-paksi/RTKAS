<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware\Cek_Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\Admin\AkunController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\KartuKlgController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AlamatController;
use App\Http\Controllers\Admin\PendudukController;

// Route::get('/', function () {
//     return view('admin.dashboard');
// });

Route::middleware(['guest'])->group(function (){
    Route::controller(AuthController::class)->group(function (){
        Route::get('login', 'index')->name('login');
        Route::post('proses_login', 'proses_login')->name('proses_login');
        });
});

// Use Controller Admin


//====== Admin ======
Route::middleware(['auth'])->group(function (){
Route::get('dashboard', [HomeController::class, 'index'])->name('home')->middleware('akunAkses:admin');
Route::get('tables', [AkunController::class, 'rute'])->name('table')->middleware('akunAkses:admin');

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('viewpengumuman')->middleware('akunAkses:admin');
Route::get('/insertpengumuman', [PengumumanController::class, 'insert'])->name('insertpengumuman')->middleware('akunAkses:admin');
Route::post('/storepengumuman', [PengumumanController::class, 'store'])->name('storepengumuman')->middleware('akunAkses:admin');

Route::get('/kartukeluarga', [KartuKlgController::class, 'index'])->name('viewkk')->middleware('akunAkses:admin');
Route::get('/insertkk', [KartuKlgController::class, 'create'])->name('insertkk')->middleware('akunAkses:admin');
Route::post('/storekk', [KartuKlgController::class, 'store'])->name('storekk')->middleware('akunAkses:admin');
Route::get('/editkk{nik_kk}', [KartuKlgController::class, 'edit'])->name('editkk')->middleware('akunAkses:admin');
Route::put('/updatekk{nik_kk}', [KartuKlgController::class, 'update'])->name('updatekk')->middleware('akunAkses:admin'); 
Route::delete('/deletekk{nik_kk}', [KartuKlgController::class, 'destroy'])->name('deletekk')->middleware('akunAkses:admin'); 

Route::get('/viewpenduduk', [PendudukController::class, 'index'])->name('viewpenduduk')->middleware('akunAkses:admin');
Route::get('/insertpenduduk', [PendudukController::class, 'create'])->name('insertpenduduk')->middleware('akunAkses:admin');
Route::post('/storependuduk', [PendudukController::class, 'store'])->name('storependuduk')->middleware('akunAkses:admin');
Route::get('/editwarga/{nik}', [PendudukController::class, 'edit'])->name('editwarga')->middleware('akunAkses:admin');
Route::put('/updatewarga/{nik}', [PendudukController::class, 'update'])->name('updatewarga')->middleware('akunAkses:admin'); 



Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

});

//====== Ketua RT =====
use App\Http\Controllers\Ketuart\HomeControllerKetua;
Route::get('ketuart/dashboard', [HomeControllerKetua::class, 'index'])->name('ketuart/dashboard');












