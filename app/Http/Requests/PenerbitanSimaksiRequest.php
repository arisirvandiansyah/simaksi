<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class PenerbitanSimaksiRequest
{
  public function vallidate($request)
  {
    $keg = $request['kegiatan'];
    $rules = [
      'kegiatan' => [
        'required'
      ],
      'judul_kegiatan' => [
        'required'
      ],
      'kategori_kawasan' => [
        'required'
      ],
      'kawasan' => [
        'required'
      ],
      'no_surat' => [
        'required'
      ],
      'tgl_surat' => [
        'required'
      ],
      'perihal_surat' => [
        'required'
      ],
      'penandatangan_surat' => [
        'required'
      ],
      'tgl_mulai' => [
        'required'
      ],
      'tgl_selesai' => [
        'required'
      ],
      'jml_pengikut' => [
        'required'
      ],
      'tgl_usulan_presentase' => [
        'required'
      ],
    ];
    $valid = Validator::make($request, $rules, $messages = [
      'required' => ':attribute harus diisi.',
      'kegiatan.required' => ':attribute belum dipilh.',
      'kawasan.required' => ':attribute belum dipilh.',
      'kawasan_kategori.required' => ':attribute belum dipilh.',
    ]);
    return $valid;
  }
}
