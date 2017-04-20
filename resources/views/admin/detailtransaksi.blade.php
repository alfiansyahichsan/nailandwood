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

						{!! Form::open(['method'=>'POST','action'=>'AdminController@KonfirmasiTransaksi']) !!}
					<table class="table table-striped table-bordered table-hover" id="table">



						<tbody>


						<tr>
							<td>Id Transaksi : </td>
							<td><input type="text" name="order_id" class="form-control" value="@if($order!=null){{$order->id}}@endif" readonly></td>
						</tr>

						<tr>
							<td>Nama Pembeli : </td>
							<td><input type="text"  name="nama" class="form-control" value="@if($order!=null){{$order->nama}}@endif" readonly></td>
						</tr>

						<tr>
							<td>Alamat: </td>
							<td><textarea  name="alamat" class="form-control" readonly>@if($order!=null){{$order->alamat}}@endif</textarea></td>
						</tr>
						<tr>
							<td>Kota: </td>
							<td><input type="text"  name="kota" class="form-control" value="@if($order!=null){{$order->kota}}@endif" readonly></td>
						</tr>
						<tr>
							<td>Kode Pos : </td>
							<td><input type="text"  name="kodepos" class="form-control"  value="@if($order!=null){{$order->kodepos}}@endif" readonly></td>
						</tr>
						<tr>
							<td>Telepon : </td>
							<td><input type="text"  name="telepon" class="form-control" value="@if($order!=null){{$order->telepon}}@endif" readonly></td>
						</tr>
						<tr>
							<td>Status : </td>
							<td><input type="text" name="status" class="form-control" value="@if($order!=null){{$order->status}}@endif" readonly></td>
						</tr>




						</tbody>

					</table>



				</div>
				<!-- /.table-responsive -->
			</div>
			<!-- /.panel-body -->



		</div>


		<!-- /.panel -->
	</div>


	<!-- /.panel -->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">

				Item
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">


					<table class="table table-striped table-bordered table-hover" id="table">

						<thead>
						<tr>

							<th>Kode Produk</th>
							<th>Nama Produk</th>
							<th>Jumlah</th>
							<th>Total</th>

						</tr>
						</thead>
						<tbody>



						<tr class="tr_clone"></tr>


						<!--row di clone setiap kali ada produk yang berhasil ditambahkan-->
						@foreach(\App\OrderProduct::ReturnItem($order->id) as $pdt)
							<tr>

								<!--data diambil dari database-->
								<td>{{$pdt['id_product']}}</td>

								<td>{{\App\Product::NamaProduk($pdt['id_product'])}}</td>
								<td>{{$pdt['jumlah']}}</td>
								<td>{{$pdt['total']}}</td>

							</tr>
						@endforeach



						<tr>
							<td colspan="3">
								<center>
									Total
								</center>
							</td>
							<td>
								{{$order->total}}
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<center>
									Ongkir
								</center>
							</td>
							<td>
								{{$order->ongkir}}
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<center>
									Grand Total
								</center>
							</td>
							<td>
								{{$order->grandtotal}}
							</td>
						</tr>

						</tbody>

					</table>


				</div>
				<!-- /.table-responsive -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>


	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Konfirmasi Pembayaran
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover" id="table">



						<tbody>
						<?php $konfirmasi = \App\Konfirmasi::KonfirmasiOrder($order->id);  ?>


						<tr>
							<td>Tanggal : </td>
							<td><input type="text" name="tanggal" class="form-control" value="@if($konfirmasi!=null){{$konfirmasi->tanggal}}@endif" readonly></td>
						</tr>

						<tr>
							<td>Bank : </td>
							<td><input type="text"  name="bank" class="form-control" value="@if($konfirmasi!=null){{$konfirmasi->bank}}@endif" readonly></td>
						</tr>
						<tr>
							<td>Metode: </td>
							<td><input type="text"  name="metode" class="form-control" value="@if($konfirmasi!=null){{$konfirmasi->metode}}@endif" readonly></td>
						</tr>
						<tr>
							<td>Jumlah Transfer : </td>
							<td><input type="text"  name="transfer" class="form-control"  value="@if($konfirmasi!=null){{$konfirmasi->transfer}}@endif" readonly></td>
						</tr>
						<tr>
							<td>Bukti Transfer : </td>
							<td><img src="{{asset('/file/bukti/'.$konfirmasi->bukti)}}" height="400"></td>

						</tr>

						</tbody>

					</table>



				</div>
				<!-- /.table-responsive -->
			</div>
			<!-- /.panel-body -->



		</div>


		<!-- /.panel -->
	</div>

	<center>{!! Form::submit('Konfirmasi Transaksi',['class'=>'btn btn-primary']) !!}</center>

	{!! Form::close() !!}

	<br><br>

@stop