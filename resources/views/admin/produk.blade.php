<!--halaman untuk menampilkan produk2 yang ada-->
@extends('layouts.admin')


@section('judul')
Produk
@stop

@section('nav5')
class="active"
@stop


@section('js')


<script>

	

	function hapus(id){

		if (confirm("Hapus Data ?")){
				
        	document.getElementById('delete-form'+id).submit();
			}

		else{
			event.preventDefault();
		}
	
	}

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
			
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">

			
					<table class="table table-striped table-bordered table-hover" id="table">

						<thead>
							<tr>
								
								<th>Kode Produk</th>
								<th>Nama Produk</th>
								<th>Harga Normal</th>
								<th>Harga Reseller</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>



							<tr class="tr_clone"></tr>
							
								
								<!--row di clone setiap kali ada produk yang berhasil ditambahkan-->
								@foreach($products as $pdt)
									<tr>

									<!--data diambil dari database-->
									<td>{{$pdt['id_product']}}</td>

									<td>{{$pdt['nama']}}</td>
									<td>{{$pdt['harga']}}</td>
										<td>{{$pdt['harga_reseller']}}</td>
									<td>

										<a href="{{URL::Route('admin.produk.edit', $pdt['id_product'])}}"><button type="button" class="btn btn-sm btn-warning">Edit</button></a>

										<a href="{{URL::Route('admin.produk.hapus', $pdt['id_product'])}}"><button type="button" class="btn btn-sm btn-danger">Hapus</button></a>
										


										</td>
									</tr>
									@endforeach

							

							<tr>
								<td colspan="3">
									<center>
									<a href="{{URL::Route('admin.produk.tambah')}}">
										<input type="button" class="btn btn-default" id="add" value="Tambah">
									</a>
									</center>
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

	<!-- /.row -->

	<br><br>

	@stop