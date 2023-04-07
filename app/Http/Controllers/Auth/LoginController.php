<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller as Base;
use App\Http\Helpers\JSONresponse;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Base
{
  public function index()
  {
    return  view('auth.login.index', [
      'title' => 'Login'
    ]);
  }

  public function proses(JSONresponse $response, LoginRequest $req, Request $request)
  {
    $valid = $req->validate($request->all());
    if ($valid->fails()) {
      return $response->create(0, $valid->errors()->toArray());
    } else {
      $user = User::where('username', $request->input('username'))
        ->get()
        ->toArray();
      if (!$user) {
        return $response->create(1, 'Username atau Pasword Salah !');
      }
      if (!$user[0]['verified_at']) {
        return $response->create(2, '', '', '/auth/verifikasi' . '/' . $user[0]['email']);
      } else {
        if (Auth::attempt($request->only('username', 'password'))) {
          $request->session()->regenerate();

          return $response->create(2, 'Login Berhasil.<br>mengalihkan ke alaman utama.', '', '/auth/login');
        }
        return $response->create(1, 'Username atau Pasword Salah !');
      }
    }
  }

  public function logout()
  {
    Auth::logout();

    return redirect('/');
  }
}
