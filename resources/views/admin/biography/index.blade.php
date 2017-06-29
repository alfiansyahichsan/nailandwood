@extends('layouts.admin')


@section('judul')
Biography - Page
@stop

@section('nav11')
class="active"
@stop


@section('js')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/meeepo.js')}}"></script>
<script type="text/javascript" src="{{asset('/ckeditor/ckeditor.js')}}"></script>
<script>
     CKEDITOR.replace( 'editor1' );
     CKEDITOR.config.editor = [
        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
        { name: 'forms', groups: [ 'forms' ] },
        
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'biocks', 'align', 'bidi', 'paragraph' ] },
        { name: 'links', groups: [ 'links' ] },
        { name: 'insert', groups: [ 'insert' ] },
        { name: 'styles', groups: [ 'styles' ] },
        { name: 'colors', groups: [ 'colors' ] },
        { name: 'tools', groups: [ 'tools' ] },
        { name: 'others', groups: [ 'others' ] },
        { name: 'about', groups: [ 'about' ] }
    ];

    CKEDITOR.config.removeButtons = 'Save,biwPage,Preview,Print,Templates,PasteText,PasteFromWord,Replace,Find,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Button,Textarea,Select,ImageButton,HiddenField,RemoveFormat,Outdent,Indent,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Image,Flash,table,HorizontalRule,Iframe,PageBreak,Format,Maximize,About,Showbiocks';

</script>
@include("admin.biography.ajax")



@endsection

@section('konten')
<p>Form edit bio PAGE</p>
@if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p><br>

        </div>

    @endif

@if ($message = Session::get('hapus'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

  <div class="row">
    <div class="table-responsive">
      <table class="table table-borderless" id="table">
        <tr>
            <th>ID</th>
            <th>Text</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Phone</th>
            <th colspan="3">Actions</th>
        </tr>
        {{ csrf_field() }}

        @foreach($bio as $bi)
            <tr class="item{{$bi->id}}">
                <td>{{ $bi->id }}</td>
                <td>{{ $bi->text }}
                <td>{{ $bi->alamat }}
                <td>{{ $bi->email }}</td>
                <td>{{ $bi->phone }}</td>
                <td>

                <button class="edit-modal btn btn-primary" data-id="{{$bi->id}}" data-text="{{$bi->text}}" data-alamat="{{$bi->alamat}}" data-email="{{$bi->email}}" data-phone="{{$bi->phone}}">
                <span class="glyphicon glyphicon-edit"></span> Edit
                </button>

                </td>
            </tr>
        @endforeach
      </table>
    </div>
  </div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form">
            <div class="form-group">
                    <label class="control-label col-sm-2" for="id">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fid" disabled>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="text">Text</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="a" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="alamat">Alamat</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="b" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="c" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="phone">Phone</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="d" required> 
                    </div>
                </div>

          </form>
          <div class="modal-footer">
            <button type="button" class="btn actionBtn" data-dismiss="modal">
              <span id="footer_action_button" class='glyphicon'> </span>
            </button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">
              <span class='glyphicon glyphicon-remove'></span> Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
@stop