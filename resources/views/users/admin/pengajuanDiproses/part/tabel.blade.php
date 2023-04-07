<table class="table datatable">
  <thead>
    <tr>
      <td>PEMOHON</td>
      <td class="text-center">FORMULIR</td>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $d)
        <tr>
          <td>
            <div class="row justify-content-between px-2">
              <b>Nama</b>
              <i>{{ $d->nama_pemohon }}</i>
            </div>
            <div class="row justify-content-between px-2">
              <b>Email</b>
              <i>{{ $d->email }}</i>
            </div>
            <div class="row justify-content-between px-2">
              <b>No. Telepon</b>
              <i>{{ $d->no_telp }}</i>
            </div>
          </td>
          <td>
            <p class="text-center">
              <a type="button" data-toggle="modal" data-target="#formulir-{{ $d->id_pengajuan }}" class="btn btn-sm btn-info">Lihat Formulir</a>
            </p>
              @include('users.admin.pengajuanDiproses.part.formulir')
          </td>
        </tr>
    @endforeach
  </tbody>
</table>