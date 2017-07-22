@extends('shared.layouts')
@section('content')
@section('halaman')
Cart
@endsection

<section class="background-properties padding">
		<div class="tableEvents">
			<div class="container">
				<div class="row">
					<div class="col-sm-12" style="word-wrap: break-word;">
						<div class="sectionTitle paddingBottom">
							<span class="heading-t3"></span>
							<h2><a>Your Cart</a></h2>
							<span class="heading-b3"></span>
						</div><!-- end sectionTtile -->
						<table class="viewcarttable">
							<tr class="tableEventsTitle">
								<th>Item</th>
								<th>Description</th>
								<th>Quantity</th>
								<th>Price</th>
								<th></th>
							</tr>
                            <?php foreach (\App\Cart::Item() as $item) { ?>
							<tr>
								<td style="vertical-align: middle;"><a><img width="300" src="{{asset('/img/shop/'.\App\Shop::GambarProduk($item->id_product))}}"></a></td>
								<td style="padding: 0 15px 0 15px;"><br><a>{{\App\Shop::NamaProduk($item->id_product)}}</a><br>
								<a>{!! str_limit(\App\Shop::DetailProduk($item->id_product),20) !!}</a></td>

								<td><a>{{$item->jumlah}}</a></td>
								<td><a>Rp. {{number_format( \App\Shop::HargaProduk($item->id_product), 0 , '' , '.' )}}</a></td>
								<td class="aqura-vips"><a href="{{URL::route('cart.hapus', $item->id_product)}}">x</a></td>
							</tr>
                            <?php } ?>

						</table>
						<table class="sikat viewcarttable">
							<tr>
								<td><a>Total</a></td>
								<td style="float: right;"><a>Rp. {{number_format( \App\Cart::Total(), 0 , '' , '.' )}}</a></td>
							</tr>
						</table>
						<table>
							<td class="aqura-vip" style="float: right;border: none;"><a href="{{URL::route('checkout')}}">Checkout</a></td>
							<td class="aqura-vip" style="float: right;border: none; padding-right: 10px;"><a href="{{URL::route('shop')}}">Continue Shopping</a></td>
						</table>
					</div><!-- end col-sm-12 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end tableEvents -->
	</section>
@endsection