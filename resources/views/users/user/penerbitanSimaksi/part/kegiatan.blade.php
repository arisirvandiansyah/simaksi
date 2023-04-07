<div class="form-group row">
  <div class="col-md-6">
    <label for="">Jenis Kegiatan</label>
    <select name="kegiatan" class="form-control">
      <option value="" hidden selected>Pilih Kegiatan</option>
      @foreach ($keg as $d)
          <option value="{{ $d->id_kegiatan }}">{{ $d->nama_kegiatan }}</option>
      @endforeach
    </select>
    <div class="invalid-feedback"></div>
  </div>
</div>
<div class="form-group">
  <label for="">Judul Kegiatan</label>
  <input type="text" name="judul_kegiatan" class="form-control" placeholder="Judul Kegiatan">
  <div class="invalid-feedback"></div>
</div>
<div class="form-group row">
  <div class="col-md-6">
    <label for="">Kategori Kawasan</label>
    <select name="kategori_kawasan" class="form-control">
      <option value="" hidden selected>Pilih Kategori</option>
      @foreach ($kat as $d)
          <option value="{{ $d->id_kategori }}">{{ $d->nama_kategori }}</option>
      @endforeach
    </select>
    <div class="invalid-feedback"></div>
  </div>
</div>
<div class="form-group row">
  <div class="col-md-6">
    <label for="">Kawasan</label>
    <div id="kawasan">
      <select name="kawasan" class="form-control">
        <option value="" hidden selected>Kategori Kawasan Belum Dipilih</option>
      </select>
    </div>
    <div class="invalid-feedback"></div>
  </div>
</div>
