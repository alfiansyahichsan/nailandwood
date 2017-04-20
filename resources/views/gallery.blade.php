@extends('shared.layout')
@section('halaman')
Gallery
@endsection
@section('content')

	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('img/header/koc.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div class="breadTxt">
                            <h1>
                                albums grid
                            </h1>
                            <p>
                                A portrait is not a likeness. The moment an emotion or fact is transformed into a photograph <br> it is no longer a fact but an opinion. There is no such thing as inaccuracy in a photograph. <br> All photographs are accurate. None of <br> them is the truth.
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

	<!-- =============== START GALLERY SECTION ================ -->
	<section class="padding gallerySection" id="content">
		<div class="container" style="padding:0;">
				<div class="col-sm-12">
					<!-- Content Container -->
					<div class="content-container clearfix">
						<!-- Single Album Container -->
						<div class="single-photo-album-container">
							<div class="row">
								<!-- Single Album Article -->
								<article class="col-sm-4">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
										        <img class="img-responsive" src="img/gallery/galGrid.png" alt="">
										        <div class="overlay">
										        	<a href="gallerySingle.html" class="info"></a>
										        </div>
										    </div>
										</figcaption>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-4">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
										        <img class="img-responsive" src="img/gallery/galGrid.png" alt="">
										        <div class="overlay">
										        	<a href="gallerySingle.html" class="info"></a>
										        </div>
										    </div>
										</figcaption>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-4">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
										        <img class="img-responsive" src="img/gallery/galGrid.png" alt="">
										        <div class="overlay">
										        	<a href="gallerySingle.html" class="info"></a>
										        </div>
										    </div>
										</figcaption>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-4">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
										        <img class="img-responsive" src="img/gallery/galGrid.png" alt="">
										        <div class="overlay">
										        	<a href="gallerySingle.html" class="info"></a>
										        </div>
										    </div>
										</figcaption>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-4">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
										        <img class="img-responsive" src="img/gallery/galGrid.png" alt="">
										        <div class="overlay">
										        	<a href="gallerySingle.html" class="info"></a>
										        </div>
										    </div>
										</figcaption>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-4">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
										        <img class="img-responsive" src="img/gallery/galGrid.png" alt="">
										        <div class="overlay">
										        	<a href="gallerySingle.html" class="info"></a>
										        </div>
										    </div>
										</figcaption>
									</figure>
								</article>								
							</div>
						</div>
					</div>
				</div>
			</div><!-- end container -->
	</section>
	<!-- =============== END GALLERY SECTION ================ -->

@endsection