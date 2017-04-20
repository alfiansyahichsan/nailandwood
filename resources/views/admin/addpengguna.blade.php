<!--halaman untuk mengisi dan menambah reseller pada admin panel-->
@extends('layouts.admin')


@section('judul')
    Reseller
@stop

@section('nav7')
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
        CKEDITOR.config.editor = [// editor pada kolom pengisian teks
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
                Pengguna
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    @if($pengguna!=null)
                        {!! Form::open(['method'=>'POST','action'=>'UserController@EditPenggunaBaru']) !!}
                        <input type="hidden" name="id" value="{{ $pengguna->id }}">
                    @else
                        {!! Form::open(['method'=>'POST','action'=>'UserController@TambahPenggunaBaru']) !!}
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="table">



                        <tbody>


                        <tr>
                            <td>Nama : </td>
                            <td><input type="text" name="nama" class="form-control" value="@if($pengguna!=null){{$pengguna->nama}}@endif" ></td>
                        </tr>

                        <tr>
                            <td>Email : </td>
                            <td><input type="text"  name="email" class="form-control" value="@if($pengguna!=null){{$pengguna->email}}@endif"></td>
                        </tr>
                        <tr>
                            <td>Username: </td>
                            <td><input type="text"  name="username" class="form-control" value="@if($pengguna!=null){{$pengguna->username}}@endif"></td>
                        </tr>
                        @if($pengguna==null)
                        <tr>
                            <td>Password: </td>
                            <td><input type="text"  name="password" class="form-control" ></td>
                        </tr>
                        @endif
                        <tr>
                            <td>Alamat: </td>
                            <td><input type="text"  name="alamat" class="form-control" value="@if($pengguna!=null){{$pengguna->alamat}}@endif"></td>
                        </tr>
                        <tr>
                            <td>Telepon: </td>
                            <td><input type="text"  name="telepon" class="form-control" value="@if($pengguna!=null){{$pengguna->telepon}}@endif"></td>
                        </tr>
                        <tr>
                            <td>No KTP: </td>
                            <td><input type="text"  name="ktp" class="form-control" value="@if($pengguna!=null){{$pengguna->ktp}}@endif"></td>
                        </tr>




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

    <!-- /.row -->

    <br><br>

@stop