@extends('layouts.admin')


@section('judul')
Playlist - Home/Page
@stop

@section('nav3')
class="active"
@stop


@section('js')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/meeepo.js')}}"></script>
@include("admin.playlist.ajax")



@endsection

@section('konten')
<p>Form untuk add playlist/lagu pada HOME/PAGE MUSIC</p>
@if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>
            <div>
                <img src="/img/player/{{ Session::get('imageName') }}" style="max-width: 300px; max-height: 300px; margin-right: 20px;" />               
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
            <th>Title</th>
            <th>Audio</th>
            <th>Image</th>
            <th colspan="3">Actions</th>
        </tr>
        {{ csrf_field() }}
        
        @foreach($playlist as $p)
            <tr class="item{{$p->id}}">
                <td>{{ $p->id }}</td>
                <td>{!! str_limit($p->title,20) !!}</td>
                <td>{!! str_limit($p->audiopath,20) !!}</td>
                <td>{!! str_limit($p->imgthumbnailpath,20) !!}</td>
                <td>

                <button class="edit-modal btn btn-primary" data-id="{{$p->id}}" data-title="{{$p->title}}" data-audiopath="{{$p->audiopath}}" data-imgthumbnailpath="{{$p->imgthumbnailpath}}">
                <span class="glyphicon glyphicon-trash"></span> Edit
                </button>
                <button class="delete-modal btn btn-danger" data-id="{{$p->id}}" data-title="{{$p->title}}" data-audiopath="{{$p->audiopath}}" data-imgthumbnailpath="{{$p->imgthumbnailpath}}">
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
                <h4 class="modal-title">Insert Audio</h4>
            </div>
            <div class="modal-body" style="padding-left: 30px; padding-right: 35px;">
                <form action="/admin/lplaylist" method="POST" id="insert_form" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <label>Title</label>
                    <input type="title" name="title" id="title" class="form-control" required></input>
                    <br />
                    <label>Audio</label>
                    <input type="file" name="audiopath" id="audiopath" class="form-control"></input>
                    <br />
                    <label>Image</label>
                    <input type="file" name="imgthumbnailpath" id="imgthumbnailpath" class="form-control" onChange="validateJPG(this)"/>
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
                    <label class="control-label col-sm-2" for="title">Title</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="a">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="audiopath">Audio</label>
                    <div class="col-sm-10">
                        <input type="name" name="audiopath" id="b" class="form-control" disabled=""></input> 
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="imgthumbnailpath">Image</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="c" disabled="">
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