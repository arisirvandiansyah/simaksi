@extends('layouts.app')
@section('content')
    <div class="card">
      <div class="card-body row">
        <div class="col-md-3">
          <a type="button" href="#" class="btn btn-sm btn-primary btn-block">Penerbitan SIMAKSI</a>
        </div>
        <div class="col-md-3">
          <a type="button" href="#" class="btn btn-sm btn-danger btn-block">Penerbitan SIMAKSI</a>
        </div>
        <div class="col-md-3">
          <a type="button" href="#" class="btn btn-sm btn-warning btn-block">Penerbitan SIMAKSI</a>
        </div>
        <div class="col-md-3">
          <a type="button" href="#" class="btn btn-sm btn-success btn-block">Penerbitan SIMAKSI</a>
        </div>
      </div>
    </div>

    <div class="timeline">
      <div class="time-label">
        <span class="bg-red">10 Feb. 2014</span>
      </div>

      @foreach ($data as $d)
      <div>
        <i class="fas fa-envelope bg-blue"></i>
        <div class="timeline-item">
          <span class="time"><i class="fas fa-clock"></i> 12:05</span>
          <h3 class="timeline-header">{{ $d->judul_pengumuman }}</h3>

          <div class="timeline-body">
            {{$d->isi_pengumuman}}
          </div>
          <div class="timeline-footer">
            {{-- <a class="btn btn-primary btn-sm">Read more</a>
            <a class="btn btn-danger btn-sm">Delete</a> --}}
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="card">
      <div class="card-body">
        <p>Kunjungi juga :</p>
      </div>
    </div>
@endsection
@section('script')
    
@endsection