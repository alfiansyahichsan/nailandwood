@extends('layouts.admin')


@section('judul')
Transaksi
@stop

@section('nav14')
class="active"
@stop


@section('js')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/meeepo.js')}}"></script>

@include("admin.transaksi.ajax")



@endsection

@section('konten')
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

<h4>Transaksi Berhasil</h4>
  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Produk
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <div class="table-responsive">

                      {!! Form::open(['method'=>'POST','action'=>'TransaksiController@KonfirmasiTransaksi']) !!}
                      <table class="table table-striped table-bordered table-hover" id="table">



                          <tbody>


                          <tr>
                              <td>Id Transaksi : </td>
                              <td><input type="text" name="order_id" class="form-control" value="@if($order!=null){{$order->id}}@endif" readonly></td>
                          </tr>

                          <tr>
                              <td>Nama Pembeli : </td>
                              <td><input type="text"  name="nama" class="form-control" value="@if($order!=null){{$order->nama}}@endif" readonly></td>
                          </tr>

                          <tr>
                              <td>Alamat: </td>
                              <td><textarea  name="alamat" class="form-control" readonly>@if($order!=null){{$order->alamat}}@endif</textarea></td>
                          </tr>
                          <tr>
                              <td>Kota: </td>
                              <td><input type="text"  name="kota" class="form-control" value="@if($order!=null){{$order->kota}}@endif" readonly></td>
                          </tr>
                          <tr>
                              <td>Kode Pos : </td>
                              <td><input type="text"  name="kodepos" class="form-control"  value="@if($order!=null){{$order->kodepos}}@endif" readonly></td>
                          </tr>
                          <tr>
                              <td>Telepon : </td>
                              <td><input type="text"  name="telepon" class="form-control" value="@if($order!=null){{$order->telepon}}@endif" readonly></td>
                          </tr>
                          <tr>
                              <td>Status : </td>
                              <td><input type="text" name="status" class="form-control" value="@if($order!=null){{$order->status}}@endif" readonly></td>
                          </tr>




                          </tbody>

                      </table>



                  </div>
                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->



          </div>


          <!-- /.panel -->
      </div>


      <!-- /.panel -->
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">

                  Item
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <div class="table-responsive">


                      <table class="table table-striped table-bordered table-hover" id="table">

                          <thead>
                          <tr>

                              <th>Kode Produk</th>
                              <th>Nama Produk</th>
                              <th>Jumlah</th>
                              <th>Total</th>

                          </tr>
                          </thead>
                          <tbody>



                          <tr class="tr_clone"></tr>


                          <!--row di clone setiap kali ada produk yang berhasil ditambahkan-->
                          @foreach(\App\OrderProduct::ReturnItem($order->id) as $pdt)
                              <tr>

                                  <!--data diambil dari database-->
                                  <td>{{$pdt['id_product']}}</td>

                                  <td>{{\App\Shop::NamaProduk($pdt['id_product'])}}</td>
                                  <td>{{$pdt['jumlah']}}</td>
                                  <td>{{$pdt['total']}}</td>

                              </tr>
                          @endforeach



                          <tr>
                              <td colspan="3">
                                  <center>
                                      Total
                                  </center>
                              </td>
                              <td>
                                  {{$order->total}}
                              </td>
                          </tr>
                          <tr>
                              <td colspan="3">
                                  <center>
                                      Ongkir
                                  </center>
                              </td>
                              <td>
                                  {{$order->ongkir}}
                              </td>
                          </tr>
                          <tr>
                              <td colspan="3">
                                  <center>
                                      Grand Total
                                  </center>
                              </td>
                              <td>
                                  {{$order->grandtotal}}
                              </td>
                          </tr>

                          </tbody>

                      </table>


                  </div>
                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>


      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Konfirmasi Pembayaran
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <div class="table-responsive">

                      <table class="table table-striped table-bordered table-hover" id="table">



                          <tbody>
                          @if(!empty(\App\Konfirmasi::KonfirmasiOrder($order->id)))
                          <?php $konfirmasi = \App\Konfirmasi::KonfirmasiOrder($order->id);  ?>


                          <tr>
                              <td>Tanggal : </td>
                              <td><input type="text" name="tanggal" class="form-control" value="@if($konfirmasi!=null){{$konfirmasi->tanggal}}@endif" readonly></td>
                          </tr>

                          <tr>
                              <td>Bank : </td>
                              <td><input type="text"  name="bank" class="form-control" value="@if($konfirmasi!=null){{$konfirmasi->bank}}@endif" readonly></td>
                          </tr>
                          <tr>
                              <td>Metode: </td>
                              <td><input type="text"  name="metode" class="form-control" value="@if($konfirmasi!=null){{$konfirmasi->metode}}@endif" readonly></td>
                          </tr>
                          <tr>
                              <td>Jumlah Transfer : </td>
                              <td><input type="text"  name="transfer" class="form-control"  value="@if($konfirmasi!=null){{$konfirmasi->transfer}}@endif" readonly></td>
                          </tr>
                          <tr>
                              <td>Bukti Transfer : </td>
                              <td><img src="{{asset('/file/bukti/'.$konfirmasi->bukti)}}" height="400"></td>


                              @endif

                          </tbody>

                      </table>



                  </div>
                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->



          </div>


          <!-- /.panel -->
      </div>

      <center>{!! Form::submit('Konfirmasi Transaksi',['class'=>'btn btn-primary']) !!}</center>

      {!! Form::close() !!}

      <br><br>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
@stop