<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller as Base;
use Illuminate\Support\Facades\Storage;

class FileController extends Base
{
  public function stream($username, $id, $file)
  {
    $path = 'storage/user/' . $username . '/' . $id . '/lampiran' . '/' . $file;
    Storage::download($path);
  }
}
