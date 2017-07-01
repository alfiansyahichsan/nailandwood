@extends('shared.layouts')
@section('halaman')
    Detail Transaksi
@endsection
@section('content')
    <section class="background-properties padding">
        <div class="tableEvents">
            <div class="container">
                <div class="row">
                    <section class="main-container col1-layout bounceInUp animated">
                        <div class="main container">
                            <div style="float: left; width: 50%; padding: 0px">
                                <div class="page-title">
                                    <br/>
                                    <h2>Detail Transaksi</h2>
                                </div>
                                <fieldset style="margin-right: 30px">
                                    <div class="col-1 new-users">
                                        <div class="content">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td><label for="notranskasi"><h5>No Transaksi &nbsp </h5></label></td>
                                                    <td colspan="7" >: &nbsp {{$order->id}}</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="nama"><h5>Nama Lengkap &nbsp </h5></label></td>
                                                    <td colspan="7">: &nbsp {{$order->nama}}</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="Telepon"><h5>No Telepon &nbsp </h5> </label></td>
                                                    <td colspan="7">: &nbsp {{$order->telepon}}</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="email"><h5>Email &nbsp </h5> </label></td>
                                                    <td colspan="7">: &nbsp {{$order->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td><label for="nama"><h5>No Tagihan &nbsp </h5> </label><!--didapat dari jenis bank yg dipilih sebelumnya, no tagihan ini diinput di tabel bank pada admin panel--></td>
                                                    <td colspan="7">: &nbsp {{$order->id}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table class="data-table cart-table" id="shopping-cart-table">
                                                <thead>
                                                <tr class="first last">
                                                    <th rowspan="0">No</th>
                                                    <th rowspan="0">Product Name</th>
                                                    <th colspan="1" class="a-center"><span class="nobr">Harga</span></th>
                                                    <th class="a-center " rowspan="1">Qty</th>
                                                    <th colspan="1" class="a-center">Subtotal</th>

                                                </tr>
                                                </thead>
                                                <tfoot>
                                                <tr>
                                                    <td><h5>SubTotal &nbsp :</h5> </td>
                                                    <td><h5>Rp. {{number_format($order->total,0,',','.')}}</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>Ongkos Kirim &nbsp :</h5> </td>
                                                    <td><h5>Rp. {{number_format($order->ongkir,0,',','.')}}</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>GrandTotal &nbsp :</h5> </td>
                                                    <td><h5>Rp. {{number_format($order->grandtotal,0,',','.')}}</h5></td>
                                                </tr>
                                                @if(count(\App\Konfirmasi::KonfirmasiOrder($order->id))==0)
                                                    <tr class="first last">
                                                        <td class="a-right last" colspan="8">
                                                            <a href="{{URL::Route('order.hapus',$order->telepon)}}"> <button id="empty_cart_button" class="button" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span>Batal Transaksi</span></button></td>
                                                    </tr>
                                                @endif
                                                </tfoot>
                                                <tbody>
                                                <?php $i=1;?>
                                                @foreach(\App\OrderProduct::ReturnItem($order->id) as $item)

                                                    <tr class="first odd">
                                                        <td class="image">{{$i}}</td>
                                                        <td><h2 class="product-name">{{\App\Shop::NamaProduk($item->id_product) }}</h2></td>


                                                        <td class="a-center hidden-table"><span class="cart-price"> <span class="price">{{$item->harga}}</span> </span></td>
                                                        <td class="a-center movewishlist">{{$item->jumlah}}</td>
                                                        <td class="a-center movewishlist"><span class="cart-price"> <span class="price">{{$item->total}}</span> </span></td>

                                                    </tr>
                                                    <?php $i++; ?>
                                                @endforeach

                                                </tbody>
                                            </table>


                                        </div>
                                    </div>

                                </fieldset>
                            </div>
                            @if(count(\App\Konfirmasi::KonfirmasiOrder($order->id))==0)
                                <div  style="float: right; margin: 0; padding: 0; width: 50%">
                                    <div class="page-title">
                                        <br/>
                                        <h2>konfirmasi Pembayaran </h2>
                                    </div>
                                    <fieldset style="padding: 0;margin-top: 0">
                                        <div class="col-1 new-users">
                                            <div class="content">

                                                {!! Form::open(['method'=>'POST','action'=>'OrderController@KonfirmasiPembayaran','files'=>true]) !!}
                                                <div class="shipping">
                                                    <input type="hidden" name="order_id" id="order_id" value="{{$order->id}}">
                                                    <div class="shipping-form">
                                                        <ul class="form-list">
                                                            <li>
                                                                <label class="required" for="tanggalbayar"><em>*</em>Tanggal Pembayaran</label>
                                                                <input type="datetime" title="tanggalbayar" class="input-text" id="tanggalbayar" value="" name="tanggalbayar">
                                                            </li>
                                                            <li>
                                                                <label class="required" for="bank"><em>*</em>Bank Tujuan</label>
                                                                <select name="bank" title ="Bank" class="input-text" id="bank" value="" name="bank">
                                                                    @foreach(\App\Bank::Semua() as $bank)
                                                                        <option value="{{$bank->nama}}">{{$bank->nama}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </li>
                                                            <li>
                                                                <label class="required" for="metode"><em>*</em>Metode Transfer</label>
                                                                <select name="metode" title ="Metode" class="input-text" id="metode" value="" name="metode">
                                                                    <option value="ATM">ATM</option>
                                                                    <option value="Transfer Bank">Transfer Bank</option>
                                                                    <option value="Internet Banking">Internet Banking</option>
                                                                    <option value="Sms Banking">Sms Banking</option>
                                                                </select>
                                                            </li>
                                                            <li>
                                                                <label class="required" for="namapengirim"><em>*</em>Nama Pengirim/Pemilik Rekening</label>
                                                                <input type="text" title="nama pengirim" class="input-text" id="namapengirim" value="" name="namapengirim">
                                                            </li>
                                                            <li>
                                                                <label class="required" for="jumlah"><em>*</em>Jumlah Transfer</label>
                                                                <input type="text" title="jumlah" class="input-text" id="jumlah" value="" name="jumlah">
                                                            </li>
                                                            <li>
                                                                <label class="required" for="telp"><em>*</em>Nomor Telepon</label>
                                                                <input type="text" title="Telepon" class="input-text" id="telepon" value="" name="telepon">
                                                            </li>
                                                            <li>
                                                                <label class="required" for="file"><em>*</em>Upload Bukti</label>
                                                                <input type="file" title="Bukti" class="input-text" id="file" name="file" onchange="validateImage(this,'control2')">
                                                            </li>

                                                        </ul>
                                                        {!! Form::submit('Kirim',['class'=>'btn btn-primary']) !!}
                                                    </div>
                                                </div>

                                                {!! Form::close() !!}
                                                <br>


                                            </div>
                                        </div>

                                    </fieldset>
                                </div>
                            @else
                                <div  style="float: right; margin: 0; padding: 0; width: 50%">
                                    <div class="page-title">
                                        <h2>Status Pemesanan </h2>
                                    </div>
                                    <fieldset style="padding: 0;margin-top: 0">
                                        <div class="col-1 new-users">
                                            <div class="content">
                                                Pemesanan sedang di proses
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            @endif
                        </div>
                        <br>
                        <br>


                    </section>
                    <section class="main-container col1-layout bounceInUp animated">
                        <div class="main container">
                            <div class="page-title">
                                <h2>Rekening Pembayaran</h2>
                            </div>
                            @foreach(\App\Bank::Semua() as $bank)
                                <div class="col-sm-6">
                                    <h4>{{$bank->bank}}</h4>
                                    <p><img src="{{asset('img/bank/'.$bank->gambar)}}" width="200"></p>
                                    <p>Nomor Rekening &nbsp: {{$bank->norek}}</p>
                                    <p>Pemilik Rekening : {{$bank->nama}}</p>
                                </div>
                            @endforeach


                        </div>
                    </section>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end tableEvents -->
    </section>
@endsection