<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
  static function store($request)
  {
    $user = User::create([
      'username' => $request['username'],
      'email' => $request['email'],
      'password' => Hash::make($request['password']),
      'verification_code' => rand(100000, 999999),
    ]);
    return $user;
  }
}
