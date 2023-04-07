{{-- <div class="card mt-2"> --}}
  @extends('layouts.app')
  @section('content')
  <div class="row justify-content-center align-items-center min-vh-100">
    <div style="min-width:50vw" class="card">
      <div class="card-body">
        <h3>REGISTER</h3>
        <p class="text-sm">Masukan data anda.</p>
        <form name="register" action="{{ route('submit.register') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Depan">
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
            <label for="">No. Identitas</label>
            <input type="text" name="no_identitas" class="form-control" placeholder="No. Identitas">
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
            <label for="">No. Telepon</label>
            <input type="text" name="no_telepon" class="form-control" placeholder="No. Telepon">
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" class="form-control" placeholder="Password">
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
            <label for="">Password Konfirmasi</label>
            <input type="text" name="password_konfirmasi" class="form-control" placeholder="Password Konfirmasi">
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
            <label for="">Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group">
            <label for="">Instansi / Perusahaan / Universitas</label>
            <input type="text" name="instansi" class="form-control" placeholder="Instansi">
            <div class="invalid-feedback"></div>
          </div>
          <div class="row justify-content-between align-items-center px-2">
            <a href="{{ route('index.login') }}" class="text-sm" >Log In</a>
            <button type="submit" class="btn btn-sm btn-primary">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
  @section('script')
    <script>
      $('form[name="register"]').submit(function (e) { 
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
                validation(response.msg)
                resetInvalid()
                scrollTo(0)
              }else if(response.code==1){
                toastr.success(response.msg)
                setTimeout(() => {
                  wHref(response.url)
                }, 300);
              }
            }, 700);
          }
        });
      });
    </script>
  @endsection
  