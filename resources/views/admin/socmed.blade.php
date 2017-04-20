@extends('layouts.admin')


@section('judul')
Social Media
@stop

@section('nav10')
class="active"
@stop


@section('js')
<script src="{{asset('js/meeepo.js')}}"></script>


<script>

	$(function() {
		$("#update").click(function(){
			if (confirm("Update Data ?")){
				$('form#formnya').submit();
			}
			else{event.preventDefault();}
		});
	});

</script>

<script>


		jQuery(function($) {



			var i = 1;
			$("#add").click(function(){

				var tr    = "<tr class='tr_clone'><input type='hidden' name='pidn"+i+"' value=''><input type='hidden' name='deletepn"+i+"' class='deletep' value='0'><td style='text-align:center;'><input type='file' name='filen"+i+"' style='margin-top:20px; width:200px;'></td><td><input type='text' name='titlen"+i+"' class='form-control'></td><td><input type='text' name='subtitlen"+i+"' class='form-control'></td><td><select class='form-control' name='darkn"+i+"'><option value='yes'>Dark</option><option value='no'>Light</option></select></td><td><select class='form-control' name='positionn"+i+"'><option value='left'>Left</option><option value='mid'>Mid</option><option value='right'>Right</option></select></td><td><input type='text' name='linkn"+i+"' class='form-control'></td><td><input class='btn btn-danger' id='delete' type='button' value='Hapus'></td></tr>";

				$('.tr_clone:last').after(tr);
				$('input[name=jmlp]').val(i);
				i++;

			});
		});
	

</script>

@stop

@section('konten')


@if(isset($errors))
@if($errors->first() == '1')
<div class="col-lg-12">
	<div class="alert alert-success">Data berhasil diupdate</div>
</div>
@endif
@endif
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			Social Media
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">

				<form method="POST" action="#" id="formnya" files="true" enctype="multipart/form-data">
					<table class="table table-striped table-bordered table-hover" id="table">

						<thead>
							<tr>
								
								<th>Media</th>
								<th>Link</th>
								
							</tr>
						</thead>
						<tbody>



							<input type="hidden" name="jmlp" value="0">

							<tr class="tr_clone"></tr>
							
							<tr class="tr_clone">
								<input type="hidden" name="#" value="#">
								<input type="hidden" name="#" class="deletep" value="0">
								

									<td><input type="text" value="Facebook" name="%" class="form-control" disabled></td>

									<td><textarea class="form-control" name="#">ganti disini</textarea></td>

									
									
									</tr>
							<tr class="tr_clone">
								<input type="hidden" name="#" value="#">
								<input type="hidden" name="#" class="deletep" value="0">
								

									<td><input type="text" value="Instagram" name="%" class="form-control" disabled></td>

									<td><textarea class="form-control" name="#">ganti disini</textarea></td>

									
									
									</tr>
							<tr class="tr_clone">
								<input type="hidden" name="#" value="#">
								<input type="hidden" name="#" class="deletep" value="0">
								

									<td><input type="text" value="Line" name="%" class="form-control" disabled></td>

									<td><textarea class="form-control" name="#">ganti disini</textarea></td>

									
									
									</tr>
							<tr class="tr_clone">
								<input type="hidden" name="#" value="#">
								<input type="hidden" name="#" class="deletep" value="0">
								

									<td><input type="text" value="WhatsApp" name="%" class="form-control" disabled></td>

									<td><textarea class="form-control" name="#">ganti disini</textarea></td>

									
									
									</tr>
							
									
								
									<input type="hidden" name="jmll" value="#">				
								</tbody>

							</table>
							<input type="hidden" name="_token" value="#">
							
							<center><input type="submit" class="btn btn-primary" value="Update" id="update"></center>
							
						</form>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>


	<br><br>

	@stop