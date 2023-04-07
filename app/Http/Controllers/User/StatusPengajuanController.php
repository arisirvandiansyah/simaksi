<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller as Base;
use App\Http\Services\PengajuanService;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;

class StatusPengajuanController extends Base
{
  public function index(PengajuanService $pengajuan)
  {
    $data = $pengajuan->getWhere('pengajuan.id_user', Auth::user()->id);
    return view('users.user.statusPengajuan.index', [
      'title' => 'Status Pengajuan',
      'data' => $data,
    ]);
  }
}
