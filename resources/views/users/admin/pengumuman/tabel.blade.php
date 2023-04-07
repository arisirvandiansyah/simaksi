<div class="card-header row justify-content-end px-2 mb-2">
  <a type="button" onclick="loadAddForm()" class="btn btn-sm btn-primary">Buat Pengumuman</a>
</div>
<div class="card-body p-0">
  <table class="table">
    <thead>
      <tr>
        <td>#</td>
        <td>Judul Pengumuman</td>
        <td>Isi Pengumuman</td>
        <td>Tindakan</td>
      </tr>
    </thead>
    <tbody>
      <?php $no=1?>
      @foreach ($data as $d)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $d->judul_pengumuman }}</td>
            <td>{{ $d->isi_pengumuman }}</td>
            <td>
              <form type="edit" action="{{ url('data-pengumuman/edit/'.$d->id_pengumuman) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm btn-success btn-block">Edit</button>
              </form>
              <form action="">
                <a href="" type="button" class="btn btn-sm btn-danger btn-block">Hapus</a>
              </form>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>