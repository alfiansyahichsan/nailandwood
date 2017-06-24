@extends('layouts.admin')


@section('judul')
Event - Home
@stop

@section('nav4')
class="active"
@stop


@section('js')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/meeepo.js')}}"></script>

@include("admin.event.ajax")



@endsection

@section('konten')
<p>Form untuk input data Event yang akan ditampilkan pada tampilan HOME</p>
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
            <th>Date</th>
            <th>Event Name</th>
            <th>Venue</th>
            <th>Location</th>
            <th>Ticket</th>
            <th>Link</th>
            <th colspan="3">Actions</th>
        </tr>
        {{ csrf_field() }}

        @foreach($event as $acara)
          <tr class="item{{$acara->id}}">
              <td>{{ $acara->id }}</td>
              <td>{{ $acara->date }}</td>
              <td>{{ $acara->eventname }}</td>
              <td>{{ $acara->venue }}</td>
              <td>{{ $acara->location }}</td>
              <td>{{ $acara->tickets }}</td>
              <td>{{ $acara->link }}</td>
              <td>

                <button class="edit-modal btn btn-primary" data-id="{{$acara->id}}" data-date="{{$acara->date}}" data-eventname="{{$acara->eventname}}" data-venue="{{$acara->venue}}" data-location="{{$acara->location}}" data-tickets="{{$acara->tickets}}" data-link="{{$acara->link}}">
                <span class="glyphicon glyphicon-edit"></span> Edit
                </button>
                <button class="delete-modal btn btn-danger" data-id="{{$acara->id}}" data-date="{{$acara->date}}" data-eventname="{{$acara->eventname}}" data-venue="{{$acara->venue}}" data-location="{{$acara->location}}" data-tickets="{{$acara->tickets}}" data-link="{{$acara->link}}">
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
                <h4 class="modal-title">Insert Data Slider</h4>
            </div>
            <div class="modal-body" style="padding-left: 30px; padding-right: 35px;">
                <form action="/admin/acara" method="POST" id="insert_form">
                {{ csrf_field() }}
                    <label>Date</label>
                    <input type="date" name="date" id="date" class="form-control" required/>
                    <br />
                    <label>Event Name</label>
                    <input type="eventname" name="eventname" id="eventname" class="form-control" required></input>
                    <br />
                    <label>Venue</label>
                    <input type="venue" name="venue" id="venue" class="form-control" required></input>
                    <br />
                    <label>Location</label>
                    <input type="location" name="location" id="location" class="form-control" required />
                    <br />  
                    <label>Ticket/Free</label>
                    <input type="tickets" name="tickets" id="tickets" class="form-control" required/>
                    <br />
                    <label>Link</label>
                    <input type="link" name="link" id="link" class="form-control" />
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
                    <label class="control-label col-sm-2" for="date">Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="q">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="eventname">Event Name</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="t">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="venue">Venue</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="d">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="location">Location</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="a">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="tickets">Tickets/Free</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="s">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="link">Link</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="e">
                    </div>
                </div>
          </form>
            <div class="deleteContent">
            Are you Sure you want to delete <span class="eventname"></span> ?
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