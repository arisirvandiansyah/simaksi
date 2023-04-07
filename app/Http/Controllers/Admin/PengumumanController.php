<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Base;
use App\Models\Pengumuman;

class PengumumanController extends Base
{
  public function index()
  {
    $data = Pengumuman::all();
    return view('users.admin.pengumuman.index', [
      'title' => 'Data Pengumuman',
      'data' => $data,
    ]);
  }
  public function loadTabel()
  {
    $data = Pengumuman::all();
    return response()->json([
      'data' => view('users.admin.pengumuman.tabel', [
        'data' => $data
      ])->render(),
    ]);
  }

  public function loadAddForm()
  {
    return response()->json([
      'data' => view('users.admin.pengumuman.add')->render(),
    ]);
  }

  public function up($id)
  {
    $data = Pengumuman::where('id_pengumuman', $id)->get();
    return response()->json([
      'data' => view('users.admin.pengumuman.edit', [
        'data' => $data,
      ])->render(),
    ]);
  }
}
