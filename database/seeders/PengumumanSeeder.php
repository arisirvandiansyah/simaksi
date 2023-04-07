<?php

namespace Database\Seeders;

use App\Models\Pengumuman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengumumanSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    for ($i = 0; $i <= 10; $i++) {
      Pengumuman::create([
        'judul_pengumuman' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque, fuga.',
        'isi_pengumuman' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ea molestias illo vero magnam omnis provident laborum nesciunt beatae eos aspernatur necessitatibus incidunt repudiandae maxime cumque assumenda nam, ad eligendi culpa accusamus ipsa odit rerum officiis velit. Ducimus nesciunt dolor cumque placeat ullam vero reiciendis exercitationem voluptates. Neque, dolores molestias!',
      ]);
    }
  }
}
