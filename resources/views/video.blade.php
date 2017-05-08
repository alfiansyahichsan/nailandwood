@extends('shared.layout')
@section('halaman')
Video
@endsection
@section('content')
	
	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
        <div class="row">
            <div class="col-sm-12">
            	<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/1tT2GYLKHLw',containment:'.player',autoPlay:true, mute:true, startAt:0, opacity:1}">
                    	    
                    	</div>
					</div>
				</div><!--end bread  -->
            </div>
        </div>
    </section>
	<!-- =============== END BREADCRUMB ================ -->

	<!-- ================================================== -->
	<!-- =============== VIDEO GALLERY ================ -->
	<!-- ================================================== -->
	<section class="videoG padding" id="content">
		<div class="videoInner">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-2"></div>
							<div class="col-sm-8">
								<div class="videoTitle">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/UVa_PALV_hY" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						<div class="col-sm-2"></div>
					</div>
					<div class="row">
						<div class="col-sm-2"></div>
							<div class="col-sm-8">
								<div class="videoTitle">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/UVa_PALV_hY" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						<div class="col-sm-2"></div>
					</div>
					<div class="row">
						<div class="col-sm-2"></div>
							<div class="col-sm-8">
								<div class="videoTitle">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/UVa_PALV_hY" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						<div class="col-sm-2"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================================================== -->
	<!-- =============== END VIDEO GALLERY ================ -->
	<!-- ================================================== -->

@endsection