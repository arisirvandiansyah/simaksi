<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Base;
use App\Http\Helpers\JSONresponse;
use App\Http\Services\PengajuanService;

class PengajuanDiprosesController extends Base
{
  public function index()
  {
    return view('users.admin.pengajuanDiproses.index', [
      'title' => 'Pengajuan Diproses'
    ]);
  }

  public function tabel(PengajuanService $pengajuan, JSONresponse $response)
  {
    $data = $pengajuan->getWhere('status_pengajuan', 'Sedang Diproses');
    return $response->create(
      1,
      '',
      view('users.admin.pengajuanDiproses.part.tabel', [
        'data' => $data
      ])->render(),
    );
  }
}
