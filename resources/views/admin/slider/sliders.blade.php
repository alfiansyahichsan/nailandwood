@extends('layouts.admin')


@section('judul')
Slider - Home
@stop

@section('nav2')
class="active"
@stop


@section('js')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/meeepo.js')}}"></script>

@include("admin.slider.ajax")



@endsection

@section('konten')
<p>Ganti gambar dan text pada slider HOME</p>
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
        <div align="left" style="margin-bottom: 20px;">
            <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add</button>
        </div>
    </div>
</div>

  <div class="row">
    <div class="table-responsive">
      <table class="table table-borderless" id="table">
        <tr>
            <th>ID</th>
            <th>Image Path</th>
            <th>Text</th>
            <th>Text Button</th>
            <th colspan="3">Actions</th>
        </tr>
        {{ csrf_field() }}

        <?php $no=1; ?>
        @foreach(\App\Slider::imageSlider() as $slider)
          <tr>
              <td>{{$no++}}</td>
              <td>{{ $slider->imagepathslider }}</td>
              <td>{{ $slider->text }}</td>
              <td>{{ $slider->textbutton }}</td>
              <td>
              <button class="edit-modal btn btn-primary" data-id="{{$slider->id}}" data-imagepathslider="{{$slider->imagepathslider}}" data-text="{{$slider->text}}" data-textbutton="{{$slider->textbutton}}">Edit
              </button>
              <button class="btn btn-danger" role="button" data-toggle="modal" data-target="#modal-delete">Delete
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
                <form action="/admin/slider" method="POST" id="insert_form">
                {{ csrf_field() }}
                    {!! Form::file('image', array('class' => 'image')) !!}
                    <br />
                    <label>Text</label>
                    <input type="text" name="text" id="text" class="form-control" required></input>
                    <br />
                    <label>Text Button</label>
                    <input type="text" name="textbutton" id="textbutton" class="form-control" required></input>
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
            {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="id">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fid" disabled="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="imagepathslider">Image Path</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="q">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="text">Text</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="t">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="textbutton">Text Button</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="d">
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

{{-- Confirm Delete --}}
    <div class="modal fade" id="modal-delete" tabIndex="-1">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Please Confirm</h4>
            </div>
            <div class="modal-body" style="padding-left: 30px; padding-right: 35px;">
                <p>  
                    Are you sure you want to delete this data ?
                </p>
          </div>
          <div class="modal-footer">
            <form method="POST" action="{{ route('slider.destroy', $slider->id) }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="DELETE">
              <button type="button" class="btn btn-default"
                      data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">
                <i class="fa fa-times-circle"></i> Yes
              </button>
            </form>
            </div>
        </div>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

@endsection