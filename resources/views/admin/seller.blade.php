<!--halaman ini menampilkan reseller2 yang telah terdaftar-->
@extends('layouts.admin')


@section('judul')
    Reseller
@stop

@section('nav7')
    class="active"
@stop


@section('js')


    <script>


        //fungsi untuk menghapus data
        function hapus(id){

            if (confirm("Hapus Data ?")){

                document.getElementById('delete-form'+id).submit();//perintah untuk menghapus data berdasarkan id nya
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
            Seller
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">


                    <table class="table table-striped table-bordered table-hover" id="table">

                        <thead>
                        <tr>

                            <th>Id</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>



                        <tr class="tr_clone"></tr>


                        <!--row diclone setiap kali ada reseller yang berhasil ditambahkan-->
                        @foreach($pengguna as $pgg)
                            <tr>
                                <!--data yang ditampilkan diambil dari database-->
                                <td>{{$pgg['id']}}</td>

                                <td>{{$pgg['nama']}}</td>
                                <td>{{$pgg['username']}}</td>
                                <td>{{$pgg['alamat']}}</td>
                                <td>{{$pgg['telepon']}}</td>
                                <td>

                                    <a href="{{URL::Route('admin.reseller.edit', $pgg['id'])}}"><button type="button" class="btn btn-sm btn-warning">Edit</button></a>

                                    <a href="{{URL::Route('admin.reseller.hapus', $pgg['id'])}}"><button type="button" class="btn btn-sm btn-danger">Hapus</button></a>

                                    @if($pgg['role']=="0")
                                    <a href="{{URL::Route('admin.reseller.reseller', $pgg['id'])}}"><button type="button" class="btn btn-sm btn-success">Aktifkan</button></a>
                                    @elseif($pgg['role']=="1")
                                        <a href="{{URL::Route('admin.reseller.reseller.batal', $pgg['id'])}}"><button type="button" class="btn btn-sm btn-info">Non Aktifkan</button></a>
                                        @endif

                                </td>
                            </tr>
                        @endforeach



                        <tr>
                            <td colspan="6">
                                <center>
                                    <a href="{{URL::Route('admin.reseller.tambah')}}">
                                        <input type="button" class="btn btn-default" id="add" value="Tambah">
                                    </a>
                                    <a href="{{ route('reseller.download') }}">
                                        <input type="submit" class="btn btn-primary" value="Cetak" id="cetak">
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