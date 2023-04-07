<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lampiran extends Model
{
  use HasFactory;
  protected $table = 'lampiran';
  protected $fillable = [
    'id_pengajuan',
    'surat_pengantar',
    'surat_pernyataan',
    'kartu_identitas',
    'proposal_kegiatan',
    'surat_izin_produksi',
    'tanda_pendaftaran_rekaman',
    'sinopsis_film',
    'daftar_crew',
  ];
}
