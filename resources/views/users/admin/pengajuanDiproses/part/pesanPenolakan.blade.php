<form action="">
  @csrf
  <div class="card-body">
    <div class="form-group">
      <label for="">Pesan Penolakan</label>
      <textarea name="pesan_penolakan" type="summernote"  rows="10">
        <h5>Halo, {{ $d->nama_pemohon }}</h5>
        <p>Untuk saat ini pengajuan anda belum dapat kami setujui, karena :</p>
        <ul>
          <li></li>
          <li></li>
        </ul>
        <p>Silahkan lakukan perbaikan pada poin-poin di atas, lalu kirim ulang pengajuan anda.</p>
        <p>Terima Kasih ^.^</p>
      </textarea>
    </div>
  </div>
  <div class="modal-footer">
    <button name="batal-tolak" class="btn btn-sm btn-default">Batalkan</button>
    <button class="btn btn-sm btn-danger">Konfirmasi Penolakan</button>
  </div>
</form>