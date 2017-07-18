@extends('shared.layout')
@section('halaman')
Shop
@endsection
@section('content')
	<!-- =============== START BREADCRUMB ================ -->
	@foreach($slider as $s)
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url({{asset('img/header/'.$s->imagepathslider)}});" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div class="breadTxt">
                            <h1>
                                {{$s->title}}
                            </h1>
                            <p>
                                {!!$s->text!!}
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
	@endforeach
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
                                @foreach($shop as $sh)
                                @if($sh->category == 1)
                                    <li class="col-sm-3 apparel"  style="padding-bottom: 30px;">
                                @else
                                	<li class="col-sm-3 cd" style="padding-bottom: 30px;">
                                @endif
		                                <figure>
		                                    <figcaption>
		                                        <img src="{{asset('img/shop/'.$sh->imgpath)}}" alt="{{$sh->title}}" style="padding: 0 10px 0 10px;">
		                                    </figcaption>
		                                    <div class="item content">
		                                        <div class="shopHover">
		                                            <div class="price">
		                                                {{$sh->price}}
		                                            </div>
		                                            <div class="proTitle">
		                                                <a href="{{URL::route('detailshop',$sh->id)}}">{{$sh->title}}</a>
		                                            </div>
		                                            <div class="product"></div>
		                                            <a href="{{URL::route('shop')}}" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
		                                             <a href="{{URL::route('detailshop',$sh->id)}}" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
		                                        </div>
		                                    </div>
		                                </figure>
		                            </li>
                            	@endforeach
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