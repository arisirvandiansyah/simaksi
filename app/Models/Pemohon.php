<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pemohon extends Model
{
  use HasFactory;
  protected $table = 'pemohon';
  protected $fillable = [
    'id_user',
    'nama_pemohon',
    'no_identitas',
    'no_telp',
    'alamat',
    'pekerjaan',
    'instansi',
  ];
}
