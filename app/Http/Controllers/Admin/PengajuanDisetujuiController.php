<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Base;

class PengajuanDisetujuiController extends Base
{
  public function index()
  {
    return view('users.admin.pengajuanDisetujui.index', [
      'title' => 'Pengajuan Disetujui'
    ]);
  }
}
