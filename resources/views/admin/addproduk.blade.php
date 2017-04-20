<!--halaman tambah produk pada admin panel-->
@extends('layouts.admin')


@section('judul')
Produk
@stop

@section('nav5')
class="active"
@stop


@section('js')
<script type="text/javascript" src="{{asset('/ckeditor/ckeditor.js')}}"></script>

<script>

	$(function() {
		$("#update").click(function(){
			if (confirm("Tambah Data ?")){
				$('form#formnya').submit();
			}
			else{event.preventDefault();}
		});
	});

	var formOK = false;


	function validateImage(objFileControl, div){
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
	 CKEDITOR.config.editor = [
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
			Produk
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">
				@if($product!=null)
					{!! Form::open(['method'=>'POST','action'=>'ProductController@EditProdukBaru','files'=>true]) !!}
				@else
				{!! Form::open(['method'=>'POST','action'=>'ProductController@TambahProdukBaru','files'=>true]) !!}
				@endif
					<table class="table table-striped table-bordered table-hover" id="table">


						
						<tbody>


							<tr>
								<td>Kode Produk : </td>
								<td><input type="text" name="id_product" class="form-control" value="@if($product!=null){{$product->id_product}}@endif" readonly></td>
							</tr>

							<tr>
								<td>Nama Produk : </td>
								<td><input type="text"  name="nama" class="form-control" value="@if($product!=null){{$product->nama}}@endif"></td>
							</tr>

							<tr>
								<td>Harga Normal: </td>
								<td><input type="text"  name="harga" class="form-control" value="@if($product!=null){{$product->harga}}@endif"></td>
							</tr>
							<tr>
								<td>Harga Reseller: </td>
								<td><input type="text"  name="harga_reseller" class="form-control" value="@if($product!=null){{$product->harga_reseller}}@endif"></td>
							</tr>
							<tr>
								<td>Keterangan : </td>
								<td><textarea  name="keterangan" class="form-control" id="keterangan" >@if($product!=null){{$product->keterangan}}@endif</textarea></td>
							</tr>
							<tr>
								<td>Deskripsi : </td>
								<td><textarea  name="deskripsi" class="form-control" id="deskripsi" >@if($product!=null){{$product->deskripsi}}@endif</textarea></td>
							</tr>
							<?php $gambar="avatar60x60.jpg";?>
							@if($product!=null)
							<tr>
								<td>Image : <img src="{{asset('/file/produk/'.$product->gambar)}}" height="100"></td>
								<td>Recommended Resolution (1140 x 500)<br><input id="file" type="file" name="file" style="margin-top:20px; width:200px;" onchange="validateImage(this,'control2')"></td>
							</tr>
								@else
								<tr>
									<td>Image : <img src="{{asset('/file/produk/'.$gambar)}}" height="100"></td>
									<td>Recommended Resolution (1140 x 500)<br><input id="file" type="file" name="file" style="margin-top:20px; width:200px;" onchange="validateImage(this,'control2')"></td>
								</tr>
							@endif
							

							
							<tr>
								
						</tbody>

					</table>

					
					<center>{!! Form::submit('Kirim',['class'=>'btn btn-primary']) !!}</center>

				{!! Form::close() !!}
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