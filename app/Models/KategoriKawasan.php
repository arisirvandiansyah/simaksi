<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKawasan extends Model
{
  use HasFactory;
  protected $table = 'kategori_kawasan';
  protected $fillable = [
    'nama_kategori',
    'exerp_kategori'
  ];
}
