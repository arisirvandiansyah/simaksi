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
    table()
  })
  const form = () => {
    $('form[type="submit-proses"]').submit(function (e) { 
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
                  setTimeout(() => {
                    table()
                  }, 500);
                }, 700);
                
              }
            });
          });
  }
  const table = () => {
    $.ajax({
      type: "get",
      url: urlNow+'/tabel',
      dataType: "json",
      beforeSend:function(){
      },
      success: function (response) {
          $('#view').html(response.data)
          dataTable()
          form()
      }
    });
  }
</script>
@endsection