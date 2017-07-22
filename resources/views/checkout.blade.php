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
						@if(count($errors) > 0)
							<div class="alert alert-warning" role="alert" style="text-align: center; margin: 0 auto;">
							    <strong>Error : </strong>
							    <ul>
							        @foreach($errors->all() as $error)
							        <li>{{ $error }}</li>
							        @endforeach
							    </ul>
							</div>
						@endif
					</div>

					<div class="singleBlogForm col-sm-12">
					<form action="/form" method="post" class="comment-form">
					{{ csrf_field() }}
						<div class="singleBlogForm col-sm-6" style="margin-top: -50px;">
							<h3 style="margin-bottom: 30px;">Your Details</h3>
								<input id="nama" name="nama" type="text" value="" aria-required="true" required placeholder="Nama...">
								<input id="telepon" name="telepon" type="text" value="" aria-required="true" required placeholder="Telepon...">
								<input id="email" name="email" type="text" value="" aria-required="true" required placeholder="Email...">

						</div>
						<div class="singleBlogForm col-sm-6" style="margin-top: -50px;">
							<h3 style="margin-bottom: 30px;">Shipping Address</h3>
								<textarea id="alamat" name="alamat" placeholder="Alamat..." rows="6" required></textarea>
								<input id="kota" name="kota" type="text" value="" placeholder="Kota...">
								<input id="kodepos" name="kodepos" type="text" value="" placeholder="Kode Pos..." required>

							<table>
								<td class="aqura-vips"  style="border: none;">
									<button class="button btn-continue" type="submit">Confirm Your Order</button>
								</td>
								<td class="aqura-vips" style="border: none;">
									<a href="{{URL::route('viewcart')}}" style="color: white;">Back to Cart</a>	
								</td>
							</table>
						</div>
					</form>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end tableEvents -->
</section>
@endsection