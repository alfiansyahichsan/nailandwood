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
    $('#a').val($(this).data('imagepathslider'));
    $('#b').val($(this).data('text'));
    $('#c').val($(this).data('textbutton'));
    $('#myModal').modal('show');
});
  $('.modal-footer').on('click', '.edit', function() {
  $.ajax({
      type: 'post',
      url: '/admin/slider/editItem',
      data: {
          '_token': $('input[name=_token]').val(),
          'id': $("#fid").val(),
          'imagepathslider': $("#a").val(),
          'text': $('#b').val(),
          'textbutton': $('#c').val()
      },
      success: function(data) {
        console.log(data);
          $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.imagepathslider + "</td><td>" + data.text + "</td><td>" + data.textbutton + "</td><td><button class='edit-modal btn btn-primary' data-id='" + data.id + "' data-imagepathslider='" + data.imagepathslider + "' data-text='" + data.text + "' data-textbutton='" + data.textbutton + "'><span class='glyphicon glyphicon-edit'> </span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-imagepathslider='" + data.imagepathslider + "' data-text='" + data.text + "' data-textbutton='" + data.textbutton + "'><span class='glyphicon glyphicon-trash'> </span> Delete</button></td></tr>");

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
    url: '/admin/slider/deleteItem',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('.id').text()
    },
    success: function(data) {
      $('.item' + $('.id').text()).remove();
    }
  });
});

</script>

