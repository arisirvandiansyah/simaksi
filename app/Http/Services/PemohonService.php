<?php

namespace App\Http\Services;

use App\Models\Pemohon;

class PemohonService
{
  static function store($id, $request)
  {
    $pemohon = Pemohon::create([
      'id_user' => $id,
      'nama_pemohon' => $request['nama_lengkap'],
      'no_identitas' => $request['no_identitas'],
      'no_telp' => $request['no_telepon'],
      'alamat' => $request['alamat'],
      'pekerjaan' => $request['pekerjaan'],
      'instansi' => $request['instansi'],
    ]);
    return $pemohon;
  }
}
