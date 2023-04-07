<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller as Base;
use App\Http\Helpers\JSONresponse;
use App\Http\Requests\PenerbitanSimaksiRequest;
use App\Http\Services\LampiranService;
use App\Http\Services\PengajuanService;
use App\Models\KategoriKawasan;
use App\Models\Kawasan;
use App\Models\Kegiatan;
use App\Models\Lampiran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PenerbitanSimaksiController extends Base
{
  public function index()
  {
    $kegiatan = Kegiatan::all();
    $kategori = KategoriKawasan::all();
    return view('users.user.penerbitanSimaksi.index', [
      'title' => 'Formulir Penerbitan SIMAKSI',
      'keg' => $kegiatan,
      'kat' => $kategori,
    ]);
  }

  public function loadUploadForm(JSONresponse $response, Request $request)
  {
    return $response->create(
      '',
      '',
      view('users.user.penerbitanSimaksi.part.upload', [
        'id' => $request->input('id'),
      ])->render(),
    );
  }
  public function loadKawasan(JSONresponse $response, Request $request)
  {
    $data = Kawasan::where('id_kategori', $request->input('id'))
      ->get();
    return $response->create(
      '',
      '',
      $data,
    );
  }

  public function store(PengajuanService $pengajuan, LampiranService $lampiran, Request $request, JSONresponse $response, PenerbitanSimaksiRequest $validation)
  {
    $valid = $validation->vallidate($request->all());
    if ($valid->fails()) {
      return $response->create(0, $valid->errors()->toArray());
    } else {
      $formulir = $pengajuan->store($request->all());
      $id = $formulir->id;
      $keg = $request->input('kegiatan');

      $store = 'storage/user/' . Auth::user()->username . '/' . $id . '/lampiran';

      $nama_surat_pengantar = '';
      $nama_surat_pernyataan = '';
      $nama_kartu_identitas = '';
      $nama_proposal_kegiatan = '';
      $nama_surat_izin_produksi = '';
      $nama_tanda_pendaftaran_rekaman = '';
      $nama_sinopsis_film = '';
      $nama_daftar_crew = '';
      if ($request->hasFile('surat_pengantar') && $request->file('surat_pengantar')->isValid()) {
        $nama_surat_pengantar = $request->file('surat_pengantar')->hashName();

        $request->file('surat_pengantar')->move($store, $nama_surat_pengantar);
      }

      if ($keg != 3) {

        if ($request->hasFile('kartu_identitas') && $request->file('kartu_identitas')->isValid()) {
          $nama_kartu_identitas = $request->file('kartu_identitas')->hashName();

          $request->file('kartu_identitas')->move($store, $nama_kartu_identitas);
        }
        if ($request->hasFile('proposal_kegiatan') && $request->file('proposal_kegiatan')->isValid()) {
          $nama_proposal_kegiatan = $request->file('proposal_kegiatan')->hashName();

          $request->file('proposal_kegiatan')->move($store, $nama_proposal_kegiatan);
        }
      } else {
        if ($request->hasFile('surat_izin_produksi') && $request->file('surat_izin_produksi')->isValid()) {
          $nama_surat_izin_produksi = $request->file('surat_izin_produksi')->hashName();

          $request->file('surat_izin_produksi')->move($store, $nama_surat_izin_produksi);
        }
        if ($request->hasFile('tanda_pendaftaran_rekaman') && $request->file('tanda_pendaftaran_rekaman')->isValid()) {
          $nama_tanda_pendaftaran_rekaman = $request->file('tanda_pendaftaran_rekaman')->hashName();

          $request->file('tanda_pendaftaran_rekaman')->move($store, $nama_tanda_pendaftaran_rekaman);
        }
        if ($request->hasFile('sinopsis_film') && $request->file('sinopsis_film')->isValid()) {
          $nama_sinopsis_film = $request->file('sinopsis_film')->hashName();

          $request->file('sinopsis_film')->move($store, $nama_sinopsis_film);
        }
        if ($request->hasFile('daftar_crew') && $request->file('daftar_crew')->isValid()) {
          $nama_daftar_crew = $request->file('daftar_crew')->hashName();

          $request->file('daftar_crew')->move($store, $nama_daftar_crew);
        }
      }

      if ($request->hasFile('surat_pernyataan') && $request->file('surat_pernyataan')->isValid()) {
        $nama_surat_pernyataan = $request->file('surat_pernyataan')->hashName();

        $request->file('surat_pernyataan')->move($store, $nama_surat_pernyataan);
      }

      $berkas = $lampiran->store([
        'id_pengajuan' => $id,
        'surat_pengantar' => $nama_surat_pengantar,
        'surat_pernyataan' => $nama_surat_pernyataan,
        'kartu_identitas' => $nama_kartu_identitas,
        'proposal_kegiatan' => $nama_proposal_kegiatan,
        'surat_izin_produksi' => $nama_surat_izin_produksi,
        'tanda_pendaftaran_rekaman' => $nama_tanda_pendaftaran_rekaman,
        'sinopsis_film' => $nama_sinopsis_film,
        'daftar_crew' => $nama_daftar_crew,
      ]);
      return $response->create(1, 'Formulir Pengajuan telah dikirim.', '', '/status-pengajuan');
    }
  }
}
