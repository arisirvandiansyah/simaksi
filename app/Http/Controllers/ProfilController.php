<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Base;
use App\Http\Services\UserService;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Base
{
  public function index(UserService $user)
  {
    if (Auth::user()->role === 'admin') {
    } else {
    }
    return view('layouts.myProfil.index', [
      'title' => 'My Profil'
    ]);
  }
}
