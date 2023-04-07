const urlNow = $(location).attr('href')
const baseUrl = window.location.origin

$(function(){
  scrollTo(0)
})

const dataTable = () => {
  $('.datatable').dataTable({
    "sort":false,
    "lengthChange": true,
    "autoWidth": false,
    "scrollX": true
  })
}

const wHref = (url=null) => {
  window.location.href = baseUrl+url
}

const scrollTo = (val) => {
  $('html,body').animate({
    scrollTop: val
  }, 800)
}

const modalScrollTo = (val) => {
  $('.modal').animate({
    scrollTop: val
  }, 800)
}

const btnLoad = (btn) => {
  btn.prop('disabled',true)
  btn.html('<i class="bx bx-loader-alt bx-spin"></i>')
}

const btnLoadEnd = (btn,text) => {
  btn.prop('disabled',false)
  btn.html(text)
}
const validation = (data) => {
  $.each(data,(field,msg) => {
    $('[name="'+field+'"]').addClass('is-invalid')
    $('[name="'+field+'"]~.invalid-feedback').html(msg[0])
  })
}

const resetInvalid = () => {
  $('.form-control').focus(function(){
    $(this).removeClass('is-invalid')
  })
}
const summernote = () => {
  $('[type="summernote"]').summernote({
    height:'280px',
    toolbar:[
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
    ]
  })
}

const loadTable = () => {
  $.ajax({
    type: "get",
    url: urlNow+'/tabel',
    dataType: "json",
    beforeSend:function(){
      // $('#view').slideUp(300)
    },
    success: function (response) {
      setTimeout(() => {
        console.log(response);
        $('#view').html(response.data)
        dataTable()
        summernote()
        // $('#view').slideDown(300)
        // form()
      }, 400);
    }
  });
}

const loadAddForm = () => {
  $.ajax({
    type: "get",
    url: urlNow+'/add',
    dataType: "json",
    beforeSend:function(){
      // $('#view').slideUp(300)
    },
    success: function (response) {
      $('#modal-view').html(response.data)
      $('.modal').modal('show')
      form()
      summernote()
    }
  });
}
