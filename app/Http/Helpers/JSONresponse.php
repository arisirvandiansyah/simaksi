<?php

namespace App\Http\Helpers;

class JSONresponse
{
  static function create($code = null, $msg = null, $data = null, $url = null)
  {
    return response()->json([
      'code' => $code,
      'msg' => $msg,
      'data' => $data,
      'url' => $url
    ]);
  }
}
