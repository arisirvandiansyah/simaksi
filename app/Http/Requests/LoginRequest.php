<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class LoginRequest
{
  public function validate($request)
  {
    $rules = [
      'username' => [
        'required',
        'max:16',
        'min:8',
      ],
      'password' => [
        'required',
        'max:16',
        'min:8',
      ],
    ];
    $validate = Validator::make($request, $rules);
    return $validate;
  }
}
