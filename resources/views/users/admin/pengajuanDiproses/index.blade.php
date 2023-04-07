@extends('layouts.app')
@section('content')
    <div class="card">
      <div class="card-body">
        <div id="view"></div>
      </div>
    </div>
@endsection
@section('script')
    <script>
      $(function(){
        $.ajax({
          type: "get",
          url: urlNow+'/tabel',
          dataType: "json",
          beforeSend:function(){
          },
          success: function (response) {
            // setTimeout(() => {
              $('#view').html(response.data)
              dataTable()
              summernote()

              $('button[name="btn-tolak"]').click(function (e) { 
                e.preventDefault();
                $(this).closest('.section').fadeOut().next().fadeIn()
              });
              $('button[name="batal-tolak"]').click(function (e) { 
                e.preventDefault();
                $(this).closest('.section').fadeOut().prev().fadeIn()
              });
            // }, 400);
          }
        });
      })
    </script>
@endsection