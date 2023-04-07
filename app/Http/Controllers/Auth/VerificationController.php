<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller as Base;
use App\Http\Helpers\JSONresponse;
use App\Http\Services\EmailService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Base
{
  public function index($email)
  {
    return view('auth.emails.verificationNotif', [
      'title' => 'Verifikasi Akun',
      'email' => $email,
    ]);
  }

  public function resend(JSONresponse $response, Request $request, EmailService $mail)
  {
    $user = User::where('email', $request->input('email'))
      ->update([
        'verification_code' => rand(100000, 999999),
      ]);
    $get = User::where('email', $request->input('email'))->get()->toArray();
    $code = $get[0]['verification_code'];
    $mail->sendVerification($request->input('email'), $code);
    return $response->create(2, 'Email verifikasi telah dikirimkan.<br>Silakan periksa email anda.');
  }

  public function verify(JSONresponse $response, Request $request)
  {
    $email = $request->input('email');
    $user = User::where('email', $email)->get()->toArray();
    $code = $user[0]['verification_code'];
    if ($code != $request->input('kode_verifikasi')) {
      return $response->create(0, 'Kode verifikasi tidak cocok.');
    } else {
      $verify = User::where('email', $email)
        ->update([
          'verified_at' => date(now()),
        ]);
      // if (Auth::attempt($request->only('email'))) {
      //   $request->session()->regenerate();
      // }
      return $response->create(2, 'Selamat. Akun anda berhasil diverifikasi.', '', '');
    }
  }
}
