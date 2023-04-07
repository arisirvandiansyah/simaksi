<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
  use HasFactory;
  protected $table = 'pengajuan';
  protected $fillable = [
    'tgl_dikirim',
    'tgl_update',
    'id_user',
    'jenis_pengajuan',
    'status_pengajuan',
    'id_kegiatan',
    'id_kawasan',
    'judul_kegiatan',
    'no_surat',
    'tgl_surat',
    'perihal_surat',
    'penandatangan_surat',
    'tgl_mulai',
    'tgl_selesai',
    'jml_pengikut',
    'tgl_usulan_presentase',
  ];
}
