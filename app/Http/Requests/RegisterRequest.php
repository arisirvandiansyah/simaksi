<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class RegisterRequest
{
  public function validate($request)
  {
    $rules = [
      'nama_lengkap' => [
        'required'
      ],
      'no_identitas' => [
        'required',
        // 'number',
        'max:18',
        'min:15'
      ],
      'no_telepon' => [
        'required',
        // 'number',
        'max:13',
        'min:11'
      ],
      'email' => [
        'required',
        'email',
        'unique:user',
      ],
      'username' => [
        'required',
        'unique:user',
        'max:16',
        'min:8',
      ],
      'password' => [
        'required',
        'max:16',
        'min:8',
      ],
      'password_konfirmasi' => [
        'same:password'
      ],
      'alamat' => [
        'required'
      ],
      'pekerjaan' => [
        'required'
      ],
      'instansi' => [
        'required'
      ],
    ];

    $validate = Validator::make($request, $rules, $messages = [
      'required' => ':attribute harus diisi.',
      'unique' => ':attribute telah terdaftar',
      'same' => ':attribute tidak sesuai',
      'max' => ':attribute maksimal manggunakan :max karakter',
      'min' => ':attribute minimal manggunakan :min karakter',
    ]);
    return $validate;
  }
}
