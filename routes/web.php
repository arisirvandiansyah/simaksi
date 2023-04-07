<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataUserController;
use App\Http\Controllers\Admin\PengajuanDiprosesController;
use App\Http\Controllers\Admin\PengajuanDisetujuiController;
use App\Http\Controllers\Admin\PengajuanDitolakController;
use App\Http\Controllers\Admin\PengajuanMasukController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\File\FileController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\User\BerandaController;
use App\Http\Controllers\User\PenerbitanSimaksiController;
use App\Http\Controllers\User\PerpanjanganSimaksiController;
use App\Http\Controllers\User\StatusPengajuanController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['is.guest'])->group(function () {
  Route::get('/', function () {
    return redirect()->to('auth/login');
  });
  Route::get('/auth', [AuthController::class, 'index']);
  Route::get('/auth/login', [LoginController::class, 'index'])->name('index.login');
  Route::post('/auth/login/proses', [LoginController::class, 'proses'])->name('submit.login');

  Route::get('/auth/register', [RegisterController::class, 'index'])->name('index.registrasi');
  Route::post('/auth/register/proses', [RegisterController::class, 'store'])->name('submit.register');
  Route::get('/auth/verifikasi/{email}', [VerificationController::class, 'index']);
  Route::post('/auth/verifikasi/proses', [VerificationController::class, 'verify'])->name('verify.code');
  Route::post('/auth/verifikasi/resend', [VerificationController::class, 'resend'])->name('resend.verification');
});

Route::middleware(['auth'])->group(function () {
  // Route::get('/stream/{username}/{id}/{file}', [FileController::class, 'stream']);
  Route::get('/my-profil', [ProfilController::class, 'index'])->name('index.my.profil');
  Route::get('/auth/logout', [LoginController::class, 'logout'])->name('logout');

  Route::get('/dashboard', [DashboardController::class, 'index'])->name('index.dashboard');

  Route::get('/penganjuan-masuk', [PengajuanMasukController::class, 'index'])->name('index.pengajuan.masuk');
  Route::get('/penganjuan-masuk/tabel', [PengajuanMasukController::class, 'tabel']);
  Route::post('/penganjuan-masuk/proses-pengajuan', [PengajuanMasukController::class, 'update'])->name('submit.proses');

  Route::get('/penganjuan-diproses', [PengajuanDiprosesController::class, 'index'])->name('index.pengajuan.diproses');
  Route::get('/penganjuan-diproses/tabel', [PengajuanDiprosesController::class, 'tabel']);

  Route::get('/penganjuan-ditolak', [PengajuanDitolakController::class, 'index'])->name('index.pengajuan.ditolak');

  Route::get('/penganjuan-disetujui', [PengajuanDisetujuiController::class, 'index'])->name('index.pengajuan.disetujui');
  Route::get('/data-user', [DataUserController::class, 'index'])->name('index.data.user');

  Route::get('/data-pengumuman', [PengumumanController::class, 'index'])->name('index.pengumuman');
  Route::get('/data-pengumuman/tabel', [PengumumanController::class, 'loadTabel']);
  Route::get('/data-pengumuman/add', [PengumumanController::class, 'loadAddForm']);
  Route::post('/data-pengumuman/edit/{id}', [PengumumanController::class, 'up']);

  Route::get('/beranda', [BerandaController::class, 'index'])->name('index.beranda');
  Route::get('/status-pengajuan', [StatusPengajuanController::class, 'index'])->name('index.status.pengajuan');

  Route::get('/formulir-penerbitan-simaksi', [PenerbitanSimaksiController::class, 'index'])->name('index.penerbitan.simaksi');
  Route::get('/formulir-penerbitan-simaksi/load-upload', [PenerbitanSimaksiController::class, 'loadUploadForm']);
  Route::get('/formulir-penerbitan-simaksi/load-kawasan', [PenerbitanSimaksiController::class, 'loadKawasan']);
  Route::post('/formulir-penerbitan-simaksi/submit-formulir', [PenerbitanSimaksiController::class, 'store'])->name('submit.penerbitan');

  Route::get('/formulir-perpanjangan-simaksi', [PerpanjanganSimaksiController::class, 'index'])->name('index.perpanjangan.simaksi');
});
