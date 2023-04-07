<?php

namespace Database\Seeders;

use App\Models\Kawasan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KawasanSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Kawasan::create([
      'id_kategori' => 1,
      'nama_kawasan' => 'Bukit Bungkuk',
    ]);
    Kawasan::create([
      'id_kategori' => 1,
      'nama_kawasan' => 'Pulau Berkey',
    ]);
    Kawasan::create([
      'id_kategori' => 2,
      'nama_kawasan' => 'Tjg Padang',
    ]);
    Kawasan::create([
      'id_kategori' => 2,
      'nama_kawasan' => 'Tasik Serkap',
    ]);
    Kawasan::create([
      'id_kategori' => 2,
      'nama_kawasan' => 'Plg Sebanga',
    ]);
    Kawasan::create([
      'id_kategori' => 2,
      'nama_kawasan' => 'Balai Raja',
    ]);
    Kawasan::create([
      'id_kategori' => 2,
      'nama_kawasan' => 'Kerumutan',
    ]);
    Kawasan::create([
      'id_kategori' => 2,
      'nama_kawasan' => 'Bukit Batu',
    ]);
    Kawasan::create([
      'id_kategori' => 2,
      'nama_kawasan' => 'Giam Siak Kecil',
    ]);
    Kawasan::create([
      'id_kategori' => 2,
      'nama_kawasan' => 'Tasik Belat',
    ]);
    Kawasan::create([
      'id_kategori' => 2,
      'nama_kawasan' => 'Tasik Besar Serkap',
    ]);
    Kawasan::create([
      'id_kategori' => 2,
      'nama_kawasan' => 'Bukit Rimbang Bukit Baling',
    ]);
    Kawasan::create([
      'id_kategori' => 3,
      'nama_kawasan' => 'Buluh Cina',
    ]);
    Kawasan::create([
      'id_kategori' => 3,
      'nama_kawasan' => 'Sungai Dumai',
    ]);
    Kawasan::create([
      'id_kategori' => 3,
      'nama_kawasan' => 'Muka Kuning',
    ]);
    Kawasan::create([
      'id_kategori' => 4,
      'nama_kawasan' => 'Pulau Rempang',
    ]);
    Kawasan::create([
      'id_kategori' => 5,
      'nama_kawasan' => 'Zamrud',
    ]);
  }
}
