@extends('layouts.app')
@section('content')
<div class="row justify-content-center align-items-center min-vh-100">
  <div style="width:300px" class="card">
    <div class="card-body">
      <h3>LOGIN</h3>
      <p>Masukan Info Login Anda.</p>
      <form name="login" action="{{ route('submit.login') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="invalid-feedback"></div>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="invalid-feedback"></div>
        </div>
        <div class="row justify-content-end px-2">
          <button type="submit" class="btn btn-sm btn-primary">Log In</button>
        </div>
        <div class="row px-2 mt-2">
          <p class="text-sm">Belum Punya Akun?, Registrasi <a href="{{ route('index.registrasi') }}" class="text-sm"><i>disini.</i></a></p>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('script')
    <script>
      $('form[name="login"]').submit(function (e) { 
        let btn = $(this).find('[type="submit"]')
        let text = btn.html()
        e.preventDefault();
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
                toastr.error(response.msg)
              }else{
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

