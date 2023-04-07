<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller as Base;
use App\Http\Helpers\JSONresponse;
use App\Http\Services\PemohonService;
use App\Http\Requests\RegisterRequest;
use App\Http\Services\EmailService;
use App\Http\Services\UserService;
use Illuminate\Http\Request;

class RegisterController extends Base
{
  public function index()
  {
    return view('auth.register.index', [
      'title' => 'Register'
    ]);
  }

  public function store(JSONresponse $response, RegisterRequest $req, UserService $user, PemohonService $pemohon, EmailService $mail, Request $request)
  {
    $valid = $req->validate($request->all());
    if ($valid->fails()) {
      return $response->create(0, $valid->errors()->toArray());
    } else {
      $user = $user->store($request->all());
      $id = $user->id;
      $pemohon = $pemohon->store($id, $request->all());

      $mail->sendVerification($user->email, $user->verification_code);

      return $response->create(1, 'Registrasi Berhasil', '', '/auth/verifikasi/' . $user->email);
    }
  }
}
