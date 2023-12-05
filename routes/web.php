<?php


use Illuminate\Routing\Router;
use App\Http\Controllers\ProsesScan;
use App\Http\Controllers\prosescetak;
use App\Http\Controllers\prosesnilai;
use App\Http\Controllers\Tambahadmin;
use App\Http\Controllers\ProsesLogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tambahpeserta;
use App\Http\Controllers\prosesgenerate;
use App\Http\Controllers\Tambahenkripsi;
use App\Http\Controllers\Tambahtamplate;
use App\Http\Controllers\Tambahpelatihan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




//-------------------- Routes For Admin-------------------------------------------



Route::get('/dashboard/Admin/layouts/RSA', [Tambahenkripsi::class,'index'])->middleware('auth');
Route::get('/dashboard/Admin/layouts/Tambahenkripsi', [Tambahenkripsi::class,'Tambahenkripsi']);
Route::post('/dashboard/Admin/layouts/Tambahenkripsi', [Tambahenkripsi::class,'Tambahenkripsi']);
Route::post('/SimpanEnkripsi', [Tambahenkripsi::class,'enkripsi']);
// ---------------------------------------Data Admin-----------------------------------------------------------------
Route::get('/dashboard/Admin/layouts/DataAdmin', [Tambahadmin::class, 'index'])->middleware('auth');
Route::get('/dashboard/Admin/layouts/DataAdmin/Tambahadmin', [Tambahadmin::class, 'Tambahadmin']);
Route::post('/dashboard/Admin/layouts/DataAdmin/Tambahadmin', [Tambahadmin::class, 'store']);
Route::get('/dashboard/Admin/layouts/DataAdmin/{id}', [Tambahadmin::class, 'destroy']);
Route::get('/dashboard/Admin/layouts/DataAdmin/generate{id}', [Tambahadmin::class, 'generate']);

// ---------------------------------------Data Jenis Pelatihan-------------------------------------------------------
Route::get('/dashboard/Admin/layouts/DataJenisPelatihan', [Tambahpelatihan::class, 'index'])->middleware('auth');
Route::get('/dashboard/Admin/layouts/DataJenisPelatihan/Tambahpelatihan', [Tambahpelatihan::class,'Tambahpelatihan']);
Route::post('/dashboard/Admin/layouts/DataJenisPelatihan/Tambahpelatihan', [Tambahpelatihan::class,'store']);
Route::get('/dashboard/Admin/layouts/DataJenisPelatihan/{id}', [Tambahpelatihan::class, 'destroy']);
Route::get('/dashboard/Admin/layouts/DataJenisPelatihan/Tampil/{id}',[Tambahpelatihan::class,'edit']);
Route::post('/dashboard/Admin/layouts/DataJenisPelatihan/{id}',[Tambahpelatihan::class,'update']);
Route::get('/Gagal/Jp',[Tambahpelatihan::class,'Gagal']);
// ---------------------------------------Data Peserta Pelatihan------------------------------------------------------
Route::get('/dashboard/Admin/layouts/DataPeserta',[Tambahpeserta::class,'index'])->middleware('auth');
Route::get('/dashboard/Admin/layouts/DataPeserta/Tambahpeserta',[Tambahpeserta::class,'Tambahpeserta']);
Route::post('/dashboard/Admin/layouts/DataPeserta/Tambahpeserta',[Tambahpeserta::class,'store']);
Route::get('/dashboard/Admin/layouts/DataPeserta/{id}',[Tambahpeserta::class,'destroy']);
Route::get('/dashboard/Admin/layouts/DataPeserta/Tampil/{id}',[Tambahpeserta::class,'edit']);
Route::post('/dashboard/Admin/layouts/DataPeserta/{id}',[Tambahpeserta::class,'update']);
Route::get('/Gagal',[Tambahpeserta::class,'Gagal']);

// ---------------------------------------Data Absensi dan Nilai------------------------------------------------------
Route::get('/dashboard/Admin/layouts/DataNilaidanAbsensi', [prosesnilai::class,'index'])->middleware('auth');
Route::get('/dashboard/Admin/layouts/DataNilaidanAbsensi/{id}', [prosesnilai::class,'destroy']);
Route::get('/dashboard/Admin/layouts/DataNilaidanAbsensi/Lengkapidata/{id}', [prosesnilai::class,'Lengkapidata']);
Route::post('/dashboard/Admin/layouts/DataNilaidanAbsensi/Lengkapidata/{id}', [prosesnilai::class,'Lengkapidata']);
Route::post('/dashboard/Admin/layouts/DataNilaidanAbsensi/Lengkapidata/Edit/{id}', [prosesnilai::class,'update']);


// ---------------------------------------Data Cetak Sertifikat------------------------------------------------------
Route::get('/dashboard/Admin/layouts/DataCetakSertifikat', [prosescetak::class,'index'])->middleware('auth');
Route::get('/dashboard/Admin/layouts/DataCetakSertifikat/{id}', [prosescetak::class,'destroy']);
Route::post('/dashboard/Admin/layouts/DataNilaidanAbsensi/Lengkapidata/Editenkrip/{id}', [prosescetak::class,'updateenkrip']);
Route::get('/dashboard/Admin/layouts/Sertifikat/detail/{id}', [prosescetak::class,'detail']);


// ---------------------------------------Generate Sertifikat------------------------------------------------------
Route::get('/dashboard/Admin/layouts/GenerateSertifikat/{id}', [prosesgenerate::class,'index'])->middleware('auth');
Route::get('/dashboard/Admin/layouts/Sertifikat/{id}', [prosesgenerate::class,'generatepdf']);
Route::get('/dashboard/Admin/layouts/Sertifikat/biru/{id}', [prosesgenerate::class,'biru']);
Route::get('/dashboard/Admin/layouts/Sertifikat/hijau/{id}', [prosesgenerate::class,'hijau']);
Route::get('/dashboard/Admin/layouts/Sertifikat/ungu/{id}', [prosesgenerate::class,'ungu']);
Route::get('/dashboard/Admin/layouts/Sertifikat/orange/{id}', [prosesgenerate::class,'orange']);



// ---------------------------------------TamplateSertifikat----------------------------------------------------------
Route::get('/dashboard/Admin/layouts/Tamplatesertifikat',[Tambahtamplate::class,'index'])->middleware('auth');
Route::get('/dashboard/Admin/layouts/Tamplatesertifikat/Tambahtamplate',[Tambahtamplate::class,'Tambahtamplate']);
Route::post('/dashboard/Admin/layouts/Tamplatesertifikat/Tambahtamplate',[Tambahtamplate::class,'store']);
Route::get('/dashboard/Admin/layouts/Tamplatesertifikat{id}', [Tambahtamplate::class,'destroy']);
//-------------------- Routes For Public------------------------------------------------------------------------------

Route::get('/', function () {
    return view('dashboard.Umum.index');
});
Route::get('/dashboard/Umum/layouts/Panduan', function () {
    return view('dashboard.Umum.layouts.Panduan');
});
Route::get('/dashboard/Umum/layouts/Kontak', function () {
    return view('dashboard.Umum.layouts.Kontak');
});



Route::get('/login',[ProsesLogin::class,'index'])->name('login');
Route::post('/Masuk',[ProsesLogin::class,'Masuk']);
Route::get('/dashboard/Admin', [Tambahadmin::class, 'dashboard'])->middleware('auth');
Route::get('/logout', [ProsesLogin::class, 'logout'])->middleware('auth');




Route::get('/Scan',[ProsesScan::class,'scan']);
Route::post('/Scan',[ProsesScan::class,'scan']);
Route::post('/Dekripsi',[ProsesScan::class,'Dekripsi']);
Route::post('/validasi',[ProsesScan::class,'validasiQrcode'])->name('validasi');
Route::get('/detail',[ProsesScan::class,'detaildata'])->name('detail');
Route::get('/Cari',[ProsesScan::class,'Cari']);
Route::get('/CariSertifikat',[ProsesScan::class,'CariSertifikat']);
Route::get('/dashboard/Umum/layouts/Sertifikat/{id}',[ProsesScan::class,'Sertifikat']);




