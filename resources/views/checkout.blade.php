@extends('shared.layouts')
@section('halaman')
Checkout
@endsection
@section('content')
<section class="background-properties padding">
		<div class="tableEvents">
			<div class="container">
				<div class="row">
					<div class="col-sm-12" style="margin-top: 50px;">
						<div class="sectionTitle paddingBottom">
							<span class="heading-t3"></span>
							<h2><a>Checkout</a></h2>
							<span class="heading-b3"></span>
							<p style="padding-top: 50px;">Total Rp. {{number_format( \App\Cart::Total(), 0 , '' , '.' )}}</p>
						</div><!-- end sectionTtile -->
					</div>
					{!! Form::open(['method'=>'POST','action'=>'CartController@BuatOrder']) !!}
					<div class="singleBlogForm col-sm-6" style="margin-top: -50px;">
						<h3>Your Details</h3>

								<input id="nama" name="nama" type="text" value="" aria-required="true" required placeholder="Nama...">
								<input id="telepon" name="telepon" type="text" value="" aria-required="true" required placeholder="Telepon...">
								<input id="email" name="email" type="text" value="" aria-required="true" required placeholder="Email...">

					</div>
					<div class="singleBlogForm col-sm-6" style="margin-top: -50px;">
						<h3>Shipping Address</h3>
								<textarea id="alamat" name="alamat" placeholder="Alamat..." rows="6" required></textarea>
								<input id="kota" name="kota" type="text" value="" placeholder="Kota...">
								<input id="kodepos" name="kodepos" type="text" value="" placeholder="Kode Pos..." required></input>

								

							<table style="border: none;">
								<td class="aqura-vips" style="border: none;float:"><button class="button btn-continue" title="Continue Shopping" type="submit"><span>Confirm Your Order</span></button></td>
								<td class="aqura-vips" style="border: none;float: right;"><a href="{{URL::route('viewcart')}}">Back to Cart</a></td>
							</table>
					</div>
					{!! Form::close() !!}
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end tableEvents -->
</section>
@endsection