<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Base;
use App\Http\Helpers\JSONresponse;
use App\Http\Services\PengajuanService;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanMasukController extends Base
{
  public function index()
  {
    return view('users.admin.pengajuanMasuk.index', [
      'title' => 'Pengajuan Masuk'
    ]);
  }

  public function tabel(PengajuanService $pengajuan, JSONresponse $response)
  {
    $data = $pengajuan->getWhere('status_pengajuan', 'Menunggu Konfirmasi');
    return $response->create(
      '',
      '',
      view('users.admin.pengajuanMasuk.part.tabel', [
        'data' => $data
      ])->render(),
    );
  }

  public function update(PengajuanService $pengajuan, JSONresponse $response, Request $request)
  {
    $q = $pengajuan->upWhere('id_pengajuan', $request->input('id'), ['status_pengajuan' => 'Sedang Diproses']);
    return $response->create('', 'Pengajuan telah dipindahkan kedalam antrian proses.');
  }
}
