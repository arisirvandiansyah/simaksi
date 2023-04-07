<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller as Base;

class PerpanjanganSimaksiController extends Base
{
  public function index()
  {
    return view('users.user.perpanjanganSimaksi.index', [
      'title' => 'Formulir Perpanjangan SIMAKSI'
    ]);
  }
}
