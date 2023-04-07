<?php

namespace App\Http\Services;

use App\Models\Lampiran;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class LampiranService
{
  public function store($data)
  {
    $q = Lampiran::create([
      'id_pengajuan' => $data['id_pengajuan'],
      'surat_pengantar' => $data['surat_pengantar'],
      'surat_pernyataan' => $data['surat_pernyataan'],
      'kartu_identitas' => $data['kartu_identitas'],
      'proposal_kegiatan' => $data['proposal_kegiatan'],
      'surat_izin_produksi' => $data['surat_izin_produksi'],
      'tanda_pendaftaran_rekaman' => $data['tanda_pendaftaran_rekaman'],
      'sinopsis_film' => $data['sinopsis_film'],
      'daftar_crew' => $data['daftar_crew'],
    ]);
    return $q;
  }
}
