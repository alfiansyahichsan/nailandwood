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
    $('#q').val($(this).data('imagepathslider'));
    $('#t').val($(this).data('text'));
    $('#d').val($(this).data('textbutton'));
    $('#myModal').modal('show');
});
  $('.modal-footer').on('click', '.edit', function() {
  $.ajax({
      type: 'post',
      url: '/editItem',
      data: {
          '_token': $('input[name=_token]').val(),
          'id': $("#fid").val(),
          'imagepathslider': $("#q").val(),
          'text': $('#t').val(),
          'textbutton': $('#d').val()
      },
      success: function(data) {
          $('.item' + data.id).replaceWith("<tr><td>" + data.id + "</td><td>" + data.date + "</td><td>" + data.eventname + "</td><td>" + data.venue + "</td><td>" + data.location + "</td><td>" + data.tickets + "</td><td>" + data.link + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-date='" + data.date + "' data-eventname='" + data.eventname + "' data-venue='" + data.venue + "' data-location='" + data.location + "'data-tickets='" + data.tickets + "'data-link='" + data.link + "'><span class='glyphicon glyphicon-edit'></span> Edit</button><button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-date='" + data.date + "' data-eventname='" + data.eventname + "' data-venue='" + data.venue +"' data-location='" + data.location +"' data-tickets='" + data.tickets +"' data-link='" + data.link + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
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
  $('#myModal').modal('show');
});

$('.modal-footer').on('click', '.delete', function() {
  $.ajax({
    type: 'post',
    url: '/deleteItem',
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
