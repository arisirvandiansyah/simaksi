<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller as Base;
use App\Models\Pengumuman;

class BerandaController extends Base
{
  public function index()
  {
    $pengumuman = Pengumuman::orderBy('id_pengumuman', 'DESC')->get();
    return view('users.user.beranda.index', [
      'title' => 'Beranda',
      'data' => $pengumuman
    ]);
  }
}
