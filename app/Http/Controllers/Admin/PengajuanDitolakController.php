<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Base;

class PengajuanDitolakController extends Base
{
  public function index()
  {
    return view('users.admin.pengajuanDitolak.index', [
      'title' => 'Pengajuan Ditolak'
    ]);
  }
}
