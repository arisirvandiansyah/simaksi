<div class="modal-header row justify-content-between p-2">
  <h3 class="text-lg text-bold">
    EDIT PENGUMUMAN
  </h3>
  <button class="close" data-dismiss="modal">&times</button>
</div>
<div class="modal-body">
  @foreach ($data as $d)
  <form action="">
    @csrf
    <div class="form-group">
      <label for="">Judul Pengumuman</label>
      <input type="text" name="judul_pengumuman" class="form-control" value="{{ $d->judul_pengumuman }}" placeholder="Judul Pengumuman">
      <div class="invalid-feedback"></div>
    </div>
    <div class="form-group">
      <label for="">Isi Pengumuman</label>
      <textarea type="summernote" name="isi_pengumuman">
        {{ $d->isi_pengumuman }}
      </textarea>
    </div>
    <div class="form-group">
      <label for="">Gambar (<i>jika ada</i>)</label>
      <input type="file" name="gambar_pengumuman" class="form-control">
      <div class="invalid-feedback"></div>
    </div>
    <div class="card-footer row justify-content-end px-2">
      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </div>
  </form>
  @endforeach
</div>