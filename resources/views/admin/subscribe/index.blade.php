@extends('layouts.admin')


@section('judul')
Subscriber
@stop

@section('nav18')
class="active"
@stop


@section('js')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/meeepo.js')}}"></script>
@include("admin.subscribe.ajax")



@endsection

@section('konten')

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
            <th>Email</th>
            <th>Created</th>
            <th colspan="3">Actions</th>
        </tr>
        {{ csrf_field() }}

        @foreach($subscribe as $v)
          <tr class="item{{$v->id}}">
              <td>{{ $v->id }}</td>
              <td>{{ $v->email,20 }}</td>
              <td>{{ $v->created_at }}</td>
              <td>

                <button class="delete-modal btn btn-danger" data-id="{{$v->id}}" data-email="{{$v->email}}" data-created="{{$v->created_at}}">
                <span class="glyphicon glyphicon-trash"></span> Delete
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
        
            <div class="deleteContent">
            Are you Sure you want to delete <span class="email"></span>?
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