@extends('layouts.admin')


@section('judul')
Stok
@stop

@section('nav6')
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
								<th>Jumlah</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>



							<input type="hidden" name="jmlp" value="0">

							<tr class="tr_clone"></tr>

							@foreach(\App\Product::SemuaProduk() as $stok)
							
							
							<tr>
								
							
									<td>{{$stok->id_product}}</td>

									<td>{{$stok->nama }}</td>
									<td>{{\App\Stok::JumlahStok($stok->id_product)}}</td>
									
									<td>

									<a href="{{URL::Route('admin.stock.tambah', $stok->id_product)}}"><input class="btn btn-warning" id="edit" type="button" value="Tambah"></a>
									

                                    <form id="delete" action="delete" method="POST" style="display: none;">
                                        
                                    </form>
										


										</td>
								</tr>
								@endforeach
								<td colspan="4">
								<center>

									<a href="{{ route('admin.stock.download') }}"><input type="submit" class="btn btn-primary" value="Cetak" id="cetak"></a>
                                </center>
                                </td>
							

							
											
						</tbody>

					</table>
						
						
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