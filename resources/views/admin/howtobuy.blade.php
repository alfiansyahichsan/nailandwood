<!--halaman untuk mengisi konten how to buy-->
@extends('layouts.admin')


@section('judul')
    How To Buy
@stop

@section('nav6')
    class="active"
@stop


@section('js')

    <script type="text/javascript" src="{{asset('/ckeditor/ckeditor.js')}}"></script>
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
                How To Buy
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">

                    <form method="POST" action="{{URL::Route('admin.howtobuy.post')}}" id="formnya" files="true" enctype="multipart/form-data">
                        <table class="table table-striped table-bordered table-hover" id="table">


                            <tbody>

                            <input type="hidden" name="pid" value="">




                            <tr>
                                <td>Content : </td>
                                <td><textarea  name="content" class="form-control" id="editor1">{!! $pages['content'] !!}</textarea></td>
                            </tr>







                            <tr>

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

    </div>
    <!-- /.row -->

    <br><br>

@stop