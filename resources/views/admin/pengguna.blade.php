@extends('layouts.admin')


@section('judul')
    Pengguna
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
            Pengguna
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
                            <th>Password</th>
                            <th>Telepon</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>



                        <tr class="tr_clone"></tr>



                        @foreach($pengguna as $pgg)
                            <tr>
                                <td>{{$pgg['id']}}</td>

                                <td>{{$pgg['nama']}}</td>
                                <td>{{$pgg['username']}}</td>
                                <td>{{$pgg['password']}}</td>
                                <td>{{$pgg['telepon']}}</td>
                                <td>

                                    <a href="{{URL::Route('admin.pengguna.edit', $pgg['id'])}}"><button type="button" class="btn btn-sm btn-warning">Edit</button></a>

                                    <a href="{{URL::Route('admin.pengguna.hapus', $pgg['id'])}}"><button type="button" class="btn btn-sm btn-danger">Hapus</button></a>

                                    <a href="{{URL::Route('admin.pengguna.reseller', $pgg['id'])}}"><button type="button" class="btn btn-sm btn-success">Jadi Reseller</button></a>


                                </td>
                            </tr>
                        @endforeach



                        <tr>
                            <td colspan="5">
                                <center>
                                    <a href="{{URL::Route('admin.pengguna.tambah')}}">
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

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Reseller
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
                            <th>Password</th>
                            <th>Telepon</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>



                        <tr class="tr_clone"></tr>



                        @foreach($reseller as $pgg)
                            <tr>
                                <td>{{$pgg['id']}}</td>

                                <td>{{$pgg['nama']}}</td>
                                <td>{{$pgg['username']}}</td>
                                <td>{{$pgg['password']}}</td>
                                <td>{{$pgg['telepon']}}</td>
                                <td>

                                    <a href="{{URL::Route('admin.pengguna.edit', $pgg['id'])}}"><button type="button" class="btn btn-sm btn-warning">Edit</button></a>

                                    <a href="{{URL::Route('admin.pengguna.hapus', $pgg['id'])}}"><button type="button" class="btn btn-sm btn-danger">Hapus</button></a>

                                    <a href="{{URL::Route('admin.pengguna.reseller.batal', $pgg['id'])}}"><button type="button" class="btn btn-sm btn-danger">Batal Reseller</button></a>



                                </td>
                            </tr>
                        @endforeach



                        <tr>
                            <td colspan="3">
                                <center>
                                    <a href="{{URL::Route('admin.pengguna.tambah')}}">
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