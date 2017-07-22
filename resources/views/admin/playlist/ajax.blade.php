    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script>
    // Edit Data (Modal and function edit data)
    $(document).on('click', '.edit-modal', function() {
    $('#footer_action_button').text(" Update");
    $('#footer_action_button').addClass('glyphicon-check');
    $('#footer_action_button').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('edit');
    $('.modal-title').text('Edit');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    $('#fid').val($(this).data('id'));
    $('#a').val($(this).data('title'));
    $('#b').val($(this).data('audiopath'));
    $('#c').val($(this).data('imgthumbnailpath'));
    $('#myModal').modal('show');
});
  $('.modal-footer').on('click', '.edit', function() {
  $.ajax({
      type: 'post',
      url: '/admin/lplaylist/editItem',
      data: {
          '_token': $('input[name=_token]').val(),
          'id': $("#fid").val(),
          'title': $('#a').val(),
          'audiopath': $("#b").val(),
          'imgthumbnailpath': $('#c').val()
      },
      success: function(data) {
        console.log(data);
          $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.title + "</td><td>" + data.audiopath + "</td><td>" + data.imgthumbnailpath + "</td><td><button class='edit-modal btn btn-primary' data-id='" + data.id + "' data-title='" + data.title + "' data-audiopath='" + data.audiopath + "' data-imgthumbnailpath='" + data.imgthumbnailpath + "'><span class='glyphicon glyphicon-edit'> </span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-title='" + data.title + "' data-audiopath='" + data.audiopath + "' data-imgthumbnailpath='" + data.imgthumbnailpath + "'><span class='glyphicon glyphicon-trash'> </span> Delete</button></td></tr>");

      }
  });
});

  //delete function
$(document).on('click', '.delete-modal', function() {
  $('#footer_action_button').text(" Delete");
  $('#footer_action_button').removeClass('glyphicon-check');
  $('#footer_action_button').addClass('glyphicon-trash');
  $('.actionBtn').removeClass('btn-success');
  $('.actionBtn').addClass('btn-danger');
  $('.actionBtn').addClass('delete');
  $('.modal-title').text('Delete');
  $('.id').text($(this).data('id'));
  $('.deleteContent').show();
  $('.form-horizontal').hide();
  $('.imagepathslider').html($(this).data('imagepathslider'));
  $('#myModal').modal('show');
});

$('.modal-footer').on('click', '.delete', function() {
  $.ajax({
    type: 'post',
    url: '/admin/lplaylist/deleteItem',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('.id').text()
    },
    success: function(data) {
      $('.item' + $('.id').text()).remove();
    }
  });
});

function validateJPG(objFileControl) {
     var file = objFileControl.value;
     var len = file.length;
     var size = objFileControl.files[0].size;
     var ext = file.slice(len - 4, len);

     if (ext.toUpperCase() != ".JPG" && ext.toUpperCase() != ".PNG" && ext.toUpperCase() != ".JPEG") {
         alert("Only picture files allowed.");
         objFileControl.value=""
     } else if (size > 2000000) {
         alert("File size maximum 2MB");
        objFileControl.value=""
     }
  }

function validateMP3 (objFileControl) {
     var file = objFileControl.value;
     var len = file.length;
     var size = objFileControl.files[0].size;
     var ext = file.slice(len - 4, len);

     if (ext.toUpperCase() != ".MP3") {
         alert("Only mp3 files allowed.");
         objFileControl.value=""
     } else if (size > 6000000) {
         alert("File size maximum 6MB");
        objFileControl.value=""
     }
  }
</script>

