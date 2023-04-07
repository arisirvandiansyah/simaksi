@extends('layouts.app')
@section('content')
<form name="submit-penerbitan" action="{{ route('submit.penerbitan') }}" method="POST">
  @csrf
  <div class="card">
    <div class="card-body">
      <div class="card-header">
        <h5>DATA KEGIATAN</h5>
      </div>
      <div class="card-body">
        @include('users.user.penerbitanSimaksi.part.kegiatan')
      </div>
      <div class="card-header">
        <h5>SURAT PENGANTAR</h5>
      </div>
      <div class="card-body">
        @include('users.user.penerbitanSimaksi.part.suratPengantar')
      </div>
      <div class="card-header">
        <h5>WAKTU PELAKSANAAN</h5>
      </div>
      <div class="card-body">
        @include('users.user.penerbitanSimaksi.part.waktuPelaksanaan')
      </div>
      <div class="card-header">
        <h5>UPLOAD FILE</h5>
      </div>
      <div class="card-body">
        <div id="upload">
          <p class="text-center text-grey font-italic">Jenis Kegiatan Belum Dipilih.</p>
        </div>
      </div>
      <div class="card-header">
        <h5>SELESAI</h5>
      </div>
      <div class="card-body">

      </div>
    </div>
    <div class="card-body d-flex justify-content-end">
      <button type="submit" class="btn btn-sm btn-primary">Kirim Formulir</button>
    </div>
  </div>
</form>
@endsection
@section('script')
    <script>
      $('select[name="kegiatan"]').change(function (e) { 
        e.preventDefault();
        let id = $(this).val()
        $.ajax({
          type: "get",
          url: urlNow+'/load-upload',
          data:{
            id:id
          },
          dataType: "json",
          success: function (response) {
            $('#upload').html(response.data)
          }
        });
      });

      $('select[name="kategori_kawasan"]').change(function (e) { 
        e.preventDefault();
        let val = $(this).val()
        $.ajax({
          type: "get",
          url: urlNow+'/load-kawasan',
          data: {
            id:val
          },
          dataType: "json",
          success: function (response) {
            let html = ''
            html +='<select name="kawasan" class="form-control">'
            for(i=0;i<response.data.length;i++){
              html+='<option value="" hidden selected>Pilih Kawasan</option>'
              html+='<option value="'+response.data[i].id_kawasan+'">'+response.data[i].nama_kawasan+'</option>'
            }
            html+='</select>'
            $('#kawasan').html(html)
          }
        });
      });

      $('form[name="submit-penerbitan"]').submit(function (e) { 
        e.preventDefault();
        let btn = $(this).find('[type="submit"]')
        let text = btn.html()

        $.ajax({
          type: "post",
          url: $(this).attr('action'),
          data: new FormData(this),
          contentType:false,
          processData:false,
          dataType: "json",
          beforeSend:function(){
            btnLoad(btn)
          },
          success: function (response) {
            console.log(response);
            setTimeout(() => {
              btnLoadEnd(btn,text)
              if(response.code==0){
                validation(response.msg)
                resetInvalid()
                scrollTo(0)
              }else{
                toastr.success(response.msg)
                setTimeout(() => {
                  wHref(response.url)
                }, 1500);
              }
            }, 700);
          }
        });
      });
    </script>
@endsection