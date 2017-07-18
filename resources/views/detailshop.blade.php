@extends('shared.layouts')
@section('halaman')
{{$shop->title}}
@endsection
@section('content')
	<!-- =============== START SHOP-SINGLE SECTION ================ -->
	<section class="paddingShopSingle">
		<div class="container">
			<div class="row">
				<div class="clothing">
					<div class="col-sm-7">
						<a href="{{asset('img/shop/'.$shop->imgpath)}}" class="lightbox"><img src="{{asset('img/shop/'.$shop->imgpath)}}" alt="{{$shop->title}}"></a>
					</div><!-- end col-sm-8 -->
				</div><!-- end clothing -->
				<div class="col-sm-5">
					<div class="productDetails">
						<nav>
							<a href="{{URL::route('shop')}}">Back to Shopping</a>
							<i class="fa fa-angle-double-right"></i>
							<a href="#">{{$shop->title}}</a>
						</nav>
						<h1>{{$shop->title}}</h1>
						<div class="productRating">
							<p class="price">Idr {{$shop->price}}</p>
						</div><!-- end productRating -->
						<table class="variations" >
							<tbody>
								<tr><td class="label"><label for="size">Size</label></td><td class="value"><select id="size" name="attribute_size" data-attribute_name="attribute_size"><option value="">Choose an option…</option> <option value="small" class="attached enabled">S</option><option value="medium" class="attached enabled">M</option><option value="large" class="attached enabled">L</option></select></td></tr><tr><td class="label"><label for="colors">Colors</label></td><td class="value"><select id="colors" name="attribute_colors" data-attribute_name="attribute_colors"><option value="">Choose an option…</option> <option value="black" class="attached enabled">Purple</option><option value="yellow" class="attached enabled">Rust-coloured</option></select></td></tr>
							</tbody>
						</table>
                        {!! Form::open(['method'=>'POST','action'=>'CartController@TambahCart']) !!}
                        <input type="hidden" name="book" value="{{$shop->id}}" />

						<div class="product-quantity woocommerce cart shop_table">
                            <div class="quantity buttons_added">
                                <input type="number" step="1" min="1" name="amount" value="1" title="Qty" class="input-text qty text">
                            </div>
                            <button class="single_add_to_cart_button button alt buttonTT">
                                Add to cart
                            </button>
                        </div><!-- end product-quantity -->
                        {!! Form::close() !!}
					</div><!-- end productDetails -->
				</div><!-- end col-sm-4 -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- =============== END SHOP-SINGLE SECTION ================ -->

	<!-- =============== START SHOP TAB ================ -->
	<section>
		<div class="shopTab">
			<div class="container">
				<div class="row">
                    <div class="col-sm-12">
                        <div>
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active firstTab"><a href="#home"  role="tab" data-toggle="tab">Description</a></li>
                          </ul>

                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">{!! $shop->detail !!}</div>
                          </div>
                        </div>
                    </div><!-- end col-sm-12 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end shopTap -->
	</section>
	<!-- =============== END SHOP TAB ================ -->

	<!-- =============== START SINGLE SHOP PRODUCTS ================ -->
	<section class="shopHomePage paddingTop" style="padding-bottom: 50px;">
		<div class="shopSection">
			<div class="container-fluid">
			<div class="shopContent">
				<div class="sectionTitle paddingBottom">
					<span class="heading-t3"></span>
					<h2><a href="{{URL::route('shop')}}">Other Product</a></h2>
					<span class="heading-b3"></span>
				</div><!-- end sectionTtile -->	
				<div class="row">
					<nav class="shop-products">
                        <ul class="clearfix">
                        @foreach($related as $r)
                            <li class="col-sm-3">
                                <figure>
                                    <figcaption">
                                        <img src="{{asset('img/shop/'.$r->imgpath)}}" alt="{{$r->title}}" style="padding: 0 10px 10px 10px;">
                                    </figcaption>
                                    <div class="content">
                                        <div class="shopHover">
                                            <div class="price">
                                                {{$r->price}}
                                            </div>
                                            <div class="proTitle">
                                                <a href="{{URL::route('detailshop',$r->id)}}">{{$r->title}}</a>
                                            </div>
                                            <a href="#" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
                                             <a href="{{URL::route('detailshop',$r->id)}}" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
                                        </div>
                                    </div>
                                </figure>
                            </li>
                        @endforeach
                        </ul>
                    </nav><!-- end shop-products -->
				</div><!-- end row -->
			</div><!-- end shopContent -->
		</div>
		</div>
	</section>
	<!-- =============== END SINGLE SHOP PRODUCTS ================ -->
@endsection()