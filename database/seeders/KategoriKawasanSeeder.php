<?php

namespace Database\Seeders;

use App\Models\KategoriKawasan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriKawasanSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    KategoriKawasan::create([
      'nama_kategori' => 'Cagar Alam',
      'exerp_kategori' => 'C.A'
    ]);
    KategoriKawasan::create([
      'nama_kategori' => 'Suaka Margasatwa',
      'exerp_kategori' => 'S.M'
    ]);
    KategoriKawasan::create([
      'nama_kategori' => 'Taman Wisata Alam',
      'exerp_kategori' => 'T.W.A'
    ]);
    KategoriKawasan::create([
      'nama_kategori' => 'Taman Buru',
      'exerp_kategori' => 'T.B'
    ]);
    KategoriKawasan::create([
      'nama_kategori' => 'Taman Nasional',
      'exerp_kategori' => 'T.N'
    ]);
  }
}
