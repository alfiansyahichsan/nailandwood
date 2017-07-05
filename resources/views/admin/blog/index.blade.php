@extends('layouts.admin')


@section('judul')
Blog - Home
@stop

@section('nav12')
class="active"
@stop


@section('js')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/meeepo.js')}}"></script>
<script type="text/javascript" src="{{asset('/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'editor1' );
     CKEDITOR.replace( 'editor2' );
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

    CKEDITOR.config.removeButtons = 'Save,blwPage,Preview,Print,Templates,PasteText,PasteFromWord,Replace,Find,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Button,Textarea,Select,ImageButton,HiddenField,RemoveFormat,Outdent,Indent,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Image,Flash,Table,HorizontalRule,Iframe,PageBreak,Format,Maximize,About,ShowBlocks';

</script>
@include("admin.blog.ajax")



@endsection

@section('konten')
<p>Form edit Blog PAGE</p>
@if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p><br>
            <div>
                <img src="/img/blog/{{ Session::get('imageName') }}" style="max-width: 300px; max-height: 300px; margin-right: 20px;" />               
            </div>

        </div>

    @endif

@if ($message = Session::get('hapus'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
<div class="row">
    <div class="col-md-12">
        <div align="left" style=" margin-bottom: 20px;">
            <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add</button>
        </div>
    </div>
</div>

  <div class="row">
    <div class="table-responsive">
      <table class="table table-borderless" id="table">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Link Video</th>
            <th>Title</th>
            <th>Text</th>
            <th>Category</th>
            <th colspan="3">Actions</th>
        </tr>
        {{ csrf_field() }}

        @foreach($blogs as $bl)
            <tr class="item{{$bl->id}}">
                <td>{{ $bl->id }}</td>
                <td>{!! str_limit($bl->imgpath,20) !!}</td>
                <td>{!! str_limit($bl->linkvideo,20) !!}</td>
                <td>{!! str_limit($bl->title,20) !!}</td>
                <td>{!! str_limit($bl->text,20) !!}</td>
                <td>{{ $bl->category }}</td>
                <td>

                <button class="edit-modal btn btn-primary" data-id="{{$bl->id}}" data-imgpath="{{$bl->imgpath}}" data-linkvideo="{{$bl->linkvideo}}" data-title="{{$bl->title}}" data-text="{{$bl->text}}" data-category="{{$bl->category}}">
                <span class="glyphicon glyphicon-edit"></span> Edit
                </button>
                <button class="delete-modal btn btn-danger" data-id="{{$bl->id}}" data-imgpath="{{$bl->imgpath}}" data-linkvideo="{{$bl->linkvideo}}" data-title="{{$bl->title}}" data-text="{{$bl->text}}" data-category="{{$bl->category}}">
                <span class="glyphicon glyphicon-trash"></span> Delete
                </button>

                </td>
            </tr>
        @endforeach
      </table>
    </div>
  </div>

<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Insert Data Blog</h4>
            </div>
            <div class="modal-body" style="padding-left: 30px; padding-right: 35px;">
                <form action="/admin/blog" method="POST" enctype="multipart/form-data" id="insert_form">
                {{ csrf_field() }}
                    <label>Image</label>
                    <input type="file" name="imgpath" id="imgpath" class="form-control" onChange="validateJPG(this)" />
                    <br />
                    <label>Link Video</label>
                    <input type="text" name="linkvideo" id="linkvideo" class="form-control" />
                    <br />
                    <label>Title</label>
                    <input type="text" name="title" id="title" class="form-control" required></input>
                    <br />
                    <label>Text</label>
                    <textarea type="text" name="text" id="editor1" class="form-control" required></textarea>
                    <br />
                    <label>Category</label>
                    <select type="textbutton" name="category" id="category" class="form-control" required>
                        <option value="0">--- Select ---</option>
                        <option value="1">Image Post</option>
                        <option value="2">Video Post</option>
                    </select>
                    <br />

                    <input type="submit" value="Submit" class="btn btn-success" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
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
                        <input type="text" class="form-control" id="fid" disabled="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="imagepath">Image</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="a" disabled="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="linkvideo">Link Video</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="b" disabled="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="title">Title</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="c">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="text">Text</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="editor2"> 
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="category">Category</label>
                    <div class="col-sm-10">
                    <select type="textbutton" name="category" id="e" class="form-control" required>
                        <option value="0">--- Select ---</option>
                        <option value="1">Image Post</option>
                        <option value="2">Video Post</option>
                    </select>
                    </div>
                </div>

          </form>
            <div class="deleteContent">
            Are you Sure you want to delete ?
            <span class="hidden id"></span>
          </div>
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