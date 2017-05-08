@extends('shared.layouts')
@section('content')
@section('halaman')
Cart
@endsection

<section class="background-properties padding">
		<div class="tableEvents">
			<div class="container">
				<div class="row">
					<div class="col-sm-12" style="margin-top: -50px;">
						<div class="sectionTitle paddingBottom">
							<span class="heading-t3"></span>
							<h2><a>Your Cart</a></h2>
							<span class="heading-b3"></span>
						</div><!-- end sectionTtile -->
						<table style="margin-top: -50px;">
							<tr class="tableEventsTitle">
								<th class="date">Item</th>
								<th class="venue">Description</th>
								<th class="location">Size</th>
								<th class="tickets">Quantity</th>
								<th></th>
								<th class="tickets">Price</th>
								<th class="tickets"></th>
							</tr>
							<tr>
								<td><a style="max-height: 200px; max-width: 200px;"><img src="img/shop/1.jpg"></a></td>
								<td><a>Black T-Shirt with Air Jordan's Logo on it</a></td>
								<td><a>XL</a></td>
								<td><a>100</a></td>
								<td></td>
								<td><a>5.000.000</a></td>
								<td class="aqura-vip" style="float: right;border: none;"><a href="#">X</a></td>
							</tr>
							<tr>
								<td><a style="max-height: 200px; max-width: 200px;"><img src="img/shop/1.jpg"></a></td>
								<td><a>Black T-Shirt with Air Jordan's Logo on it</a></td>
								<td><a>XL</a></td>
								<td><a>100</a></td>
								<td></td>
								<td><a>5.000.000</a></td>
								<td class="aqura-vip" style="float: right;border: none;"><a href="#">X</a></td>
							</tr>
						</table>
						<table class="sikat">
							<tr>
								<td><a>Total</a></td>
								<td style="float: right;"><a>IDR 5.000.000</a></td>
							</tr>
						</table>
						<table>
							<td class="aqura-vips" style="float: right;border: none;"><a href="{{URL::route('checkout')}}">Checkout</a></td>
							<td class="aqura-vips" style="float: right;border: none;"><a href="{{URL::route('shop')}}">Continue Shopping</a></td>
						</table>
					</div><!-- end col-sm-12 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end tableEvents -->
	</section>
@endsection