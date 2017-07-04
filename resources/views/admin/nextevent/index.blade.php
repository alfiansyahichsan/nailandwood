@extends('layouts.admin')


@section('judul')
Next Event - Home
@stop

@section('nav6')
class="active"
@stop


@section('js')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/meeepo.js')}}"></script>

@include("admin.nextevent.ajax")



@endsection

@section('konten')
<p>Page untuk edit next event pada HOME</p>
@if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p><br>
            <div>
                <img src="/img/events/{{ Session::get('imageName') }}" style="max-width: 300px; max-height: 300px; margin-right: 20px;" />
                <img src="/img/events/{{ Session::get('imageName2') }}" style="max-width: 300px; max-height: 300px; margin-right: 20px;" />                
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
            <th>Background</th>
            <th>Logo</th>
            <th>Date</th>
            <th>Link</th>
            <th colspan="3">Actions</th>
        </tr>
        {{ csrf_field() }}

        @foreach($nevent as $ne)
            <tr class="item{{$ne->id}}">
                <td>{{ $ne->id }}</td>
                <td>{{ $ne->backgroundpic }}</td>
                <td>{{ $ne->logoeventpic }}</td>
                <td>{{ $ne->datemax }}</td>
                <td>{{ $ne->link }}</td>
                <td>

                <button class="edit-modal btn btn-primary" data-id="{{$ne->id}}" data-backgroundpic="{{$ne->backgroundpic}}" data-logoeventpic="{{$ne->logoeventpic}}" data-datemax="{{$ne->datemax}}" data-link="{{$ne->link}}">
                <span class="glyphicon glyphicon-edit"></span> Edit
                </button>
                <button class="delete-modal btn btn-danger" data-id="{{$ne->id}}" data-backgroundpic="{{$ne->backgroundpic}}" data-logoeventpic="{{$ne->logoeventpic}}" data-datemax="{{$ne->datemax}}" data-link="{{$ne->link}}"></span> Delete
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
                <h4 class="modal-title">Insert Data Music</h4>
            </div>
            <div class="modal-body" style="padding-left: 30px; padding-right: 35px;">
                <form action="/admin/nevent" method="POST" enctype="multipart/form-data" id="insert_form">
                {{ csrf_field() }}
                    <label>Background</label>
                    <input type="file" name="backgroundpic" id="backgroundpic" class="form-control" onChange="validateJPG(this)" />
                    <br />
                    <label>Logo Event</label>
                    <input type="file" name="logoeventpic" id="logoeventpic" class="form-control" onChange="validateJPG(this)" />
                    <br />
                    <label>Date</label>
                    <input type="date" name="datemax" id="datemax" class="form-control" required></input>
                    <br />
                    <label>Link</label>
                    <input type="tag" name="link" id="link" class="form-control" required></input>
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
                    <label class="control-label col-sm-2" for="backgroundpic">Background</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="a" disabled="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="logoeventpic">Logo Event</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="b" disabled="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="datemax">Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="c">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="link">Link</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="d">
                    </div>
                </div>

          </form>
            <div class="deleteContent">
            Are you Sure you want to delete <span class="datemax"></span> ?
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