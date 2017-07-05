@extends('layouts.admin')


@section('judul')
Bank
@stop

@section('nav15')
class="active"
@stop


@section('js')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/meeepo.js')}}"></script>

@include("admin.bank.ajax")



@endsection

@section('konten')
<p>Bank</p>
@if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>
            <div>
                <img src="/img/gallery/{{ Session::get('imageName') }}" style="max-width: 300px; max-height: 300px; margin-right: 20px;" />               
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
            <th>Bank</th>
            <th>No Rek</th>
            <th>Nama</th>
            <th colspan="3">Actions</th>
        </tr>
        {{ csrf_field() }}
        
        @foreach($bank as $ab)
            <tr class="item{{$ab->id_bank}}">
                <td>{{ $ab->id_bank }}</td>
                <td><img src="{{asset('img/bank/'.$ab->gambar)  }}" width="300"></td>
                <td>{{ $ab->bank }}</td>
                <td>{{ $ab->norek }}</td>
                <td>{{ $ab->nama }}</td>
                <td>

                <button class="edit-modal btn btn-primary" data-id="{{$ab->id_bank}}" data-imgpath="{{$ab->gambar}}" data-bank="{{$ab->bank}}" data-norek="{{$ab->norek}}" data-nama="{{$ab->nama}}">
                <span class="glyphicon glyphicon-edit"></span> Edit
                </button>
                <button class="delete-modal btn btn-danger" data-id="{{$ab->id_bank}}" data-imgpath="{{$ab->gambar}}" data-bank="{{$ab->bank}}" data-norek="{{$ab->norek}}" data-nama="{{$ab->nama}}">
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
                <h4 class="modal-title">Insert Bank</h4>
            </div>
            <div class="modal-body" style="padding-left: 30px; padding-right: 35px;">
                <form action="{{URL::Route('bank')}}" method="POST" id="insert_form" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <label>Image</label>
                    <input type="file" name="imgpath" id="imgpath" class="form-control" required/>
                    <br />
                    <label>Bank</label>
                    <input type="text" name="bank" id="bank" class="form-control" required></input>
                    <br />
                    <label>No Rekening</label>
                    <input type="number" name="norek" id="norek" class="form-control" required></input>
                    <br />
                    <label>Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required></input>
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
                    <label class="control-label col-sm-2" for="imgpath">Image</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="a" disabled="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="bank">Bank</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="b">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="norek">No Rek</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="c">
                    </div>
                </div>
              <div class="form-group">
                  <label class="control-label col-sm-2" for="nama">Nama</label>
                  <div class="col-sm-10">
                      <input type="name" class="form-control" id="d">
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