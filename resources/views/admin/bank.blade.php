@extends('layouts.admin')


@section('judul')
Bank
@stop

@section('nav13')
class="active"
@stop


@section('js')
	<script src="{{asset('js/meeepo.js')}}"></script>


	<script>

		$(function() {//fungsi untuk mengupdate data setelah penambahan data
			$("#update").click(function(){
				if (confirm("Update Data ?")){
					$('form#formnya').submit();
				}
				else{event.preventDefault();}
			});
		});

		function validateImage(objFileControl, div){//fungsi untuk mengecek jenis file yang diupload (harus gambar)
			var control = $("#"+div);
			var file = objFileControl.value;
			var len = file.length;
			var size = objFileControl.files[0].size;
			var ext = file.slice(len - 4, len);
			if(ext.toUpperCase() != ".JPG" && ext.toUpperCase() != ".JPEG" && ext.toUpperCase() != ".PNG"){
				formOK = false;
				alert("Only Image files allowed.");
				control.replaceWith( control = control.clone( true ) );
			}

			else if(size > 300000){
				formOK = false;
				alert("File size maximum 300KB");
				control.replaceWith( control = control.clone( true ) );
			}
			else{
				formOK = true;
			}

		}

	</script>

	<script>


		jQuery(function($) {



			var i = 1;
			$("#add").click(function(){//fungsi untuk menduplikasi row

				var tr    = "<tr class='tr_clone'><input type='hidden' name='pidn"+i+"' value=''><input type='hidden' name='deletepn"+i+"' class='deletep' value='0'><td style='text-align:center;'><input type='file' name='filen"+i+"' style='margin-top:20px; width:200px;' id='controln"+i+"' onchange=validateImage(this,'controln"+i+"')></td><td><input type='text' name='bankn"+i+"' class='form-control'></td><td><input type='text' name='norekn"+i+"' class='form-control'></td><td><input type='text' name='naman"+i+"' class='form-control'></td><td><input class='btn btn-danger' id='delete' type='button' value='Hapus'></td></tr>";

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
			Bank
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">

				<form method="POST" action="{{URL::Route('admin.pbank')}}" id="formnya" files="true" enctype="multipart/form-data">
					<table class="table table-striped table-bordered table-hover" id="table">

						<thead>
							<tr>
								<th>Image <br>(Recommended Resolution <br> 1600 x 900)</th>
								<th>Nama Bank</th>
								<th>No Rekening</th>
								<th>Pemilik Rekening</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>




						<input type="hidden" name="jmlp" value="0">

						<tr class="tr_clone"></tr>

						<?php
						$l = 0;
						?>

						@foreach($bank as $bk)
							<?php $l++; ?>
							<tr class="tr_clone">
								<input type="hidden" name="pid{{$l}}" value="{{$bk['id_bank']}}">
								<input type="hidden" name="deletep{{$l}}" class="deletep" value="0">

								<td style="text-align:center;"><img src="{{asset('images/bank/'.$bk['gambar'])}}" height="100">
									<input type="file" value="{{$bk['gambar']}}" name="file{{$l}}" style="margin-top:20px; width:200px;" id="control{{$l}}" onchange="validateImage(this,'control{{$l}}')"></td>

								<td><input type="text" value="{{$bk['bank']}}" name="bank{{$l}}" class="form-control"></td>

								<td><input type="text" value="{{$bk['norek']}}" name="norek{{$l}}" class="form-control"></td>
								<td><input type="text" value="{{$bk['nama']}}" name="nama{{$l}}" class="form-control"></td>

								<td>
									<input class="btn btn-danger" id="delete" type="button" value="Hapus"></td>
							</tr>
						@endforeach
						<tr><td colspan="7"><center><input type="button" class="btn btn-default" id="add" value="Tambah"></center></td></tr>
						<input type="hidden" name="jmll" value="{{$l}}">
						</tbody>

					</table>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<center><input type="submit" class="btn btn-primary" value="Update" id="update"></center>

				</form>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>

	<!-- /.row -->

	<br><br>

	@stop