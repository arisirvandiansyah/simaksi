<table class="table datatable">
  <thead>
    <tr>
      <td>TANGGAL MASUK</td>
      <td>TUJUAN</td>
      <td class="text-center">TINDAKAN</td>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $d)
        <tr>
          <td>{{ date('d-m-Y | H:i',strtotime($d->created_at)) }}</td>
          <td>{{ $d->jenis_pengajuan }}</td>
          <td class="text-center">
            <form type="submit-proses" action="{{ route('submit.proses') }}" class="m-2" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{ $d->id_pengajuan }}">
              <button type="submit" class="btn btn-sm btn-primary">Proses</button>
            </form>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>