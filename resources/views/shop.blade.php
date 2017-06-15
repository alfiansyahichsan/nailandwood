@extends('shared.layout')
@section('halaman')
Shop
@endsection
@section('content')
	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('img/shop/7.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div class="breadTxt">
                            <h1>
                                New Arrival 2017
                            </h1>
                            <p>
                                There's an old saying, 'That what doesn't kill you, makes you stronger' I don't believe that. <br> I think the things that try to kill you make you angry and sad. Strength comes<br> from the good things - your family, your friends,<br> the satisfaction of hard work.
                            </p>
                            <a href="#content" data-easing="easeInOutQuint" data-scroll="" data-speed="900" data-url="false">
                                View More <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START SHOP SECTION ================ -->
	<section class="aquraFilter padding" id="content">
	<div class="container">
	<!-- start blog-filter-category -->
			<div class="categories">
					<ul class="clearfix" data-option-key="filter">
						<li><a href="#"><i class="fa fa-filter"></i></a></li>
						<li> <a href="#" data-option-value=".apparel">Apparel</a></li>
						<li> <a href="#" data-option-value=".cd">Cd</a></li>
					</ul>
			</div><!--end categories-->
			<!-- end blog-filter-category -->
            <div class="yess container-fluid" style="margin-bottom: 70px;">
                <div class="row aqura-filter-content" style="padding-bottom:0!important;">
                    <div class="col-sm-12">
                        <div class="row">
                            <nav class="shop-products">
                                <ul class="clearfix">
                                    <li class="col-sm-4 apparel">
		                                <figure>
		                                    <figcaption>
		                                        <img src="img/shop/2.jpg" alt="">
		                                    </figcaption>
		                                    <div class="item content">
		                                        <div class="shopHover">
		                                            <div class="price">
		                                                &pound; 15,99
		                                            </div>
		                                            <div class="proTitle">
		                                                <a href="{{URL::route('detailshop')}}">Adidas</a>
		                                            </div>
		                                            <div class="product"></div>
		                                            <a href="{{URL::route('shop')}}" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
		                                             <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
		                                        </div>
		                                    </div>
		                                </figure>
		                            </li>
                                    <li class="col-sm-4 apparel">
		                                <figure>
		                                    <figcaption>
		                                        <img src="img/shop/3.jpg" alt="">
		                                    </figcaption>
		                                    <div class="content">
		                                        <div class="shopHover">
		                                            <div class="price">
		                                                &pound; 150000
		                                            </div>
		                                            <div class="proTitle">
		                                                <a href="shopSingle.html">Adidas</a>
		                                            </div>
		                                            <div class="product">Hoodie Aqura</div>
		                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
		                                             <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
		                                        </div>
		                                    </div>
		                                </figure>
		                            </li>
		                            <li class="col-sm-4 apparel">
		                                <figure>
		                                    <figcaption>
		                                        <img src="img/shop/4.jpg" alt="">
		                                    </figcaption>
		                                    <div class="content">
		                                        <div class="shopHover">
		                                            <div class="price">
		                                                &pound; 150000
		                                            </div>
		                                            <div class="proTitle">
		                                                <a href="shopSingle.html">Adidas</a>
		                                            </div>
		                                            <div class="product">Hoodie Aqura</div>
		                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
		                                             <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
		                                        </div>
		                                    </div>
		                                </figure>
		                            </li>
		                            <li class="col-sm-4 apparel">
		                                <figure>
		                                    <figcaption>
		                                        <img src="img/shop/4.jpg" alt="">
		                                    </figcaption>
		                                    <div class="content">
		                                        <div class="shopHover">
		                                            <div class="price">
		                                                &pound; 150000
		                                            </div>
		                                            <div class="proTitle">
		                                                <a href="shopSingle.html">Adidas</a>
		                                            </div>
		                                            <div class="product">Hoodie Aqura</div>
		                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
		                                             <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
		                                        </div>
		                                    </div>
		                                </figure>
		                            </li>
		                            <li class="col-sm-4 apparel">
		                                <figure>
		                                    <figcaption>
		                                        <img src="img/shop/2.jpg" alt="">
		                                    </figcaption>
		                                    <div class="content">
		                                        <div class="shopHover">
		                                            <div class="price">
		                                                &pound; 15,99
		                                            </div>
		                                            <div class="proTitle">
		                                                <a href="shopSingle.html">Original T. Brothers</a>
		                                            </div>
		                                            <div class="product">Hoodie Aqura</div>
		                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
		                                             <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
		                                        </div>
		                                    </div>
		                                </figure>
		                            </li>
		                            <li class="col-sm-4 apparel">
		                                <figure>
		                                    <figcaption>
		                                        <img src="img/shop/5.jpg" alt="">
		                                    </figcaption>
		                                    <div class="content">
		                                        <div class="shopHover">
		                                            <div class="price">
		                                                &pound; 15,99
		                                            </div>
		                                            <div class="proTitle">
		                                                <a href="shopSingle.html">Original T. Brothers</a>
		                                            </div>
		                                            <div class="product">Hoodie Aqura</div>
		                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
		                                             <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
		                                        </div>
		                                    </div>
		                                </figure>
		                            </li>

		                            <li class="col-sm-4 cd">
		                                <figure>
		                                    <figcaption>
		                                        <img src="img/shop/9.jpg" alt="">
		                                    </figcaption>
		                                    <div class="content">
		                                        <div class="shopHover">
		                                            <div class="price">
		                                                &pound; 35000
		                                            </div>
		                                            <div class="proTitle">
		                                                <a href="shopSingle.html">Adidas</a>
		                                            </div>
		                                            <div class="product">Hoodie Aqura</div>
		                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
		                                             <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
		                                        </div>
		                                    </div>
		                                </figure>
		                            </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- =============== END SHOP SECTION ================ -->
	
@endsection()