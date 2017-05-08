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
							<p style="padding-top: 50px;">Total Idr 250.000</p>
						</div><!-- end sectionTtile -->
					</div>
					<div class="singleBlogForm col-sm-6" style="margin-top: -50px;">
						<h3>Your Details</h3>
							<form action="#" method="post" class="comment-form">
								<input id="author" name="author" type="text" value="" aria-required="true" required placeholder="Name...">
								<input id="author" name="author" type="text" value="" aria-required="true" required placeholder="Email...">
								<input id="author" name="author" type="text" value="" aria-required="true" required placeholder="Phone...">
							</form>
					</div>
					<div class="singleBlogForm col-sm-6" style="margin-top: -50px;">
						<h3>Shipping Address</h3>
							<form action="#" method="post" class="comment-form">
								<input id="url" name="url" type="text" value="" placeholder="City...">
								<input id="url" name="url" type="text" value="" placeholder="Address..." required></input>
								<input id="email" name="email" type="text" value="" aria-required="true" required placeholder="Country...">
								<textarea name="comment" placeholder="Remarks..." rows="6" required></textarea>
								
							</form>
							<table style="border: none;">
								<td class="aqura-vips" style="border: none;float:"><a href="">Confirm Your Order</a></td>
								<td class="aqura-vips" style="border: none;float: right;"><a href="{{URL::route('viewcart')}}">Back to Cart</a></td>
							</table>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end tableEvents -->
</section>
@endsection