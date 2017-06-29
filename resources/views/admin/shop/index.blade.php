@extends('layouts.admin')


@section('judul')
Shop - Page
@stop

@section('nav12')
class="active"
@stop


@section('js')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/meeepo.js')}}"></script>

@include("admin.shop.ajax")



@endsection

@section('konten')
<p>Form untuk input gallery pada page Gallery</p>
@if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>
            <div>
                <img src="/img/shop/{{ Session::get('imageName') }}" style="max-width: 300px; max-height: 300px; margin-right: 20px;" />               
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
            <th>Title</th>
            <th>Detail</th>
            <th>Price</th>
            <th>Stok</th>
            <th>Category</th>
            <th colspan="3">Actions</th>
        </tr>
        {{ csrf_field() }}
        
        @foreach($shop as $sh)
            <tr class="item{{$sh->id}}">
                <td>{{ $sh->id }}</td>
                <td>{{ $sh->imgpath }}</td>
                <td>{{ $sh->title }}</td>
                <td>{{ $sh->detail }}</td>
                <td>{{ $sh->price }}</td>
                <td>{{ $sh->stok }}</td>
                <td>{{ $sh->category }}</td>
                <td>

                <button class="edit-modal btn btn-primary" data-id="{{$sh->id}}" data-imgpath="{{$sh->imgpath}}" data-title="{{$sh->title}}" data-detail="{{$sh->detail}}" data-price="{{$sh->price}}" data-stok="{{$sh->stok}}" data-category="{{$sh->category}}">
                <span class="glyphicon glyphicon-edit"></span> Edit
                </button>
                <button class="delete-modal btn btn-danger" data-id="{{$sh->id}}" data-imgpath="{{$sh->imgpath}}" data-title="{{$sh->title}}" data-detail="{{$sh->detail}}" data-price="{{$sh->price}}" data-stok="{{$sh->stok}}" data-category="{{$sh->category}}">
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
                <h4 class="modal-title">Insert Product</h4>
            </div>
            <div class="modal-body" style="padding-left: 30px; padding-right: 35px;">
                <form action="/admin/lshop" method="POST" id="insert_form" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <label>Image</label>
                    <input type="file" name="imgpath" id="imgpath" class="form-control" required/>
                    <br />
                    <label>Title</label>
                    <input type="text" name="title" id="title" class="form-control" required></input>
                    <br />
                    <label>Detail</label>
                    <input type="text" name="detail" id="detail" class="form-control" required></input>
                    <br />
                    <label>Price</label>
                    <input type="text" name="price" id="price" class="form-control" required></input>
                    <br />
                    <label>Stok</label>
                    <input type="text" name="stok" id="stok" class="form-control" required></input>
                    <br />
                    <label>Category</label>
                    <select type="textbutton" name="category" id="category" class="form-control" required>
                        <option value="0">--- Select ---</option>
                        <option value="1">Apparel</option>
                        <option value="2">CD</option>
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
                    <label class="control-label col-sm-2" for="imgpath">Image</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="a" disabled="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="title">Title</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="b">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="detail">Detail Product</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="c">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="price">Price</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="d">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="stok">Stok</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="e">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="category">Category</label>
                    <div class="col-sm-10">
                        <select type="textbutton" name="category" id="f" class="form-control" required>
                        <option value="0">--- Select ---</option>
                        <option value="1">Apparel</option>
                        <option value="2">CD</option>
                    </select>
                    </div>
                </div>

          </form>
            <div class="deleteContent">
            Are you Sure you want to delete <span class="title"></span> ?
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