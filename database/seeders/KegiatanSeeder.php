<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Kegiatan::create([
      'nama_kegiatan' => 'Penelitian & Pengembangan'
    ]);
    Kegiatan::create([
      'nama_kegiatan' => 'Ilmu Pengetahuan & Pendidikan'
    ]);
    Kegiatan::create([
      'nama_kegiatan' => 'Pembuatan Film / Video'
    ]);
    Kegiatan::create([
      'nama_kegiatan' => 'Jurnalistik / Pengambilan Gambar'
    ]);
    Kegiatan::create([
      'nama_kegiatan' => 'Ekspedisi'
    ]);
  }
}
