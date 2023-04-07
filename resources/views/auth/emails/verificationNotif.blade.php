@extends('layouts.app')
@section('content')
    <div class="row min-vh-100 justify-content-center align-items-center">
      <div class="card">
        <div class="card-body">
          <h3>VERIFIKASI AKUN</h3>
          <p>Kode Verifikasi telah dikirimkan ke email anda</p>
          <p>Harap masukan kode verifikasi.</p>
          <form name="confirm-code" class="mx-0 mt-2" action="{{{ route('verify.code') }}}">
            @csrf
            <input type="hidden" name="email" value="{{ $email }}">
            <input type="text" name="kode_verifikasi" class="form-control" placeholder="Kode Verifikasi">
            <button type="submit" class="btn btn-primary btn-block mt-2">Konfirmasi Kode</button>
          </form>
          <form name="resend-email" class="mx-0 mt-2" action="{{ route('resend.verification') }}">
            @csrf
            <input type="hidden" name="email" value="{{ $email }}">
            <button type="submit" class="btn btn-default btn-block">Kirim Ulang Kode</button>
          </form>
        </div>
      </div>
    </div>
@endsection
@section('script')
    <script>
      $('form[name="resend-email"]').submit(function (e) { 
        e.preventDefault();
        let btn = $(this).find('[type="submit"]')
        let text = btn.html()
        $.ajax({
          type: "post",
          url: $(this).attr('action'),
          data: $(this).serialize(),
          dataType: "json",
          beforeSend:function(){
            btnLoad(btn)
          },
          success: function (response) {
            setTimeout(() => {
              btnLoadEnd(btn,text)
              toastr.success(response.msg)
            }, 700);
          }
        });
      });

      $('form[name="confirm-code"]').submit(function (e) { 
        e.preventDefault();
        let btn = $(this).find('[type="submit"]')
        let text = btn.html()
        $.ajax({
          type: "post",
          url: $(this).attr('action'),
          data: $(this).serialize(),
          dataType: "json",
          beforeSend:function(){
            btnLoad(btn)
          },
          success: function (response) {
            setTimeout(() => {
              btnLoadEnd(btn,text)
              if(response.code==0){
                toastr.error(response.msg)
                $('input[name="kode_verifikasi"]').val('')
              }
              if(response.code==2){
                toastr.success(response.msg)
                setTimeout(() => {
                  wHref(response.url)
                }, 500);
              }
            }, 700);
          }
        });
      });

      $('input[name="kode_verifikasi"]').change(function (e) { 
        e.preventDefault();
        
      });
    </script>
@endsection