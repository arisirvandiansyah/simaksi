<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kawasan extends Model
{
  use HasFactory;
  protected $table = 'kawasan';
  protected $fillable = [
    'id_kategori',
    'nama_kawasan',
  ];
}
