<!--file ini berfungsi untuk pengisian data2 berita-->
@extends('layouts.admin')


@section('judul')
News
@stop

@section('nav6')
class="active"
@stop


@section('js')
<script type="text/javascript" src="{{asset('/ckeditor/ckeditor.js')}}"></script>

<script>

	$(function() {//fungsi untuk tambah data
		$("#update").click(function(){
			if (confirm("Tambah Data ?")){
				$('form#formnya').submit();
			}
			else{event.preventDefault();}
		});
	});

	function validateImage(objFileControl, div){//fungsi untuk pengecekkan gambar yang akan diupload
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

		 CKEDITOR.replace( 'editor1' );
	 CKEDITOR.config.editor = [//editor pada kolom pengisian teks
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	CKEDITOR.config.removeButtons = 'Save,NewPage,Preview,Print,Templates,PasteText,PasteFromWord,Replace,Find,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Button,Textarea,Select,ImageButton,HiddenField,RemoveFormat,Outdent,Indent,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Image,Flash,Table,HorizontalRule,Iframe,PageBreak,Format,Maximize,About,ShowBlocks';

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
			News
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">

				<form method="POST" action="{{URL::Route('aptnews')}}" id="formnya" files="true" enctype="multipart/form-data">
					<table class="table table-striped table-bordered table-hover" id="table">

						
						<tbody>


							<tr>
								<td>Title : </td>
								<td><input type="text" name="title" class="form-control"></td>
							</tr>

							<tr>
								<td>Date : </td>
								<td><input type="text"  name="date" class="form-control"></td>
							</tr>

							<tr>
								<td>Content : </td>
								<td><textarea name="content" class="form-control" id="editor1"></textarea></td>
							</tr>
							

							<tr>
								<td>Image : </td>
								<td>Recommended Resolution (500 x 280)<br><input type="file" name="image" style="margin-top:20px; width:200px;" id="control" onchange="validateImage(this,'control')"></td>
							</tr>

							
							
							<tr>
								
						</tbody>

					</table>
					
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
					<center><input type="submit" class="btn btn-primary" value="Tambah" id="update"></center>
							
						</form>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>

	</div>
	<!-- /.row -->

	<br><br>

	@stop