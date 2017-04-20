@extends('layouts.admin')


@section('judul')
Slider
@stop

@section('nav2')
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

				var tr    = "<tr class='tr_clone'><input type='hidden' name='pidn"+i+"' value=''><input type='hidden' name='deletepn"+i+"' class='deletep' value='0'><td style='text-align:center;'><input type='file' name='filen"+i+"' style='margin-top:20px; width:200px;' id='controln"+i+"' onchange=validateImage(this,'controln"+i+"')></td><td><input type='text' name='titlen"+i+"' class='form-control'></td><td><input type='text' name='subtitlen"+i+"' class='form-control'></td><td><input type='text' name='headern"+i+"' class='form-control'></td><td><input type='text' name='textn"+i+"' class='form-control'></td><td><input type='text' name='linkn"+i+"' class='form-control'></td><td><input class='btn btn-danger' id='delete' type='button' value='Hapus'></td></tr>";

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
			Slider
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">

				<form method="POST" action="{{URL::Route('slider')}}" id="formnya" files="true" enctype="multipart/form-data">
					<table class="table table-striped table-bordered table-hover" id="table">

						<thead>
							<tr>
								<th>Image <br>(Recommended Resolution <br> 1600 x 900)</th>
								<th>Title</th>
								<th>Subtitle</th>
								<th>Header</th>
								<th>Text</th>
								<th>Link</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>



							<input type="hidden" name="jmlp" value="0">

							<tr class="tr_clone"></tr>

							<!--row di clone setiap kali mengklik tombol tambah-->
                            <?php
                            $l = 0;
                            ?>

							@foreach($slider as $sl)
                                <?php $l++; ?>
							<tr class="tr_clone">
								<input type="hidden" name="pid{{$l}}" value="{{$sl['id_slider']}}">
								<input type="hidden" name="deletep{{$l}}" class="deletep" value="0">

								<td style="text-align:center;"><img src="{{asset('images/slider/'.$sl['image'])}}" height="100">
									<input type="file" value="{{$sl['image']}}" name="file{{$l}}" style="margin-top:20px; width:200px;" id="control{{$l}}" onchange="validateImage(this,'control{{$l}}')"></td>

								<td><input type="text" value="{{$sl['title']}}" name="title{{$l}}" class="form-control"></td>

								<td><input type="text" value="{{$sl['subtitle']}}" name="subtitle{{$l}}" class="form-control"></td>
								<td><input type="text" value="{{$sl['header']}}" name="header{{$l}}" class="form-control"></td>
								{{--<td>--}}

									<!--digunakan untuk pemilihan tingkat kecerahan gambar slider-->
									{{--<select class="form-control" name="dark{{$l}}">--}}
										{{--<option value="yes" @if ($sl["dark"]=="yes") selected @endif>Dark</option>--}} 
										{{--<option value="no" @if ($sl["dark"]=="yes") selected @endif>Light</option>--}}
									{{--</select>--}}
								{{--</td>--}}
								{{--<td>--}}

									<!--pengaturan posisi gambar-->
									{{--<select class="form-control" name="position{{$l}}">--}}
										{{--<option value="left" @if ($sl["position"]=="left") selected @endif>Left</option>--}}
										{{--<option value="mid" @if ($sl["position"]=="mid") selected @endif>Mid</option>--}}
										{{--<option value="right" @if ($sl["position"]=="right") selected @endif>Right</option>--}}
									{{--</select>--}}
								{{--</td>--}}
								<td>
									<input type="text" value="{{$sl['text']}}" name="text{{$l}}" class="form-control">
								</td>
								<td>
									<input type="text" value="{{$sl['link']}}" name="link{{$l}}" class="form-control">
								</td>
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