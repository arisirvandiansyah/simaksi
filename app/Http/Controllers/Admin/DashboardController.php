<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Base;
use App\Http\Services\PengajuanService;

class DashboardController extends Base
{
  public function index(PengajuanService $pengajuan)
  {
    $masuk = $pengajuan->getWhere('status_pengajuan', 'Menunggu Konfirmasi');
    return view('users.admin.dashboard.index', [
      'title' => 'Dashboard',
      'masuk' => $masuk,
    ]);
  }
}
