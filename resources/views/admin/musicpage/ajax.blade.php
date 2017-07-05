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
    $('#q').val($(this).data('title'));
    $('#t').val($(this).data('release'));
    $('#d').val($(this).data('label'));
    $('#a').val($(this).data('format'));
    $('#myModal').modal('show');
});
  $('.modal-footer').on('click', '.edit', function() {
  $.ajax({
      type: 'post',
      url: '/admin/musics/editItem',
      data: {
          '_token': $('input[name=_token]').val(),
          'id': $("#fid").val(),
          'title': $("#q").val(),
          'release': $('#t').val(),
          'label': $('#d').val(),
          'format': $("#a").val()
      },
      success: function(data) {
        console.log(data);
          $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.title + "</td><td>" + data.release + "</td><td>" + data.label + "</td><td>" + data.format + "</td><td><button class='edit-modal btn btn-primary' data-id='" + data.id + "' data-title='" + data.title + "' data-release='" + data.release + "' data-label='" + data.label + "' data-format='" + data.format + "'><span class='glyphicon glyphicon-edit'></span> Edit</button></tr>");
      }
  });
});


</script>