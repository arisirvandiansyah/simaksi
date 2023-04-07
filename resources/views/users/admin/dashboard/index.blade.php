@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-body p-2">
          <h4>PENGAJUAN MASUK</h4>
          <p>{{ count($masuk) }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body p-2">
          <h4>PENGAJUAN DITOLAK</h4>
          <p>99</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body p-2">
          <h4>PENGAJUAN DISETUJUI</h4>
          <p>99</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body p-2">
          <h4>SIMAKSI DITERBITKAN</h4>
          <p>99</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-body p-2">
          <h4>USER</h4>
          <p>99</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body p-2">
          <h4>ADMIN</h4>
          <p>99</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body p-2">
          <h4>PEMOHON</h4>
          <p>99</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-body p-2">
          <h4>PENGUMUMAN</h4>
          <p>99</p>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
    
@endsection