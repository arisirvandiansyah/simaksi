@extends('layouts.app')
@section('content')
    <div class="card">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <td>#</td>
              <td>Login Info</td>
              <td>User Info</td>
              <td>Tindakan</td>
            </tr>
          </thead>
          <tbody>
            <?php $no=1;?>
            @foreach ($data as $d)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>
                    <p class="m-0"><b>Username</b> {{ $d->username }}</p>
                  </td>
                  <td>
                    <p class="m-0"><b>Nama</b> {{ $d->nama_pemohon }}</p>
                    <p class="m-0"><b>No. Identitas</b> {{ $d->no_identitas }}</p>
                  </td>
                  <td>
                    <a href="" type="button" class="btn btn-sm btn-success btn-block">Edit</a>
                    <a href="" type="button" class="btn btn-sm btn-danger btn-block">Edit</a>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection
@section('script')
    
@endsection