@extends('shared.layout')
@section('halaman')
Video
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
                                Video
                            </h1>
                            <p>
                                Hello. We are a multi-disciplinary team working together to craft awesome websites,<br> realise brand identities, design for print and capture visual imagery through photography.<br> Take a look at some of our work below.
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

	<!-- ================================================== -->
	<!-- =============== VIDEO GALLERY ================ -->
	<!-- ================================================== -->
	<section class="videoG padding" id="content">
		<div class="videoInner" style="margin-top: -100px;">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-4">
							<div class="videoTitle">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/VV-Q-aRHTDE"  allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="videoTitle">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/VxG5C4q_rEs"  allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="videoTitle">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/OkbuRa1o1wA"  allowfullscreen></iframe>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="videoTitle">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/VxG5C4q_rEs"  allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="videoTitle">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/VV-Q-aRHTDE"  allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="videoTitle">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/OkbuRa1o1wA"  allowfullscreen></iframe>
							</div>
						</div>

						
						<div class="col-sm-4" >
							<div class="videoTitle" style="padding-bottom:0;">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/OkbuRa1o1wA"  allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-sm-4" style="padding-bottom:0;">
							<div class="videoTitle">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/VxG5C4q_rEs"  allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="videoTitle" style="padding-bottom:0;">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/VV-Q-aRHTDE"  allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================================================== -->
	<!-- =============== END VIDEO GALLERY ================ -->
	<!-- ================================================== -->

@endsection