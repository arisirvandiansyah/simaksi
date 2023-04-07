<?php

namespace App\Http\Services;

use App\Mail\EmailVerifikasi;
use Illuminate\Support\Facades\Mail;

class EmailService
{
  public function sendVerification($email, $code)
  {
    return Mail::to($email)->send(new EmailVerifikasi($code));
  }
}
