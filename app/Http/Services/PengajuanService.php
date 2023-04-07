<?php

namespace App\Http\Services;

use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;

class PengajuanService
{
  public function store($request)
  {
    $q =  Pengajuan::create([
      'id_user' => Auth::user()->id,
      'id_kegiatan' => $request['kegiatan'],
      'id_kawasan' => $request['kawasan'],
      'judul_kegiatan' => $request['judul_kegiatan'],
      'no_surat' => $request['no_surat'],
      'tgl_surat' => $request['tgl_surat'],
      'perihal_surat' => $request['perihal_surat'],
      'penandatangan_surat' => $request['penandatangan_surat'],
      'tgl_mulai' => $request['tgl_mulai'],
      'tgl_selesai' => $request['tgl_selesai'],
      'jml_pengikut' => $request['jml_pengikut'],
      'tgl_usulan_presentase' => $request['tgl_usulan_presentase'],
    ]);
    return $q;
  }

  public function getWhere($column, $input)
  {
    $q = Pengajuan::where($column, $input)
      ->join('user', 'pengajuan.id_user', 'user.id')
      ->join('pemohon', 'user.id', 'pemohon.id_user')
      ->join('kegiatan', 'pengajuan.id_kegiatan', 'kegiatan.id_kegiatan')
      ->join('kawasan', 'pengajuan.id_kawasan', 'kawasan.id_kawasan')
      ->join('kategori_kawasan', 'kawasan.id_kategori', 'kategori_kawasan.id_kategori')
      ->join('lampiran', 'pengajuan.id_pengajuan', 'lampiran.id_pengajuan')
      ->orderBy('pengajuan.created_at', 'ASC')
      ->get();
    return $q;
  }

  public function upWhere($column, $input, $data)
  {
    $q = Pengajuan::where($column, $input)
      ->update($data);
    return $q;
  }
}
