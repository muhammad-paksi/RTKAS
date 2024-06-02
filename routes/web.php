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

    Route::controller(AuthController::class)->group(function (){
    Route::get('login', 'index')->name('login');
    Route::post('proses_login', 'proses_login')->name('proses_login');
    });
// Route::get('/login', [AuthController::class, 'index'])->name('login');
// Route::post('/proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Use Controller Admin



//====== Admin ======
// Route::middleware(['auth'])->group(function (){
// Route::get('dashboard', [HomeController::class, 'index'])->name('home')->middleware('userAkses:admin');
Route::get('dashboard', [HomeController::class, 'index'])->name('home');
Route::get('tables', [AkunController::class, 'rute'])->name('table');

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('viewpengumuman');
Route::get('/insertpengumuman', [PengumumanController::class, 'insert'])->name('insertpengumuman');
Route::post('/storepengumuman', [PengumumanController::class, 'store'])->name('storepengumuman');

Route::get('/kartukeluarga', [KartuKlgController::class, 'index'])->name('viewkk');
Route::get('/insertkk', [KartuKlgController::class, 'create'])->name('insertkk');
Route::post('/storekk', [KartuKlgController::class, 'store'])->name('storekk'); 
Route::get('/editkk{nik_kk}', [KartuKlgController::class, 'edit'])->name('editkk');
Route::put('/updatekk{nik_kk}', [KartuKlgController::class, 'update'])->name('updatekk'); 
Route::delete('/deletekk{nik_kk}', [KartuKlgController::class, 'destroy'])->name('deletekk'); 


// Route::get('/alamat', [AlamatController::class, 'index'])->name('viewalamat');
// Route::get('/insertalamat', [AlamatController::class, 'create'])->name('insertalamat');
// Route::post('/storealamat', [AlamatController::class, 'store'])->name('storealamat');

Route::get('/viewpenduduk', [PendudukController::class, 'index'])->name('viewpenduduk');
Route::get('/insertpenduduk', [PendudukController::class, 'create'])->name('insertpenduduk');
Route::post('/storependuduk', [PendudukController::class, 'store'])->name('storependuduk');
Route::get('/editwarga/{nik}', [PendudukController::class, 'edit'])->name('editwarga');
Route::put('/updatewarga/{nik}', [PendudukController::class, 'update'])->name('updatewarga'); 
// });



// Route::get('/', function () {
//     return view('admin.dashboard');
// });

// Route::group(['middleware' => ['auth', 'redirect_if_not_authorized']], function(){
//             Route::get('/dashboard/admin', [HomeController::class, 'index'])->name('dashboard.ketuart');
//             Route::get('/dashboard/ketuart', [HomeController::class, 'index'])->name('dashboard.ketuart');
//             Route::get('/dashboard/warga', [HomeController::class, 'index'])->name('dashboard.warga');
//             Route::get('/dashboard/bendahara', [HomeController::class, 'index'])->name('dashboard.bendahara');
//         });
        

    // Route::get('/admin', [HomeController::class, 'redirectToDashboard'])->name('dashboard');



 
        
//     });
//     Route::group(['middleware' => ['cek_login:ketuart']], function(){
//         Route::get('/dashboard', [HomeController::class, 'index'])->name('home');   
        
//     });
//     Route::group(['middleware' => ['cek_login:warga']], function(){
//         Route::get('/dashboard', [HomeController::class, 'index'])->name('home');   
        
//     });
//     Route::group(['middleware' => ['cek_login:bendahara']], function(){
//         Route::get('/dashboard', [HomeController::class, 'index'])->name('home');   
        
//     });






