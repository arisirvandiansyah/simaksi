<div class="form-group row">
  <div class="col-md-9">
    <label for="">File Surat Pengantar</label>
    <input type="file" name="surat_pengantar" class="form-control">
    <div class="invalid-feedback"></div>
  </div>
</div>

@if ($id!=3)
<div class="form-group row">
  <div class="col-md-9">
    <label for="">File Proposal Kegiatan</label>
    <input type="file" name="proposal_kegiatan" class="form-control">
    <div class="invalid-feedback"></div>
  </div>
</div>
<div class="form-group row">
  <div class="col-md-9">
    <label for="">File Kartu Identitas</label>
    <input type="file" name="kartu_identitas" class="form-control">
    <div class="invalid-feedback"></div>
  </div>
</div>
@else
<div class="form-group row">
  <div class="col-md-9">
    <label for="">File Surat Izin Produksi (Untuk Video Komersial)</label>
    <input type="file" name="surat_izin_produksi" class="form-control">
    <div class="invalid-feedback"></div>
  </div>
</div>
<div class="form-group row">
  <div class="col-md-9">
    <label for="">Tanda Pendaftaran Rekaman Video/Film dari Badan Informasi dan Komunikasi Nasional</label>
    <input type="file" name="tanda_pendaftaran_rekaman" class="form-control">
    <div class="invalid-feedback"></div>
  </div>
</div>
<div class="form-group row">
  <div class="col-md-9">
    <label for="">Sinopsis Video/Film Yang Akan Dibuat</label>
    <input type="file" name="sinopsis_film" class="form-control">
    <div class="invalid-feedback"></div>
  </div>
</div>
<div class="form-group row">
  <div class="col-md-9">
    <label for="">Daftar Crew</label>
    <input type="file" name="daftar_crew" class="form-control">
    <div class="invalid-feedback"></div>
  </div>
</div>
@endif

<div class="form-group row">
  <div class="col-md-9">
    <label for="">File Surat Pernyataan tidak merusak lingkungan</label>
    <input type="file" name="surat_pernyataan" class="form-control">
    <div class="invalid-feedback"></div>
  </div>
</div>