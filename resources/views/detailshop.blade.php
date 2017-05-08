@extends('shared.layouts')
@section('content')
	<!-- =============== START SHOP-SINGLE SECTION ================ -->
	<section class="paddingShopSingle">
		<div class="container">
			<div class="row">
				<div class="clothing">
					<div class="col-sm-7 ">
						<a href="img/shop/SingleShopProduct.png" class="lightbox"><img src="img/shop/singleShopProduct.png" alt=""></a>
                         <div class="products">
                            <a href="img/shop/smallProduct.png" class="lightbox"><img src="img/shop/smallProduct.png" alt=""></a>
                            <a href="img/shop/smallProduct.png" class="lightbox"><img src="img/shop/smallProduct.png" alt=""></a>
                        </div><!-- end products -->
					</div><!-- end col-sm-8 -->
				</div><!-- end clothing -->
				<div class="col-sm-5">
					<div class="productDetails">
						<nav>
							<a href="#">Back to Shopping</a>
							<i class="fa fa-angle-double-right"></i>
							<a href="#">Air Jordan</a>
						</nav>
						<h1>Air Jordan</h1>
						<div class="productRating">
							
							<div class="starRate">
								<a href="#" class="review">1 Review</a>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<p class="price">£ 15.99</p>
						</div><!-- end productRating -->
						<table class="variations" >
							<tbody>
								<tr><td class="label"><label for="size">Size</label></td><td class="value"><select id="size" name="attribute_size" data-attribute_name="attribute_size"><option value="">Choose an option…</option> <option value="small" class="attached enabled">S</option><option value="medium" class="attached enabled">M</option><option value="large" class="attached enabled">L</option></select></td></tr><tr><td class="label"><label for="colors">Colors</label></td><td class="value"><select id="colors" name="attribute_colors" data-attribute_name="attribute_colors"><option value="">Choose an option…</option> <option value="black" class="attached enabled">Purple</option><option value="yellow" class="attached enabled">Rust-coloured</option></select></td></tr>
							</tbody>
						</table>
						<div class="product-quantity woocommerce cart shop_table">
                            <div class="quantity buttons_added">
                                <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text">
                            </div>
                            <button class="single_add_to_cart_button button alt buttonTT">
                                Add to cart
                            </button>
                        </div><!-- end product-quantity -->
						<div class="productMeta"> 
							<span class="skuWrapper">SKU: <span class="sku">15121993</span>.</span>
							<div class="meta-list">
								<span class="metaListHead">Category: </span><a href="#">Hoodie unisex, Original T.Brothers.</a>
							</div>
							<div class="metaList">
								<span class="metaListSpan">Tagged with: </span><a href="#">bookend,</a> <a href="#" rel="tag">furniture,</a> <a href="#">home</a>
							</div>
						</div><!-- end productMeta -->
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
                            <li role="presentation"><a href="#reviews" class="reviews"  role="tab" data-toggle="tab">Reviews ( 0 )</a></li>
                          </ul>

                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis optio ex quisquam quis. Explicabo cum omnis animi, doloribus veritatis architecto quaerat perspiciatis a velit ut tenetur, ullam ad, sint rerum quos perferendis, natus optio. Atque officia nulla distinctio ea, dignissimos at vel dolore quas assumenda officiis, commodi ut voluptatum vitae temporibus delectus, mollitia error harum.</div>
                            <div role="tabpanel" class="tab-pane" id="reviews">
                                <div class="col-sm-8">
                                    <div class="formTitle">
                                        <h4>Be the first to review "Hoddie Theme Brothers"</h4>
                                    </div>
                                    <div class="singleBlogForm">
										<form action="#" method="post" class="comment-form">
											<input id="author" name="author" type="text" value="" aria-required="true" required placeholder="Name...">
											<input id="email" name="email" type="text" value="" aria-required="true" required placeholder="Email...">
											<input id="rating" name="rate" type="text" value="" aria-required="true" required placeholder="Rating...">
											<div class="starRate">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<textarea name="comment" placeholder="Message..." rows="6" required></textarea>
											<p class="form-submit">
												<input name="submit" type="submit" id="submit" value="Post Comment">
											</p>
										</form>
									</div>
                                </div>
                            </div>
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
					<h2><a href="shop.html">Related Product</a></h2>
					<span class="heading-b3"></span>
				</div><!-- end sectionTtile -->	
				<div class="row">
					<nav class="shop-products">
                        <ul class="clearfix">
                            <li class="col-sm-3">
                                <figure>
                                    <figcaption>
                                        <img src="img/shop/shopProduct.png" alt="">
                                    </figcaption>
                                    <div class="content">
                                        <div class="shopHover">
                                            <div class="price">
                                                &pound; 15,99
                                            </div>
                                            <div class="proTitle">
                                                <a href="#">Original T. Brothers</a>
                                            </div>
                                            <div class="product">Hoodie Aqura</div>
                                            <a href="#" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
                                             <a href="#" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
                                        </div>
                                    </div>
                                </figure>
                            </li>
                            <li class="col-sm-3">
                                <figure>
                                    <figcaption>
                                        <img src="img/shop/shopProduct.png" alt="">
                                    </figcaption>
                                    <div class="content">
                                        <div class="shopHover">
                                            <div class="price">
                                                &pound; 15,99
                                            </div>
                                            <div class="proTitle">
                                                <a href="#">Original T. Brothers</a>
                                            </div>
                                            <div class="product">Hoodie Aqura</div>
                                            <a href="#" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
                                             <a href="#" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
                                        </div>
                                    </div>
                                </figure>
                            </li>
                        </ul>
                    </nav><!-- end shop-products -->
				</div><!-- end row -->
			</div><!-- end shopContent -->
		</div>
		</div>
	</section>
	<!-- =============== END SINGLE SHOP PRODUCTS ================ -->
@endsection()