@extends('shared.layout')
@section('halaman')
Detail Event
@endsection
@section('content')

	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
			<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent phone-menu-bg ">

					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('img/header/koc.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div class="singleCounter">
							<div class="SingleEventTitle">
								<a href="https://electriccastle.ro/" target="_blank"><img src="img/events/box.png" alt="Event"></a>
							</div>
							
							<div class="sm-countdown sm_content_element sm-style2" id="sm_countdown-19" data-date="2016/07/11">
						<div class="displayCounter">
							<div class="column">
								<div class="sm_countdown_inner">
									<input class="element days" readonly="readonly" data-min="0" data-max="365" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
									<span class="unit days-title">days</span>
								</div>
							</div>	
							<div class="column">
								<div class="sm_countdown_inner">
									<input class="element hour" readonly="readonly" data-min="0" data-max="24" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
									<span class="unit hours-title">hrs</span>
								</div>
							</div>	
							<div class="column"> 
								<div class="sm_countdown_inner">
									<input class="element minute" readonly="readonly" data-min="0" data-max="60" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
									<span class="unit mins-title">min</span>
								</div>
							</div>
							<div class="column"> 
								<div class="sm_countdown_inner">
									<input class="element second" readonly="readonly" data-min="0" data-max="60" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
									<span class="unit secs-title">sec</span>
								</div>
							</div>
						</div>
					</div><!-- end sm-countdown -->
						</div><!-- end homeCounter -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START EVENT SINGLE ================ -->
	<div class="singleEvent padding background-properties" style="background-image: url(img/events/home-events-1.jpg);">
		<div class="container">
			<div class="sectionTitle paddingBottom">
				<span class="heading-t3"></span>
				<h2><a href="https://electriccastle.ro/info/overview" target="_blank">Description</a></h2>
				<span class="heading-b3"></span>
			</div><!-- end sectionTtile -->
			<div class="row">
				<div class="col-sm-8">
					<div class="descriptionEvent">
						<p>ELECTRIC CASTLE is the first Romanian festival that took electronic dance music and live concerts sounds to a castle’s domain. Since its first edition in 2013, the festival was shortlisted every year for the Best Medium Sized Festival Category at the European Festival Awards, among other important European names.Held on the domain of Bánffy Castle (or Bonţida Bánffy Castle), Electric Castle Festival is an unique, mind-blowing experience.</p>
						<p>It shakes up the way people interact with music by combining a visually innovative concept with an eclectic musical line-up, breaking the boundaries between electronic music and reggae, mainstream and subculture genres. It’s the only music festival in Romania to offer a complete and authentic experience through notorious international artists, a vast camping area, a diverse food court and an exceptional scenery.</p>
					</div><!-- end descriptionEvent -->
					<div class="coverEvent">
                    	<a href="img/events/electric.jpg" class="lightbox">
							<img src="img/events/electric.jpg" alt="">
						</a>
                    </div><!-- end coverEvent -->
                    <div class="ticket">
                    	<h4>Get Your Ticket Now</h4>
                        <a href="https://electriccastle.ro/tickets" target="_blank">Buy Ticket</a>
                    </div><!-- end ticket -->
				</div><!-- end col-sm-8 -->
				<div class="col-sm-3 col-sm-offset-1">
					<div class="sidebarAlbum">
						<div class="widget">
							<h3>Details</h3>
							<ul>
								<li>Date:<span>July 14-17, 2016 </span></li>
								<li>Time:<span>12:00 PM </span></li>
								<li>Location:<span>Banffy Castle, CJ </span></li>
								<li>Price:<span>$ 100</span></li>
							</ul>
						</div><!-- end widget -->
	
						<!-- <div class="widget">
							<h3>Twitter</h3>
							<a class="twitter-timeline" href="https://twitter.com/electric_castle" data-widget-id="717713562152673280">Tweets by @electric_castle</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div><!-- end widget -->

						<!-- <div class="widget">
							<h3>Instagram</h3>
							<div class="instagram-widget">
								<ul id="instagram-sidebar-widget" class="clearfix"></ul>
							</div>
						</div><!-- end widget -->
						
						
						<div class="widget">
							<h3>Follow On</h3>
							<section>
							  <ul id='services'>
							    <li>
							      <div><i class="fa fa-facebook"></i></div>
							    </li>
							    <li>
							    	<div><i class="fa fa-twitter"></i></div>
							    </li>
							    <li>
							    	<div><i class="fa fa-instagram"></i></div>
							    </li>
							    <li>
							    	<div><i class="fa fa-youtube"></i></div>
							    </li>
							  </ul>
							</section>
						</div><!-- end widget -->
					</div><!-- end sidebarAlbum -->
				</div><!-- end col-sm-3 col-sm-offset-1 -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div>
	<!-- =============== END EVENT SINGLE ================ -->

	<!-- =============== START MAP ================ -->
	<section class="googleMap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div id="map-canvas" class="google-map" data-lat="40.7841484" data-long="-73.9661407" data-img="img/contact/marker.png"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END MAP ================ -->

	<!-- =============== START PAGINATION ================ -->
	<section class="paginationFooter ">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-6">
						<a href="#" class="pagination-previous">
							<small>Preview Event</small>
						</a>
					</div>
					<div class="col-sm-6">
						<a href="#" class="pagination-next">
							<small>Next Event</small>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END PAGINATION ================ -->

@section('script')
@endsection()
@endsection()