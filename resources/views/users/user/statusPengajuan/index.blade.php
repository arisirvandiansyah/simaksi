@extends('layouts.app')
@section('content')
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered datatable">
          <thead>
            <tr>
              <td>TANGGAL DIKIRIM</td>
              <td>DETAIL</td>
              <td class="text-center">STATUS PENGAJUAN</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $d)
                <tr>
                  <td>{{ date('d-m-Y | H:i',strtotime($d->created_at)) }}</td>
                  <td>
                    <p class="m-0"><b>Tujuan </b>{{ $d->jenis_pengajuan }}</p>
                    <p class="m-0"><b>Kegiatan </b>{{ $d->nama_kegiatan }}</p>
                    <p class="m-0"><b>Lokasi Kegiatan </b>{{ $d->exerp_kategori }} - {{ $d->nama_kawasan }}</p>
                    <p class="m-0"><b>Waktu Pelaksanaan </b>{{ date('d-m-Y',strtotime($d->tgl_mulai)) }} - {{ date('d-m-Y',strtotime($d->tgl_selesai)) }}</p>
                  </td>
                  <td>
                    <p id="status" class="text-center">{{ $d->status_pengajuan }}</p>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection
@section('script')
    <script>
      dataTable()
    </script>
@endsection