@extends('master')
@section('layout')
	<!-- =============== START TOP HEADER ================ -->
	<div class="row">
		<div class="topHeader col-md-12">
				<div class="header">
					<div class="rightTopHeader">
						<div class="cartContainer">
							<div class="myCart">
								<ul>
									<li class="cartTitle"><img src="img/shop/cart.png" alt=""><span>0</span></li>
								</ul>
							</div><!-- end myCart -->
							<div class="cartParent">
								<div class="cartItems">
									<ul>
										<li>
											<div class="priceCart">
												<img src="img/shop/cartContainer.png" alt="">
												<a href="#">Hoodie T.Brothers <!-- <span><i class="fa fa-times"></i></span> --></a>
												<p>Price:&nbsp;<span>&pound;15,99</span></p>
												<p class="quantity">Quantity: <span>1</span></p>
											</div>
										</li>
										<li>
											<div class="priceCart">
												<img src="img/shop/cartContainer.png" alt="">
												<a href="#">Hoodie T.Brothers <!-- <span><i class="fa fa-times"></i></span> --></a>
												<p>Price:&nbsp;<span>&pound;15,99</span></p>
												<p class="quantity">Quantity: <span>1</span></p>
											</div>						
										</li>
										<li>
											<div class="total">
												<a href="#">Sub Total<span>31,98&pound;</span></a>
											</div>
										</li>
									</ul>
									<button type="submit" class="single_add_to_cart_button button alt buttonView">
										<a href="{{URL::route('viewcart')}}">View Cart</a>				
									</button>
									<button type="submit" class="single_add_to_cart_button button alt buttonCheck">
										<a href="{{URL::route('checkout')}}">Checkout</a>
									</button>
								</div><!-- end cartItems -->
							</div><!-- end cartParent -->
						</div><!--end cartContainer  -->
						<!-- Open Menu Button -->
						<a class="open-menu">
							<!-- Buttons Bars -->
							<span class="span-1"></span>
							<span class="span-2"></span>
							<span class="span-3"></span>
						</a><!-- end rightTopHeader -->
				<!-- end header -->
				<!-- Menu Fixed Container -->
						<div class="menu-fixed-container">
							<!-- Menu Fixed Centred Container -->
							<nav>
								<!-- Menu Fixed Close Button -->
								<div class="x-filter">
									<span></span>
									<span></span>
								</div>
								<!-- Menu Fixed Primary List -->
								<ul>
									<!-- Menu Fixed Item -->
									<li>
										<a href="{{URL::route('home')}}">
											home
										</a>
									</li>
									<li>
										<a href="{{URL::route('music')}}">
											Music
										</a>
									</li>
									<!-- Menu Fixed Item -->
									<li>
										<a href="{{URL::route('events')}}">
											events
										</a>
									</li>
									<!-- Menu Fixed Item -->
									<li>
										<a href="{{URL::route('blog')}}">
											blog
										</a>
									</li>
									<!-- Menu Fixed Item -->
									<li>
										<a href="{{URL::route('gallery')}}">
											gallery
										</a>
									</li>
									<!-- Menu Fixed Item -->
									<li>
										<a href="{{URL::route('biography')}}">
											Biography
										</a>
									</li>
									<!-- Menu Fixed Sub Menu Item -->
									<li>
										<a href="{{URL::route('video')}}">
											Video
										</a>
									</li>
									<!-- Menu Fixed Item -->
									<li>
										<a href="contact.html">
											contact
										</a>
									</li>
									<!-- Menu Fixed Item -->
									<li>
										<a href="{{URL::route('shop')}}">
											shop
										</a>
									</li>
								</ul>
								<!-- Menu Fixed Close Button -->
								<div class="x-filter">
									<span></span>
									<span></span>
								</div>
							</nav>
						</div><!-- end menu-fixed-container -->
					</div>
				</div>
				<!-- =============== STAR LOGO ================ -->
				<div class="logo-container-top">
					<a href="{{URL::route('home')}}"><img src="img/logo/testpakukayu.png" alt="pakukayu"></a>
				</div><!-- end logo-container-top -->
				<!-- =============== END LOGO ================ -->
	</div><!-- end topHeader -->
	</div>
	<!-- =============== END TOP HEADER ================ -->
	
@yield('content')

<!-- =============== START FOOTER ================ -->
	<section style="background-color:#eeeeee;" class="hide-section">
		<div class="footer footerPadding">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="copyFooter">
							<a href="#">&copy; Paku dan Kayu 2017</a>
						</div>
					</div>
					<div class="col-sm-4">
						<nav class="social-icons">
							<ul class="clearfix">
								<li><a href="#" class="icon-button shopIcon"><i class="fa fa-twitter"></i><span></span></a></li>
								<li><a href="#" class="icon-button shopIcon"><i class="fa fa-facebook"></i><span></span></a></li>
								<li><a href="#" class="icon-button shopIcon"><i class="fa fa-apple"></i><span></span></a></li>
								<li><a href="#" class="icon-button shopIcon"><i class="fa fa-lastfm"></i><span></span></a></li>
								<li><a href="#" class="icon-button shopIcon"><i class="fa fa-soundcloud"></i><span></span></a></li>
								<li><a href="#" class="icon-button shopIcon"><i class="fa fa-youtube-play"></i><span></span></a></li>
								<li><a href="#" class="icon-button shopIcon"><i class="fa fa-vimeo"></i><span></span></a></li>  
							</ul>
						</nav>
					</div>
					<div class="col-sm-4">
						<div class="goTop back-to-top" id="back-to-top">
							<i class="fa fa-angle-up"></i>
							<a href="#">Go Top</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END FOOTER ================ -->
	
@endsection()