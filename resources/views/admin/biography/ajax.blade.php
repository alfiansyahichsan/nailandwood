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
    $('#a').val($(this).data('text'));
    $('#b').val($(this).data('alamat'));
    $('#c').val($(this).data('email'));
    $('#d').val($(this).data('phone'));
    $('#myModal').modal('show');
});
  $('.modal-footer').on('click', '.edit', function() {
  $.ajax({
      type: 'post',
      url: '/admin/biography/editItem',
      data: {
          '_token': $('input[name=_token]').val(),
          'id': $("#fid").val(),
          'text': $("#a").val(),
          'alamat': $('#b').val(),
          'email': $('#c').val(),
          'phone': $('#d').val()
      },
      success: function(data) {
        console.log(data);
          $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.text + "</td><td>" + data.alamat + "</td><td>" + data.email + "</td><td>" + data.phone + "</td><td><button class='edit-modal btn btn-primary' data-id='" + data.id + "' data-text='" + data.text + "' data-alamat='" + data.alamat + "' data-email='" + data.email + "' data-phone='" + data.phone + "'><span class='glyphicon glyphicon-edit'> </span> Edit</button>");

      }
  });
});

</script>

