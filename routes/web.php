<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware\Cek_Login;
use App\Http\Controllers\FileUploadController;

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

Route::get('/', function () {
        return view('dashboard');
    });
    
    Route::middleware(['guest'])->group(function (){
        Route::controller(AuthController::class)->group(function (){
            Route::get('login', 'index')->name('login');
            Route::post('proses_login', 'proses_login')->name('proses_login');
        });
    });
//file upload
    // Route::get('/', function(){
    //     return view('welcome');
    // });
    Route::get('/file-upload', [FileUploadController::class,'fileUpload']);
    Route::post('/file-upload', [FileUploadController::class,'prosesfileUpload']);
    
// Use Controller Admin
    
    use App\Http\Controllers\Admin\AkunController;
    use App\Http\Controllers\Admin\PengumumanController;
    use App\Http\Controllers\Admin\KartuKlgController;
    use App\Http\Controllers\Admin\HomeController;
    use App\Http\Controllers\Admin\AlamatController;
    use App\Http\Controllers\Admin\PendudukController;
    use App\Http\Controllers\Admin\IuranController;
    use App\Http\Controllers\CoprasController;
    use App\Http\Controllers\Admin\NotifikasiIuranController;

    
    
    

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

Route::get('/viewIuran', [IuranController::class, 'index'])->name('viewIuran')->middleware('akunAkses:admin');
Route::get('/insertIuran', [IuranController::class, 'create'])->name('insertIuran')->middleware('akunAkses:admin');
Route::post('/storeIuran', [IuranController::class, 'store'])->name('storeIuran')->middleware('akunAkses:admin');
Route::get('/editIuran{id}', [IuranController::class, 'edit'])->name('editIuran')->middleware('akunAkses:admin');
Route::put('/updateIuran{id}', [IuranController::class, 'update'])->name('updateIuran')->middleware('akunAkses:admin');
Route::delete('/deleteIuran{id}', [IuranController::class, 'destroy'])->name('deleteIuran')->middleware('akunAkses:admin');

Route::get('/viewNotif', [NotifikasiIuranController::class, 'index'])->name('viewNotif')->middleware('akunAkses:admin');
Route::get('/insertNotifikasi', [NotifikasiIuranController::class, 'create'])->name('insertNotifikasi')->middleware('akunAkses:admin');
Route::post('/storeNotifikasi', [NotifikasiIuranController::class, 'store'])->name('storeNotifikasi')->middleware('akunAkses:admin');
Route::get('/editNotifikasi/{id}', [NotifikasiIuranController::class, 'edit'])->name('editNotifikasi')->middleware('akunAkses:admin');
Route::put('/updateNotifikasi{id}', [NotifikasiIuranController::class, 'update'])->name('updateNotifikasi')->middleware('akunAkses:admin');




Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

});

//====== Ketua RT =====
Route::get('/copras', [CoprasController::class, 'index']);
Route::get('/spk', [CoprasController::class, 'spk']);
Route::get('/copras/coba', [CoprasController::class, 'coba']);

//Route untuk kriteria SPK
Route::get('/copras/tambah_kriteria', [CoprasController::class, 'tambah_jumlah_krit']);
Route::POST('/copras/tambah_kriteria2', [CoprasController::class, 'tambah_krit']);
Route::POST('/copras/tambah_kriteria2/simpan', [CoprasController::class, 'tambah_krit_simpan']);
Route::POST('/copras/hapus_kriteria', [CoprasController::class, 'hapus_krit']);

//Route untuk alternatif SPK
Route::get('/copras/tambah_alt', [CoprasController::class, 'tambah_jumlah_alt']);
Route::POST('/copras/tambah_alt2', [CoprasController::class, 'tambah_alt']);
Route::POST('/copras/tambah_alt2/simpan', [CoprasController::class, 'tambah_alt_simpan']);
Route::POST('/copras/hapus_alternatif', [CoprasController::class, 'hapus_alt']);

//Route untuk edit dan simpan matriks penilaian SPK
Route::get('/copras/sunting_penilaian', [CoprasController::class, 'sunting_penilaian']);
Route::POST('/copras/sunting_penilaian/simpan', [CoprasController::class, 'simpan_sunting_penilaian']);












