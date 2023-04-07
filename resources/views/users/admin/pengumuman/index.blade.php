@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-body">
    <div id="view">
    </div>
  </div>
</div>

<div class="modal fade" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="modal-view"></div>
    </div>
  </div>
</div>
@endsection
@section('script')
    <script>
      loadTable()
      summernote()
      const form = () => {
        $('form[type="edit"]').each(function(){
          $(this).submit(function (e) { 
            e.preventDefault();
            let btn = $(this).find('[type="submit"]')
            let text = btn.html()
            $.ajax({
              type: "post",
              url: $(this).attr('action'),
              data: $(this).serialize(),
              dataType: "json",
              beforeSend:function(){
                // $('#view').slideUp()
              },
              success: function (response) {
                $('#modal-view').html(response.data)
                $('.modal').modal('show')
                summernote()
              }
            });
          });
        })
      }
    </script>
@endsection