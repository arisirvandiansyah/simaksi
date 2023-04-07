<div class="modal-header">
  <h3 class="text-lg text-bold">
    TAMBAH PENGUMUMAN
  </h3>
  <button class="close" data-dismiss="modal">&times</button>
</div>
<div class="modal-body">
  <form action="">
    @csrf
    <div class="form-group">
      <label for="">Judul Pengumuman</label>
      <input type="text" name="judul_pengumuman" class="form-control" placeholder="Judul Pengumuman">
      <div class="invalid-feedback"></div>
    </div>
    <div class="form-group">
      <label for="">Isi Pengumuman</label>
      <textarea type="summernote" name="isi_pengumuman"></textarea>
      {{-- <div id="summernote"></div> --}}
    </div>
    <div class="form-group">
      <label for="">Gambar (<i>jika ada</i>)</label>
      <input type="file" name="gambar_pengumuman" class="form-control">
      <div class="invalid-feedback"></div>
    </div>
    <div class="card-footer row justify-content-end px-2">
      <button type="submit" class="btn btn-primary">Tambahkan</button>
    </div>
  </form>
</div>