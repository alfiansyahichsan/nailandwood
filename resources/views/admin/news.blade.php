<!--halaman news pada admin-->
@extends('layouts.admin')


@section('judul')
News - Home
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
			News
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">

			
					<table class="table table-striped table-bordered table-hover" id="table">

						<thead>
							<tr>
								
								<th>Title</th>
								<th>Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>



							<input type="hidden" name="jmlp" value="0">

							<tr class="tr_clone"></tr>

							<!--row di clone setiap kali ada berita yang dtambahkan-->
							<?php
							$l = 0;
							?>

							@foreach($news as $ne)
							
							<tr>
								
							
									<td>{{$ne['title']}}</td>

									<td>{{$ne['date']}}</td>
									
									<td>

									<a href="#"><input class="btn btn-warning" id="edit" type="button" value="Edit"></a>

									<a href="#"
                                        onclick="hapus({{$ne['idnews']}})"><input class="btn btn-danger" id="delete" type="button" value="Hapus">                                  

                                    <form id="delete-form{{$ne['idnews']}}" action="#" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
										


										</td>
								</tr>
							@endforeach
							<tr>
								<td colspan="3">
									<center>
									<a href="#tn btn-default" id="add" value="Tambah">
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

	</div>
	<!-- /.row -->

	<br><br>

	@stop