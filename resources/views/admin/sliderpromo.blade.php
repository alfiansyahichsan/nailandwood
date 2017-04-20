@extends('layouts.admin')


@section('judul')
    Slider
@stop

@section('nav4')
    class="active"
@stop


@section('js')
    <script src="{{asset('js/meeepo.js')}}"></script>


    <script>

        $(function() {
            $("#update").click(function(){
                if (confirm("Update Data ?")){
                    $('form#formnya').submit();
                }
                else{event.preventDefault();}
            });
        });

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

    </script>

    <script>


        jQuery(function($) {



            var i = 1;
            $("#add").click(function(){

                var tr    = "<tr class='tr_clone'><input type='hidden' name='pidn"+i+"' value=''><input type='hidden' name='deletepn"+i+"' class='deletep' value='0'><td><input type='text' name='title"+i+"' class='form-control'></td><td><input type='text' name='subtitle"+i+"' class='form-control'></td><td><input type='text' name='header"+i+"' class='form-control'></td><td><input type='text' name='text"+i+"' class='form-control'></td><td><input type='text' name='link"+i+"' class='form-control'></td><td><input class='btn btn-danger' id='delete' type='button' value='Hapus'></td></tr>";

                $('.tr_clone:last').after(tr);
                $('input[name=jmlp]').val(i);
                i++;

            });
        });


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
                Slider
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">

                    <form method="POST" action="{{URL::Route('apsliderpromo')}}" id="formnya"  enctype="multipart/form-data">
                        <table class="table table-striped table-bordered table-hover" id="table">

                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Header</th>
                                <th>Text</th>
                                <th>Link</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>



                            <input type="hidden" name="jmlp" value="0">

                            <tr class="tr_clone"></tr>
                            <?php
                            $l = 0;
                            ?>

                            @foreach($slider as $sl)
                                <?php $l++; ?>
                                <tr class="tr_clone">
                                    <input type="hidden" name="pid{{$l}}" value="{{$sl['id_slider']}}">
                                    <input type="hidden" name="deletep{{$l}}" class="deletep" value="0">

                                    <td><input type="text" value="{{$sl['title']}}" name="title{{$l}}" class="form-control"></td>

                                    <td><input type="text" value="{{$sl['subtitle']}}" name="subtitle{{$l}}" class="form-control"></td>
                                    <td><input type="text" value="{{$sl['header']}}" name="header{{$l}}" class="form-control"></td>
                                    {{--<td>--}}
                                    {{--<select class="form-control" name="dark{{$l}}">--}}
                                    {{--<option value="yes" @if ($sl["dark"]=="yes") selected @endif>Dark</option>--}}
                                    {{--<option value="no" @if ($sl["dark"]=="yes") selected @endif>Light</option>--}}
                                    {{--</select>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                    {{--<select class="form-control" name="position{{$l}}">--}}
                                    {{--<option value="left" @if ($sl["position"]=="left") selected @endif>Left</option>--}}
                                    {{--<option value="mid" @if ($sl["position"]=="mid") selected @endif>Mid</option>--}}
                                    {{--<option value="right" @if ($sl["position"]=="right") selected @endif>Right</option>--}}
                                    {{--</select>--}}
                                    {{--</td>--}}
                                    <td>
                                        <input type="text" value="{{$sl['text']}}" name="text{{$l}}" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="{{$sl['link']}}" name="link{{$l}}" class="form-control">
                                    </td>
                                    <td>
                                        <input class="btn btn-danger" id="delete" type="button" value="Hapus"></td>
                                </tr>
                            @endforeach
                            <tr><td colspan="7"><center><input type="button" class="btn btn-default" id="add" value="Tambah"></center></td></tr>
                            <input type="hidden" name="jmll" value="{{$l}}">
                            </tbody>

                        </table>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <center><input type="submit" class="btn btn-primary" value="Update" id="update"></center>

                    </form>
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