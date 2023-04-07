<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Base;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DataUserController extends Base
{
  public function index()
  {
    $data = User::join('pemohon', 'pemohon.id_user', 'user.id')
      ->get();
    return view('users.admin.dataUser.index', [
      'title' => 'Data User',
      'data' => $data,
    ]);
  }
}
