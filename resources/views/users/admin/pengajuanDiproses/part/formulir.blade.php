<div class="modal fade" id="formulir-{{ $d->id_pengajuan }}" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header py-2">
        <h5>FORMULIR - {{ $d->username }}</h5>
        <button class="close" data-dismiss="modal">&times</button>
      </div>
      <div class="section">
        <div class="modal-body p-2 px-3">
          <div class="row justify-content-end">
            <p>{{ date('d-m-Y | H:i',strtotime($d->created_at)) }}</p>
          </div>
          <table class="table">
            <tbody>
              <tr>
                <td><b>Jenis Kegiatan</b></td>
                <td>{{ $d->nama_kegiatan }}</td>
              </tr>
              <tr>
                <td><b>Judul Kegiatan</b></td>
                <td>{{ $d->judul_kegiatan }}</td>
              </tr>
              <tr>
                <td><b>Lokasi Kegiatan</b></td>
                <td>{{ $d->exerp_kategori }} - {{ $d->nama_kawasan }}</td>
              </tr>
              <tr>
                <td><b>No. Surat</b></td>
                <td>{{ $d->no_surat }}</td>
              </tr>
              <tr>
                <td><b>Tanggal Surat</b></td>
                <td>{{ date('d-m-Y',strtotime($d->tgl_surat)) }}</td>
              </tr>
              <tr>
                <td><b>Perihal Surat</b></td>
                <td>{{ $d->perihal_surat }}</td>
              </tr>
              <tr>
                <td><b>Penandatangan Surat</b></td>
                <td>{{ $d->penandatangan_surat }}</td>
              </tr>
              <tr>
                <td><b>Tanggal Mulai</b></td>
                <td>{{ date('d-m-Y',strtotime($d->tgl_mulai)) }}</td>
              </tr>
              <tr>
                <td><b>Tanggal Selesai</b></td>
                <td>{{ date('d-m-Y',strtotime($d->tgl_selesai)) }}</td>
              </tr>
              <tr>
                <td><b>Jumlah Pengikut</b></td>
                <td>{{ $d->jml_pengikut }} Orang.</td>
              </tr>
              <tr>
                <td><b>Lampiran</b></td>
                <td>
                  <p>
                    <a target="_blank" href="{{ url('storage/user/' . $d->username . '/' . $d->id_pengajuan . '/lampiran' . '/' . $d->surat_pengantar) }}">Surat Pengantar</a>
                  </p>
                  @if ($d->id_kegiatan!=3)
                    <p>
                      <a target="_blank" href="{{ url('storage/user/' . $d->username . '/' . $d->id_pengajuan . '/lampiran' . '/' . $d->kartu_identitas) }}">Kartu Identitas</a>
                    </p>
                    <p>
                      <a target="_blank" href="{{ url('storage/user/' . $d->username . '/' . $d->id_pengajuan . '/lampiran' . '/' . $d->proposal_kegiatan) }}">Proposal Kegiatan</a>
                    </p>
                  @else
                    <p>
                      <a target="_blank" href="{{ url('storage/user/' . $d->username . '/' . $d->id_pengajuan . '/lampiran' . '/' . $d->surat_izin_produksi) }}">Surat Izin Produksi</a>
                    </p>
                    <p>
                      <a target="_blank" href="{{ url('storage/user/' . $d->username . '/' . $d->id_pengajuan . '/lampiran' . '/' . $d->tanda_pendaftaran_rekaman) }}">Tanda Pendaftaran Rekaman</a>
                    </p>
                    <p>
                      <a target="_blank" href="{{ url('storage/user/' . $d->username . '/' . $d->id_pengajuan . '/lampiran' . '/' . $d->sinopsis_film) }}">Sinopsis Film</a>
                    </p>
                    <p>
                      <a target="_blank" href="{{ url('storage/user/' . $d->username . '/' . $d->id_pengajuan . '/lampiran' . '/' . $d->daftar_crew) }}">Daftar Crew</a>
                    </p>
                  @endif
                  <p>
                    <p><a target="_blank" href="{{ url('storage/user/' . $d->username . '/' . $d->id_pengajuan . '/lampiran' . '/' . $d->surat_pernyataan) }}">Surat Pernyataan</a></p>
                  </p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button class="btn btn-default btn-sm" data-dismiss="modal">Tutup</button>
          <button name="btn-tolak" class="btn btn-sm btn-danger">Tolak Pengajuan</button>
          <button class="btn btn-sm btn-primary">Setujui Pengajuan</button>
        </div>
      </div>
      <div style="display: none" class="section">
        @include('users.admin.pengajuanDiproses.part.pesanPenolakan')
      </div>
    </div>
  </div>
</div>