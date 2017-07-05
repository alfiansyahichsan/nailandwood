@extends('layouts.admin')


@section('judul')
Music - Page
@stop

@section('nav5')
class="active"
@stop


@section('js')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/meeepo.js')}}"></script>

@include("admin.musicpage.ajax")



@endsection

@section('konten')
<p>Form untuk input data Music di PAGE</p>
@if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

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
            <th>Title</th>
            <th>Release Date</th>
            <th>Label</th>
            <th>Format</th>
            <th colspan="3">Actions</th>
        </tr>
        {{ csrf_field() }}

        @foreach($musics as $mu)
          <tr class="item{{$mu->id}}">
              <td>{{ $mu->id }}</td>
              <td>{!! str_limit($mu->title,20) !!}</td>
              <td>{!! str_limit($mu->release,20) !!}</td>
              <td>{!! str_limit($mu->label,20) !!}</td>
              <td>{!! str_limit($mu->format) !!}</td>
              <td>

                <button class="edit-modal btn btn-primary" data-id="{{$mu->id}}" data-title="{{$mu->title}}" data-release="{{$mu->release}}" data-label="{{$mu->label}}" data-format="{{$mu->format}}">
                <span class="glyphicon glyphicon-edit"></span> Edit
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
                <h4 class="modal-title">Insert Data Slider</h4>
            </div>
            <div class="modal-body" style="padding-left: 30px; padding-right: 35px;">
                <form action="/admin/musics" method="POST" id="insert_form">
                {{ csrf_field() }}
                    <label>Title</label>
                    <input type="text" name="title" id="title" class="form-control" required></input>
                    <br />
                    <label>Release Date</label>
                    <input type="date" name="release" id="release" class="form-control" required></input>
                    <br />
                    <label>Label</label>
                    <input type="text" name="label" id="label" class="form-control" required />
                    <br />  
                    <label>Format</label>
                    <input type="text" name="format" id="format" class="form-control" required/>
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
                        <input type="text" class="form-control" id="q">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="release">Release Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="t">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="label">Label</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="d">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="format">Format</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="a">
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