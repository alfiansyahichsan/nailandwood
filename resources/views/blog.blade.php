@extends('shared.layout')
@section('halaman')
Blog
@endsection
@section('content')

	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('img/blog/2.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div class="breadTxt">
                            <h1>
                                Blog List
                            </h1>
                            <p>
                                There's an old saying, 'That what doesn't kill you, makes you stronger' I don't believe that. <br> I think the things that try to kill you make you angry and sad. Strength comes<br> from the good things - your family, your friends,<br> the satisfaction of hard work.
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

	<!-- =============== START BLOG SIDEBAR-RIGHT ================ -->
	<section class="padding blogSidebarRight" id="content">
		<div class="container">
			<div class="row">
				<div class="blog-sidebar-right">
					<div class="col-sm-8">
						<div class="blogBox">	
							    <div class="item"><img src="img/blog/1.png" alt=""></div>
							<div class="blogBoxContent">
								<div class="blogHeader">
									<h1><a href="blogSingle.html">Gallery Post</a></h1>
								</div>
								<div class="admin-list clearfix">
									<ul>
										<li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
										<li><a href="#">By Admin</a>&nbsp;&nbsp;</li>
									</ul>
								</div>
								<div class="blogParagraph">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus hic nam voluptatem mollitia doloribus! Tempora neque pariatur saepe error esse soluta repellat laboriosam aperiam qui accusantium placeat, aspernatur maxime, magnam id veritatis quas obcaecati architecto laborum! Odio illum aperiam beatae earum dicta.</p>
								</div><!--end blogParagraph  -->
								<div class="rmButton">
									<a href="{{URL::route('blogsingle')}}">Read More</a>
								</div>			
							</div><!-- end blogBoxContent -->
						</div><!-- end blogBox -->
						<div class="blogBox">	
								<iframe width="600" height="410" src="https://www.youtube.com/embed/01jcwGApTWA" frameborder="0" allowfullscreen></iframe>
								<div class="blogBoxContent">
									<div class="blogHeader">
										<h1><a href="blogSingle.html">VIdeo Post</a></h1>
									</div>
									<div class="admin-list clearfix">
										<ul>
											<li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
											<li><a href="#">By Admin</a>&nbsp;&nbsp;</li>
										</ul>
									</div>
									<div class="blogParagraph">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus hic nam voluptatem mollitia doloribus! Tempora neque pariatur saepe error esse soluta repellat laboriosam aperiam qui accusantium placeat, aspernatur maxime, magnam id veritatis quas obcaecati architecto laborum! Odio illum aperiam beatae earum dicta.</p>
									</div><!--end blogParagraph  -->
									<div class="rmButton">
										<a href="{{URL::route('blogsingle')}}">Read More</a>
									</div>			
								</div><!-- end blogBoxContent -->
							</div><!-- end blogBox -->
						<div class="blogBox">	
							<iframe width="100" height="53" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/286037966&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
							<div class="blogBoxContent">
								<div class="blogHeader">
									<h1><a href="blogSingle.html">Soundcloud Post</a></h1>
								</div>
								<div class="admin-list clearfix">
							<ul>
								<li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
								<li><a href="#">By Admin</a>&nbsp;&nbsp;</li>
							</ul>
						</div>
								<div class="blogParagraph">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus hic nam voluptatem mollitia doloribus! Tempora neque pariatur saepe error esse soluta repellat laboriosam aperiam qui accusantium placeat, aspernatur maxime, magnam id veritatis quas obcaecati architecto laborum! Odio illum aperiam beatae earum dicta.</p>
								</div><!--end blogParagraph  -->
								<div class="rmButton">
									<a href="{{URL::route('blogsingle')}}">Read More</a>
								</div>			
							</div><!-- end blogBoxContent -->
						</div><!-- end blogBox -->
						<div class="blogBox">	
							<div class="blogBoxContent">
								<div class="blogHeader">
									<h1><a href="blogSingle.html">Standard Post</a></h1>
								</div>
								<div class="admin-list clearfix">
									<ul>
										<li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
										<li><a href="#">By Admin</a>&nbsp;&nbsp;</li>
									</ul>
								</div>
								<div class="blogParagraph">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus hic nam voluptatem mollitia doloribus! Tempora neque pariatur saepe error esse soluta repellat laboriosam aperiam qui accusantium placeat, aspernatur maxime, magnam id veritatis quas obcaecati architecto laborum! Odio illum aperiam beatae earum dicta.</p>
								</div><!--end blogParagraph  -->
								<div class="rmButton">
									<a href="{{URL::route('blogsingle')}}">Read More</a>
								</div>			
							</div><!-- end blogBoxContent -->
						</div><!-- end blogBox -->
					</div><!-- end col-sm-8 -->
				</div><!-- end blog-left -->
				<div class="blog-right">
					<div class="col-sm-3 col-sm-offset-1">
						<div class="blogSidebar">
							<div class="widget">
								<div class="widget kotak">
								<p class="photoborder"><img src="img/header/koc.jpg"></p>
									<h3 class="widget-title" style="padding-top: 20px;">About Me</h3>
									<ul style="padding-left: 20px; padding-right: 20px;"><a>Literally slow-carb umami, mixtape bicycle rights salvia skateboard. Selfies squid normcore chillwave, slow-carb cred Austin small batch leggings umami cliche trust fund Echo Park Pinterest 8-bit. PBR and B church-key keffiyehLiterally slow-carb umami</a>
										
									</ul>
									<h3></h3>
									<nav class="socials" style="padding-top: 25px; padding-left: 25px;">
										<ul>
											<a href="https://itunes.apple.com/id/album/proper-pause-ep/id1151893533" class="icon-button shopIcon"><i class="fa fa-apple" style="font-size: 17px; width: 50px; background-color: transparent; text-align: center; color: black;"></i><span></span></a>
											<a href="https://www.youtube.com/channel/UCiNGrKZJI5ET_NHk94bxnJQ" class="icon-button shopIcon"><i class="fa fa-youtube-play" style="font-size: 17px; width: 50px; background-color: transparent; text-align: center; color: black;"></i><span></span></a>
											<a href="https://soundcloud.com/user-346971553" class="icon-button shopIcon"><i class="fa fa-instagram" style="font-size: 17px; width: 50px; background-color: transparent; text-align: center; color: black;"></i><span></span></a>
											<a href="https://soundcloud.com/user-346971553" class="icon-button shopIcon"><i class="fa fa-soundcloud" style="font-size: 17px; width: 50px; background-color: transparent; text-align: center; color: black;"></i><span></span></a>
										</ul>
									</nav>
								</div><!-- end widget -->
							<div class="widget" style="text-align: center; padding-top: 20px; margin-top: 20px;">
							<h3>Instagram</h3>
							<span class="headen"></span>
								<div class="instagram-widgets">
									<ul id="instagram-sidebar-widget" class="clearfix">
										<iframe src="http://instaembedder.com/gallery-v2.php?width=80&cols=3&rows=3&margin=8&color=gray&image_border=8&frame_color=white&cid=3877&" frameborder="0" width="315" height="289" ></iframe>
									</ul>
								</div>
							</div>
								<!-- <h3 class="widget-title">Categories</h3>
								<ul>
									<li>Audio<span>(2)</span></li>
									<li>News<span>(3)</span></li>
									<li>Standard<span>(5)</span></li>
									<li>Video<span>(1)</span></li>
									<li>Soundcloud<span>(6)</span></li>
									<li>Gallery<span>(3)</span></li>
								</ul> -->
							</div><!-- end widget -->
							<div class="widget">
								<h3 class="widget-title">Recent Posts</h3>
								<ul>
									<li><a href="#">About Last Night</a></li>
									<li><a href="#">Video Post</a></li>
									<li><a href="#">Soundcloud</a></li>
									<li><a href="#">Post With Audio Tracks</a></li>
									<li><a href="#">Soundcloud Post</a></li>
									<li><a href="#">Standard Post</a></li>
								</ul>
							</div><!-- end widget -->
							<div class="widget">
								<h3 class="widget-title">Tweets</h3>
								<!-- twitter -->
								<a class="twitter-timeline" href="https://twitter.com/UntoldFestival" data-widget-id="716220714324467712">Tweets by @UntoldFestival</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</div><!-- end widget -->
							<!-- <div class="widget tagCloud">
								<h3 class="widget-title">Tag Cloud</h3>
								<ul>
									<li><a href="">Audio</a>&nbsp;/&nbsp;</li>
									<li><a href="#">Best Event</a>&nbsp;/&nbsp;</li>
									<li><a href="#">Festival</a>&nbsp;/&nbsp;</li>
									<li><a href="#">Albums</a>&nbsp;/&nbsp;</li>
									<li><a href="#">Soundcloud</a>&nbsp;/&nbsp;</li>
									<li><a href="#">Video</a>&nbsp;/&nbsp;</li>
									<li><a href="#">Summer</a>&nbsp;/&nbsp;</li>
									<li><a href="#">People</a>&nbsp;/&nbsp;</li>
									<li><a href="#">Bands</a>&nbsp;/&nbsp;</li>
									<li><a href="#">Concert</a>&nbsp;/&nbsp;</li>
								</ul>
							</div> --><!-- end widget -->
						</div><!-- end blogSidebar -->
					</div><!-- end col-sm03 -->
				</div><!-- end blog-right -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- =============== END BLOG SIDEBAR-RIGHT ================ -->


@endsection