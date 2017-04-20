@extends('layouts.admin')


@section('judul')
Transaksi
@stop

@section('nav8')
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
			Transaksi Pending
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">

			
					<table class="table table-striped table-bordered table-hover" id="table">

						<thead>
							<tr>
								
								<th>ID Transaksi</th>
								<th>Tanggal</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Telepon</th>
								<th>Status</th>
								<th>GrandTotal</th>

								<th>Action</th>
							</tr>
						</thead>
						<tbody>




							<tr class="tr_clone"></tr>
							
							@foreach(\App\Order::TransaksiPending() as $trp)
							<tr>
									<td>{{$trp->id}}</td>
									<td>{{date_format($trp->created_at,"d F Y")}}</td>
									<td>{{$trp->nama}}</td>
									<td>{{$trp->alamat }}</td>
									<td>{{$trp->telepon}}</td>
									<td>{{$trp->status}}</td>
									<td>{{$trp->grandtotal}}</td>
									<td>
										@if(count(\App\Konfirmasi::KonfirmasiOrder($trp->id))>0)
											<a href="{{URL::Route('admin.transaksi.detail', $trp->id)}}">
												<button class="btn btn-sm btn-primary">Lihat Bukti</button>
											</a>
									@endif
									</td>
									
								</tr>
						@endforeach
											
						</tbody>
						<td colspan="8">
							<center>
								<a href="{{ route('transaksi.pending.download') }}">
                                <input type="submit" class="btn btn-primary" value="Cetak" id="cetak">
									</a>
                            </center>
                        </td>

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
			Transaksi Berhasil
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">


				<table class="table table-striped table-bordered table-hover" id="table">

					<thead>
					<tr>

						<th>ID Transaksi</th>
						<th>Tanggal</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Status</th>
						<th>GrandTotal</th>

					</tr>
					</thead>
					<tbody>




					<tr class="tr_clone"></tr>

					@foreach(\App\Order::TransaksiSelesai() as $trp)
						<tr>
							<td>{{$trp->id}}</td>
							<td>{{date_format($trp->created_at,"d F Y")}}</td>
							<td>{{$trp->nama}}</td>
							<td>{{$trp->alamat }}</td>
							<td>{{$trp->telepon}}</td>
							<td>{{$trp->status}}</td>
							<td>{{$trp->grandtotal}}</td>
						</tr>
					@endforeach

					</tbody>
					<td colspan="8">
							<center>
								<a href="{{ route('transaksi.download') }}">
                                <input type="submit" class="btn btn-primary" value="Cetak" id="cetak">
									</a>
                            </center>
                        </td>
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