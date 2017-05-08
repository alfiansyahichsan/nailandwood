@extends('shared.layout')
@section('halaman')
Music
@endsection
@section('content')

<!-- =============== START PLAYER ================ -->
<div class="main-music-player hide-player">
	<a class="hide-player-button">
		<i class="fa fa-plus"></i>
		<i class="fa fa-minus"></i>
	</a>
	<div id="mesh-main-player" class="jp-jplayer" data-audio-src="audio/flute.mp3" data-title="See right through ft. Fiora" data-artist="Tensnake"></div>
	
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

	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('img/header/aaa.png');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START ALBUM SINGLE ================ -->
	<section class="albumSingle padding background-properties">
		<div class="container">
			<div class="sectionTitle paddingBottom">
				<span class="heading-t3"></span>
				<h2><a href="albumsSingle1.html">Proper Pause(EP)</a></h2>
				<span class="heading-b3"></span>
			</div><!-- end sectionTtile -->
			<div class="row">
				<div class="col-sm-8">
					<div class="jp-playlist">
						<div class="about-list clearfix">
							<span class="about-name">NAME</span>
							<span class="about-length">LENGTH</span>
						</div>
						<div class="trak-item" data-audio="" data-artist="Paku dan Kayu" data-thumbnail="img/albums/thumbnail.png">
							<audio preload="metadata" src="" title="Not Stay Within"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>										
										Not Stay Within
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="audio/pakukayu2.mp3" data-artist="Paku dan Kayu" data-thumbnail="img/albums/thumbnail.png">
							<audio preload="metadata" src="audio/pakukayu2.mp3" title="Wake Up, Alaska"></audio>
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
						<div class="trak-item" data-audio="audio/pakukayu1.mp3" data-artist="Paku dan Kayu" data-thumbnail="img/albums/thumbnail.png">
							<audio preload="metadata" src="audio/pakukayu1.mp3" title="Fly You Up"></audio>
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

						<div class="trak-item" data-audio="" data-artist="Paku dan Kayu" data-thumbnail="img/albums/thumbnail.png">
							<audio preload="metadata" src="" title="Kelabu"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>
										Kelabu
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="" data-artist="Paku dan Kayu" data-thumbnail="img/albums/thumbnail.png">
							<audio preload="metadata" src="" title="Limitation"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>										
										Limitation
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>
					</div>
				</div><!-- end-col-sm-8 -->
				<div class="col-sm-3 col-sm-offset-1">
					<div class="sidebarAlbum">
						<div class="widget">
							<h3>Details</h3>
							<ul>
								<li>Release Date:<span>September 5, 2016 </span></li>
								<li>Label:<span>Why Production </span></li>
								<li>Fomat:<span>cd </span></li>
							</ul>
						</div><!-- end widget -->
						<div class="widget">
							<h3>Instagram</h3>
							<div class="instagram-widget">
								<ul id="instagram-sidebar-widget" class="clearfix"></ul>
							</div>
						</div><!-- end widget -->
						<div class="widget">
							<h3>Available On</h3>
							<section>
							  <ul id='services'>
							    <li>
							    	<a href="https://soundcloud.com/user-346971553"><div><i class="fa fa-soundcloud"></i></div></a>
							    </li>
							    <li>
							    	<a href="https://itunes.apple.com/id/album/proper-pause-ep/id1151893533"><div><i class="fa fa-apple"></i></div></a>
							    </li>
							    <li>
							    	<a href="https://play.spotify.com/album/3DzhBDFILzJjyvf4lcGmq7?play=true&utm_source=open.spotify.com&utm_medium=open"><div><i class="fa fa-spotify"></i></div></a>
							    </li>
							  </ul>
							</section>
						</div><!-- end widget -->
					</div><!-- end sidebarAlbum -->
				</div><!-- end col-sm-3 col-sm-offset-1 -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- =============== END ALBUM SINGLE ================ -->

	<!-- =============== START PAGINATION ================ -->
	<!-- <div class="section-block  bkg-grey-ultralight pagination-2">
		<div class="row full-width ">
			<div class="col-sm-6 leftHover" style="background-image: url('img/albums/albFooter.jpg');">
				<a href="albumsSingle3.html" class="pagination-previous">
					<small>Prev</small>
					<span>Strange Clouds</span>
				</a>
			</div>
			<div class="col-sm-6 rightHover" style="background-image: url('img/albums/albFooter.jpg');">
				<a href="albumsSingle1.html" class="pagination-next ">
					<small>Next</small>
					<span>Noon XOXO</span>
				</a>
			</div>
		</div>
	</div> -->
	<!-- =============== END PAGINATION ================ -->
	
@endsection()
