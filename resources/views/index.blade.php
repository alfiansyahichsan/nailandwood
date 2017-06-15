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
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url({{asset('img/header/'.$slider->imagepathslider)}});" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div id="home" style="position: absolute;left: 0;top: 0;">
							<div class="intro-header">
								<div class="js-height-full star" style="height: 955px;">
									<div class="star-pattern-1 js-height-full" style="height: 1080px;"></div>
										<div class="grid_item" style="width: 100%;">
											<div>
												<h1>
								                	<a class="link link-yaku" href="{{URL::Route('music')}}" style="text-decoration: none;">
								                		@foreach(explode(' ', $slider->text) as $text) 
													    <span>{{$text}}</span>
													  	@endforeach
													</a>
										        </h1>
										        <div class="rmButton link" style="padding-top: 10px;">
													<a href="{{URL::Route('shop')}}">{{$slider->textbutton}}</a>
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
		<div id="mesh-main-player" class="jp-jplayer" data-audio-src="audio" data-title="" data-artist="Paku dan Kayu"></div>
		
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

			@foreach(\App\Playlists::Playlists() as $playlist)
			<div class="trak-item" data-audio="{{asset('audio/'.$playlist->audiopath)}}" data-artist="Paku dan Kayu" data-thumbnail="{{asset('img/player/'.$playlist->imgthumbnailpath)}}" data-id="{{$playlist->id}}">
				<audio preload="metadata" src="{{asset('audio/'.$playlist->audiopath)}}" title="{{$playlist->title}}"></audio>
				<div class="additional-button">
					<div class="center-y-table">
						<!-- <a href="#">
							<i class="fa fa-apple"></i>
						</a>
						<a href="#">
							<i class="fa fa-soundcloud"></i>
						</a> -->
						<a href="#">
							<i class="fa fa-spotify"></i>
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
							{{$playlist->title}}
						</h2>
					</div>
				</div>
				<time class="trak-duration">
					00:00
				</time>
			</div>
			@endforeach
	
		</div>
	</div>
	<!-- =============== END PLAYLIST ================ -->

	<!-- =============== ALBUM COVER SECTION ================ -->
	<section class="padding albumsHome hide-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6" style="margin-bottom: 30px;">
					<div class="sectionTitle paddingBottom">
						<span class="heading-t3"></span>
						<h2><a href="{{URL::route('music')}}">music</a></h2>
						<span class="heading-b3"></span>
					</div><!-- end sectionTtile -->
					<div class="list-albums">
						<ul class="list-feature col-md-12 col-xs-12 col-sm-12">
						<li class="col-md-2" style="margin-left: 18px;">
							
						</li>
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

						</ul>
					</div><!-- end list-albums -->
				</div><!-- end col-sm-12 -->

				<div class="tableEvents col-sm-6" >
						<div class="sectionTitle" style="padding-bottom: 110px;">
							<span class="heading-t3"></span>
							<h2><a href="{{URL::route('events')}}">Events</a></h2>
							<span class="heading-b3"></span>
						</div><!-- end sectionTtile -->
						<table style="margin-top: -30px;">
							<tr class="tableEventsTitle">
								<th class="date">Date</th>
								<th class="city">Event</th>
								<th class="venue">Venue</th>
								<th class="location">Location</th>
								<th class="tickets">Tickets</th>
								<th></th>
							</tr>
							@foreach(\App\Event::Event() as $acara)
							<tr>
								<td class="aqura-date"><a>{{$acara->date}}</a></td>
								<td class="aqura-city"><a>{{$acara->eventname}}</a></td>
								<td class="aqura-location"><a>{{$acara->venue}}</a></td>
								<td class="aqura-city"><a>{{$acara->location}}</td>
								<td class="aqura-tickets"><a href="{{$acara->link}}">{{$acara->tickets}}</a></td>
							</tr>
							@endforeach
						</table>
					</div><!-- end col-sm-12 -->
			</div>
		</div><!-- end container -->
	</section>
	<!-- =============== END ALBUM COVER SECTION ================ -->


	<!-- =============== START EVENTS SECTION-2 ================ -->
	@foreach(\App\Nextevent::NextEvent() as $nEvent)
	<section class="padding hide-section countdownSection background-properties" style="background-image: url({{asset('img/events/'.$nEvent->backgroundpic)}});">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="countdownTitle">
						<h4>Next Event</h4>
						<a href="{{$nEvent->link}}"><img src="{{asset('img/events/'.$nEvent->logoeventpic)}}" style="width: 320px; height: 80px;" alt="Event"></a>
					</div>
					<div class="sm-countdown sm_content_element sm-style2" id="sm_countdown-19" data-date="{{$nEvent->datemax}}">
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
	@endforeach
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
						<div class="imgBox"><img src="img/blog/1.png" alt="box-img"></div>
						<div class="blogBoxContent">
							<div class="blogHeader">
								<h1><a href="{{URL::route('blogsingle')}}">Gallery Post</a></h1>
							</div>
							<div class="admin-list clearfix">
								<ul>
									<li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
									<li><a href="https://www.instagram.com/pakudankayu/">Paku & Kayu</a></li>
								</ul>
							</div><!-- end admin-list -->
							<div class="blogParagraph">
								<p>Chillwave forage Echo Park butcher banh mi, street art cred locavore kale chips. Before they sold out YOLO street art drinking vinegar, umami hella.</p>
							</div><!--end blogParagraph  -->
							<div class="rmButton">
								<a href="#">Read More</a>
							</div>			
						</div><!-- end blogBoxContent -->
					</div><!-- end blogBox -->
				</div><!-- end col-sm-4 -->	
				<div class="aduh col-sm-4">
					<div class="blogBox">	
						<div class="videoBox"><iframe width="600" height="410" src="https://www.youtube.com/embed/01jcwGApTWA" frameborder="0" allowfullscreen></iframe></div>
						<div class="blogBoxContent">
							<div class="blogHeader">
								<h1><a href="blogSingle.html">Video Post</a></h1>
							</div>
							<div class="admin-list clearfix">
								<ul>
									<li><a href="#">28 apr 2016</a>&nbsp;/&nbsp;</li>
									<li><a href="https://www.instagram.com/pakudankayu/">Paku & Kayu</a></li>
								</ul>
							</div><!-- end admin-list -->
							<div class="blogParagraph">
								<p>Chillwave forage Echo Park butcher banh mi, street art cred locavore kale chips. Before they sold out YOLO street art drinking vinegar, umami hella.</p>
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
									<li><a href="https://www.instagram.com/pakudankayu/">Paku & Kayu</a></li>
								</ul>
							</div><!-- end admin-list -->
							<div class="blogParagraph">
								<p>Chillwave forage Echo Park butcher banh mi, street art cred locavore kale chips. Before they sold out YOLO street art drinking vinegar, umami hella.</p>
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
	                  <p>"I don't listen to what art critics say. I don't know anybody who needs a critic to find out what art is."</p>
	                  <small>Jean-Michel Basquiat</small>
	                </div>
	              </div>
	          </div>
	          <div class="item">
	              <div class="row">
	                <div class="col-sm-12">
	                  <p>"Knowledge speaks, but wisdom listens."</p>
	                  <small>Jimi Hendrix</small>
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

	<!-- =============== START VIDEO SECTION ================ -->
	<section class="videoHome hide-section" style="margin-bottom: 150px; margin-top: 50px;">
		<div class="container">
			<div class="row">
				<div class="sectionTitle">
					<span class="heading-t3"></span>
					<h2><a href="video.html">Video</a></h2>
					<span class="heading-b3"></span>
					<p>Check out my latest videos and follow me on <a href="https://www.youtube.com/channel/UCiNGrKZJI5ET_NHk94bxnJQ">Youtube</a> to view more.</p>
				</div><!-- end sectionTtile -->
				<div class="col-sm-2"></div>

				@foreach(\App\Videohome::Videohome() as $video)
				<div class="col-sm-8">
					<iframe width="854" height="480" src="{{$video->link}}" frameborder="0" allowfullscreen></iframe>
				</div>
				@endforeach

				<div class="col-sm-2"></div>
			</div>
		</div>
	</section>
	<!-- =============== END VIDEO SECTION ================ -->


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
	</section> 
	<!-- =============== END HOME-SHOP SECTION ================ -->

@section('script')
@endsection()
@endsection()
