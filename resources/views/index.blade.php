@extends('shared.layout')
@section('halaman')
Home
@endsection
@section('content')

	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
	@foreach(\App\Slider::imageSlider() as $slider)
		<div class="row">
				<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('{{asset('img/header/'.$slider['imagepathslider'])}}');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div id="home" style="position: absolute;left: 0;top: 0;">
							<div class="intro-header">
								<div class="js-height-full star" style="height: 955px;">
									<div class="star-pattern-1 js-height-full" style="height: 1080px;"></div>
										<div class="grid_item" style="width: 100%;">
											<div>
												<h1>
								                	<a class="link link-yaku" href="{{URL::Route('music')}}" style="text-decoration: none;">
														<span>P</span><span>R</span><span>O</span><span>P</span><span>E</span><span>R</span> <span>P</span><span>A</span><span>U</span><span>S</span><span>E</span><span>(EP)</span>
													</a>
										        </h1>
										        <div class="rmButton link" style="padding-top: 10px;">
													<a href="{{URL::Route('music')}}">Order</a>
												</div>
											</div>
						                </div>
									<canvas class="cover" width="1920" height="1080"></canvas>
								</div>
	   						</div>
						</div>
					</div>
				</div>
		</div>
	@endforeach
	</section>
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START PLAYER ================ -->
	<div class="main-music-player">
		<a class="hide-player-button">
			<i class="fa fa-plus"></i>
			<i class="fa fa-minus"></i>
		</a>
		<div id="mesh-main-player" class="jp-jplayer" data-audio-src="audio/pakukayu1.mp3" data-title="Fly You Up" data-artist="Paku dan Kayu"></div>
		
		<div id="mesh-main-player-content" class="mesh-main-player" role="application" aria-label="media player">
			<div class="container">
				<div class="row">
					<div class="left-player-side">
						<div class="mesh-prev">
							<i class="fa fa-step-backward"></i>
						</div>
						<div class="mesh-play">
							<i class="fa fa-play"></i>
						</div>
						<div class="mesh-pause">
							<i class="fa fa-pause"></i>
						</div>
						<div class="mesh-next">
							<i class="fa fa-step-forward"></i>
						</div>
						<button id="playlist-toggle" class="jplayerButton">
							<span class="span-1"></span>
							<span class="span-2"></span>
							<span class="span-3"></span>
						</button>
					</div>
					<div class="center-side">
						<div class="mesh-current-time">
						</div>
						<div class="mesh-seek-bar">
							<div class="mesh-play-bar">
							</div>
						</div>
						<div class="mesh-duration">
						</div>
					</div>
					<div class="right-player-side">
						<div class="mesh-thumbnail">
							<img src="img/player/thumbnail.jpg" alt="">
						</div>
						<div class="mesh-title">
						</div>
						<div class="mesh-artist">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- =============== END PLAYER ================ -->

	<!-- =============== START PLAYLIST ================ -->
	<div class="playlist-wrapper" id="playlist-wrapper">
		<div class="jp-playlist container">
			<div class="about-list clearfix">
				<span class="about-name">NAME</span>
				<span class="about-length">LENGTH</span>
				<span class="about-available">AVAILABLE ON</span>
			</div>
			<div class="trak-item" data-audio="audio/pakukayu1.mp3" data-artist="Paku dan Kayu" data-thumbnail="img/player/thumbnail.png" data-id="trak-200">
				<audio preload="metadata" src="audio/pakukayu1.mp3" title="Fly You Up"></audio>
				<div class="additional-button">
					<div class="center-y-table">
						<a href="#">
							<i class="fa fa-apple"></i>
						</a>
						<a href="#">
							<i class="fa fa-soundcloud"></i>
						</a>
					</div>
				</div>
				<div class="play-pause-button">
					<div class="center-y-table">
						<i class="fa fa-play"></i>
					</div>
				</div>
				<div class="name-artist">
					<div class="center-y-table">
						<h2>
							Fly You Up
						</h2>
					</div>
				</div>
				<time class="trak-duration">
					00:00
				</time>
			</div>
			<div class="trak-item" data-audio="audio/pakukayu2.mp3" data-artist="Paku dan Kayu" data-thumbnail="img/player/thumbnail.png" data-id="trak-201">
				<audio preload="metadata" src="audio/pakukayu2.mp3" title="Wake Up, Alaska"></audio>
				<div class="additional-button">
					<div class="center-y-table">
						<a href="#">
							<i class="fa fa-apple"></i>
						</a>
						<a href="#">
							<i class="fa fa-soundcloud"></i>
						</a>
					</div>
				</div>
				<div class="play-pause-button">
					<div class="center-y-table">
						<i class="fa fa-play"></i>
					</div>
				</div>
				<div class="name-artist">
					<div class="center-y-table">
						<h2>
							Wake Up, Alaska
						</h2>
					</div>
				</div>
				<time class="trak-duration">
					00:00
				</time>
			</div>
		</div>
	</div>
	<!-- =============== END PLAYLIST ================ -->

	<!-- =============== START QUOTATION ================ -->
	<div class="quote">
	  <div class="row">
	    <div class="col-md-12" >
	      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
	        <!-- Carousel Slides / Quotes -->
	        <div class="carousel-inner">
	          <!-- Quote 1 -->
	          <div class="item active">
	              <div class="row">
	                <div class="col-sm-12">
	                  <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!"</p>
	                  <small>Someone famous - DAMN</small>
	                </div>
	              </div>
	          </div>
	          <!-- Quote 2 -->
	          <div class="item">
	              <div class="row">
	                <div class="col-sm-12">
	                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris."</p>
	                  <small>Someone famous</small>
	                </div>
	              </div>
	          </div>
	          <!-- Quote 3 -->
	          <div class="item">
	              <div class="row">
	                <div class="col-sm-12">
	                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris."</p>
	                  <small>Someone famous</small>
	                </div>
	              </div>
	          </div>
	        </div>
	        
	        <!-- Carousel Buttons Next/Prev -->
	        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
	        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
	      </div>                          
	    </div>
	  </div>
	</div>
	<!-- =============== END QUOTATION ================ -->
	
	<!-- =============== END PLAYLIST ================ -->
	<section class="padding albumsHome hide-section">
		<div class="container" style="margin-top: -35px;">
			<div class="row">
				<div class="col-sm-12">
					<div class="sectionTitle paddingBottom">
						<span class="heading-t3"></span>
						<h2><a href="{{URL::route('music')}}">music</a></h2>
						<span class="heading-b3"></span>
					</div><!-- end sectionTtile -->
				</div><!-- end col-sm-12 -->
			</div>
			<div class="list-albums" style="margin-top: -50px;">
				<ul class="list-feature col-md-12 col-xs-12 col-sm-12">
					<li class="col-md-3 col-sm-3 col-xs-12">
						<div class="album-icon">
							<span class="thumbs-album">
								<a href="{{URL::Route('music')}}"><img width="270" height="270" src="img/albums/album.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></a>

							</span>
							<span class="disk"><img src="img/albums/qwe.png"></span>
						</div><!-- END ALBUM ICON -->
						<div class="name">
							<h3>Proper Pause(EP)</h3>						
							<p>Chillout</p>								
						</div><!-- end name -->
					</li>
									
					<li class="col-md-3 col-sm-3 col-xs-12">
						<div class="album-icon albumIcon1">
							<span class="thumbs-album">
								<a href="albumsSingle3.html"><img width="270" height="270" src="img/albums/albumCover.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></a>
							</span>
							<span class="disk"></span>
						</div>
						<div class="name">
							<h3>Stunt Vibe</h3>									<p>Chillout</p>								
						</div>
						</li>
						<li class="col-md-3 col-sm-3 col-xs-12">
							<div class="album-icon albumIcon2">
								<span class="thumbs-album">
									<a href="albumsSingle4.html"><img width="270" height="270" src="img/albums/albumCover.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></a>
									</span>
								<span class="disk"></span>
							</div>
							<div class="name">
								<h3>Strange Clouds</h3>								<p>Chillout</p>								
							</div>
						</li>
						<li class="col-md-3 col-sm-3 col-xs-12">
							<div class="album-icon albumIcon3">
								<span class="thumbs-album">
									<a href="albumsSingle2.html"><img width="270" height="270" src="img/albums/albumCover.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></a>
									</span>
								<span class="disk"></span>
							</div>
							<div class="name">
								<h3>Natural Earth</h3>								<p>Chillout</p>								
							</div>
						</li>	
				</ul>
			</div><!-- end list-albums -->
		</div><!-- end container -->
	</section>
	<!-- =============== END ALBUM COVER SECTION ================ -->

	<!-- =============== START EVENTS SECTION-1 ================ -->
	<section class="background-properties hide-section paddingHomeEvents">
		<div class="tableEvents">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="sectionTitle paddingBottom">
							<span class="heading-t3"></span>
							<h2><a href="{{URL::route('events')}}">Events</a></h2>
							<span class="heading-b3"></span>
						</div><!-- end sectionTtile -->
						<table>
							<tr class="tableEventsTitle">
								<th class="date">Date</th>
								<th class="city">Event Name</th>
								<th class="venue">Venue</th>
								<th class="location">Location</th>
								<th class="tickets">Tickets</th>
								<th></th>
							</tr>
							<tr>
								<td class="aqura-date"><a href="#"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-city"><a href="">Festival</a></td>
								<td class="aqura-location"><a href="">Central Park</a></td>
								<td class="aqura-city"><a href="">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="">Tickets</a></td>
								<!-- <td class="aqura-vip"><a href="">RSVP</a></td> -->
							</tr>
							<tr>
								<td class="aqura-date"><a href="#"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-city"><a href="">Festival</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="#"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-city"><a href="">Festival</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="#"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-city"><a href="">Festival</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="#"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-city"><a href="">Festival</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
							</tr>
						</table>
					</div><!-- end col-sm-12 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end tableEvents -->
	</section>
	<!-- =============== END EVENTS SECTION-1 ================ -->

	<!-- =============== START EVENTS SECTION-2 ================ -->
	<section class="padding hide-section countdownSection background-properties" style="background-image: url('img/header/koc.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="countdownTitle">
						<h4>Next Event</h4>
						<a href=""><img src="img/events/box.png" alt="Event"></a>
					</div>
					<div class="sm-countdown sm_content_element sm-style2" id="sm_countdown-19" data-date="2016/10/23">
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
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END EVENTS SECTION-2 ================ -->

	<!-- =============== START HOME-BLOG SECTION ================ -->	
	<section class="padding hide-section background-properties blogHomeSection">	
		<div class="container">
			<div class="row">
				<div class="sectionTitle paddingBottom">
					<span class="heading-t3"></span>
					<h2><a href="blogGrid.html">News</a></h2>
					<span class="heading-b3"></span>
				</div><!-- end sectionTtile -->
				<div class="aduh col-sm-4">
					<div class="blogBox">	
						<div class="imgBox"><img src="img/blog/homeGalPost.png" alt="box-img"></div>
						<div class="blogBoxContent">
							<div class="blogHeader">
								<h1><a href="{{URL::route('blogsingle')}}">Gallery Post</a></h1>
							</div>
							<div class="admin-list clearfix">
								<ul>
									<li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
									<li><a href="#">By Admin</a></li>
								</ul>
							</div><!-- end admin-list -->
							<div class="blogParagraph">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
							</div><!--end blogParagraph  -->
							<div class="rmButton">
								<a href="#">Read More</a>
							</div>			
						</div><!-- end blogBoxContent -->
					</div><!-- end blogBox -->
				</div><!-- end col-sm-4 -->	
				<div class="aduh col-sm-4">
					<div class="blogBox">	
						<div class="videoBox"><iframe width="600" height="410" src="https://www.youtube.com/embed/kYNRSa2DYp4" frameborder="0" allowfullscreen></iframe></div>
						<div class="blogBoxContent">
							<div class="blogHeader">
								<h1><a href="blogSingle.html">Video Post</a></h1>
							</div>
							<div class="admin-list clearfix">
								<ul>
									<li><a href="#">28 apr 2016</a>&nbsp;/&nbsp;</li>
									<li><a href="#">By Admin</a></li>
								</ul>
							</div><!-- end admin-list -->
							<div class="blogParagraph">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
							</div><!--end blogParagraph  -->
							<div class="rmButton">
								<a href="#">Read More</a>
							</div>			
						</div><!-- end blogBoxContent -->
					</div><!-- end blogBox -->
				</div><!-- end col-sm-4 -->	
				<div class="aduh col-sm-4">
					<div class="blogBox">	
						<div class="soundcloudBox"><iframe height="203" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/286037966&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe></div>
						<div class="blogBoxContent">
							<div class="blogHeader">
								<h1><a href="blogSingle.html">Soundcloud Post</a></h1>
							</div>
							<div class="admin-list clearfix">
								<ul>
									<li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
									<li><a href="#">By Admin</a></li>
								</ul>
							</div><!-- end admin-list -->
							<div class="blogParagraph">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
							</div><!--end blogParagraph  -->
							<div class="rmButton">
								<a href="#">Read More</a>
							</div>			
						</div><!-- end blogBoxContent -->
					</div><!-- end blogBox -->
				</div><!-- end col-sm-4 -->	
			</div><!-- end container -->	
		</div><!-- end row -->	
	</section>
	<!-- =============== END HOME-NLOG SECTION ================ -->	

	<!-- =============== START VIDEO SECTION ================ -->
	<section class="videoHome hide-section">
		<div class="container">
			<div class="row">
				<div class="sectionTitle">
					<span class="heading-t3"></span>
					<h2><a href="video.html">Video</a></h2>
					<span class="heading-b3"></span>
					<p>Check out my latest videos and follow me on <a href="https://www.youtube.com/channel/UCiNGrKZJI5ET_NHk94bxnJQ">Youtube</a> to view more.</p>
				</div><!-- end sectionTtile -->
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<iframe width="854" height="480" src="https://www.youtube.com/embed/UVa_PALV_hY" frameborder="0" allowfullscreen></iframe>
				</div><!-- end col-sm-4 -->
				<!-- <div class="col-sm-4">
					<iframe width="854" height="480" src="https://www.youtube.com/embed/kYNRSa2DYp4" frameborder="0" allowfullscreen></iframe>
				</div> --><!-- end col-sm-4 -->
				<!-- <div class="col-sm-4">
					<iframe width="854" height="480" src="https://www.youtube.com/embed/UVa_PALV_hY" frameborder="0" allowfullscreen></iframe>
				</div> --><!-- end col-sm-4 -->
				<div class="col-sm-2"></div>
			</div>
		</div>
	</section>
	<!-- =============== END VIDEO SECTION ================ -->



	<!-- =============== START GALLERY SECTION ================ -->
	<section class="padding hide-section" style="padding-top: 15rem;">
		<div class="gallerySection">
			<div class="container-fluid">
				<div class="col-sm-12">
					<!-- Content Container -->
					<div class="content-container clearfix">
						<!-- Single Album Container -->
						<div class="single-photo-album-container">
							<div class="row">
								<!-- Single Album Article -->
								<article class="col-sm-12 col-md-6 col-xs-12">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<!-- Single Album Image -->
											<div class="hovereffect">
												<a><img class="img-responsive" src="img/header/s.jpg" alt=""></a>
												<div class="overlay">
												   <a class="info lightbox" href="img/header/s.jpg"></a>
												</div>
											</div>
										</figcaption>
										<!-- Single Album View Button -->
										
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-3 col-xs-6">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
											<img class="img-responsive" src="img/header/sd1.jpg" alt="">
											<div class="overlay">
											   <a class="info lightbox" href="img/header/sd.jpg"></a>
											</div>
										</div>
										</figcaption>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-3 col-xs-6">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
											<img class="img-responsive" src="img/header/sd1.jpg" alt="">
											<div class="overlay">
											   <a class="info lightbox" href="img/header/sd.jpg"></a>
											</div>
										</div>
										</figcaption>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-3 col-xs-6">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
											<img class="img-responsive" src="img/header/sd1.jpg" alt="">
											<div class="overlay">
											   <a class="info lightbox" href="img/header/sd.jpg"></a>
											</div>
										</div>
										</figcaption>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-3 col-xs-6">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
											<img class="img-responsive" src="img/header/sd1.jpg" alt="">
											<div class="overlay">
											   <a class="info lightbox" href="img/header/sd.jpg"></a>
											</div>
										</div>
										</figcaption>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-12 col-md-6 col-xs-12">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
											<img class="img-responsive" src="img/header/s.jpg" alt="">
											<div class="overlay">
											   <a class="info lightbox" href="img/header/s.jpg"></a>
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
		</div>
	</section>
	
	<!-- =============== END GALLERY SECTION ================ -->



	<!-- =============== START HOME-SHOP SECTION ================ -->
	<!-- <section class="shopHomePage shopHomePadding hide-section">
		<div class="shopSection">
			<div class="container-fluid">
			<div class="shopContent">
				<div class="sectionTitle paddingBottom">
					<span class="heading-t3"></span>
					<h2><a href="shop.html">Shop Online</a></h2>
					<span class="heading-b3"></span> -->
				<!-- </div> --><!-- end sectionTtile -->	
				<!-- @foreach($products->chunk(4) as $productChunk)
				<div class="row">
					<nav class="shop-products col-sm-12">
						<ul class="clearfix">
						@foreach($productChunk as $product)
							<li class="col-sm-3">
								<figure>
									<figcaption>
										<img src="{{asset('img/shop/'.$product->imagepath)}}" alt="" style="max-width: 480; max-height: 475;">
									</figcaption>
									<div class="content">
										<div class="shopHover">
											<div class="price">
												{{$product->price}}
											</div>
											<div  class="proTitle">
												<a href="{{URL::route('detailshop')}}">{{$product->title}}</a>
											</div>
											<div class="product">Hoodie Aqura</div>
											<a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
											 <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
										</div>
									</div>
								</figure>
							</li>
						@endforeach
						</ul> -->
					<!-- </nav> --><!-- end shop-products -->
				<!-- </div> --><!-- end row -->
				<!-- @endforeach -->
			<!-- </div> --><!-- end shopContent -->
		<!-- </div>
		</div>
	</section> -->
	<!-- =============== END HOME-SHOP SECTION ================ -->

@section('script')
@endsection()
@endsection()
