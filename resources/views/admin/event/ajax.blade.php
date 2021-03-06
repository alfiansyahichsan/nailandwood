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
    $('#q').val($(this).data('date'));
    $('#t').val($(this).data('eventname'));
    $('#d').val($(this).data('venue'));
    $('#a').val($(this).data('location'));
    $('#s').val($(this).data('tickets'));
    $('#e').val($(this).data('link'));
    $('#myModal').modal('show');
});
  $('.modal-footer').on('click', '.edit', function() {
  $.ajax({
      type: 'post',
      url: '/admin/event/editItem',
      data: {
          '_token': $('input[name=_token]').val(),
          'id': $("#fid").val(),
          'date': $("#q").val(),
          'eventname': $('#t').val(),
          'venue': $('#d').val(),
          'location': $("#a").val(),
          'tickets': $('#s').val(),
          'link': $('#e').val()
      },
      success: function(data) {
        console.log(data);
          $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.date + "</td><td>" + data.eventname + "</td><td>" + data.venue + "</td><td>" + data.location + "</td><td>" + data.tickets + "</td><td>" + data.link + "</td><td><button class='edit-modal btn btn-primary' data-id='" + data.id + "' data-date='" + data.date + "' data-eventname='" + data.eventname + "' data-venue='" + data.venue + "' data-location='" + data.location + "'data-tickets='" + data.tickets + "'data-link='" + data.link + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-date='" + data.date + "' data-eventname='" + data.eventname + "' data-venue='" + data.venue +"' data-location='" + data.location +"' data-tickets='" + data.tickets +"' data-link='" + data.link + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
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
  $('.eventname').html($(this).data('eventname'));
  $('#myModal').modal('show');
});

$('.modal-footer').on('click', '.delete', function() {
  $.ajax({
    type: 'post',
    url: '/admin/event/deleteItem',
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