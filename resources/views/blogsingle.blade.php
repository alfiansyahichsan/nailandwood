@extends('shared.layouts')
@section('halaman')
BlogSingle
@endsection
@section('content')

	<!-- =============== START BREADCRUMB ================ -->
	
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START BLOG FILTER ================ -->
	<section class="blogSingle padding" id="content" style="margin-top: 40px;">
		<div class="container">
			<div class="row">
				<div class="blog-left">
					<div class="col-sm-8">
						<div class="owl-carousels">
						    <div class="item"><img src="img/blog/1.png" alt=""></div>
						</div>
						<div class="admin-list clearfix">
							<ul>
								<li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
								<li><a href="#">By Admin</a>&nbsp;/&nbsp;</li>
							</ul>
						</div>
						<div class="title">
							<h2>About Last Night</h2>
						</div>
						<div class="paragraph"  style="margin-bottom: 30px;">
							<p>Chillwave forage Echo Park butcher banh mi, street art cred locavore kale chips. Before they sold out YOLO street art drinking vinegar, umami hella XOXO Terry Richardson lomo craft beer Tumblr tousled jean shorts tofu squid. Selvage Vice gastropub Tonx Thundercats four loko. Selfies before they sold out ethical shabby chic raw denim. Vice DIY Marfa Echo Park, paleo Terry Richardson post-ironic salvia. Mustache occupy hoodie, letterpress irony cliche food truck seitan four loko. Occupy flexitarian meh cred, tousled Austin kale chips jean shorts shabby chic Echo Park narwhal artisan Wes Anderson fap.</p>
							<p>Chillwave forage Echo Park butcher banh mi, street art cred locavore kale chips. Before they sold out YOLO street art drinking vinegar, umami hella XOXO Terry Richardson lomo craft beer Tumblr tousled jean shorts tofu squid. Selvage Vice gastropub Tonx Thundercats four loko. Selfies before they sold out ethical shabby chic raw denim. Vice DIY Marfa Echo Park, paleo Terry Richardson post-ironic salvia. Mustache occupy hoodie, letterpress irony cliche food truck seitan four loko. Occupy flexitarian meh cred, tousled Austin kale chips jean shorts shabby chic Echo Park narwhal artisan Wes Anderson fap.</p>
							<p>Chillwave forage Echo Park butcher banh mi, street art cred locavore kale chips. Before they sold out YOLO street art drinking vinegar, umami hella XOXO Terry Richardson lomo craft beer Tumblr tousled jean shorts tofu squid. Selvage Vice gastropub Tonx Thundercats four loko. Selfies before they sold out ethical shabby chic raw denim. Vice DIY Marfa Echo Park, paleo Terry Richardson post-ironic salvia. Mustache occupy hoodie, letterpress irony cliche food truck seitan four loko. Occupy flexitarian meh cred, tousled Austin kale chips jean shorts shabby chic Echo Park narwhal artisan Wes Anderson fap.</p>
						</div>

						<!-- <div class="comment-container">
							<h1 class="title-comments">
								3 Comments
							</h1> -->
							<!-- ============== COMMENTS ============= -->
							<!-- <ul class="comments">
								<li>
									<div class="comment depth-1">
										<div class="left-section">
											<img alt="" src="img/blog/author-avatar.jpg">
										</div>
										<div class="right-section">
											<h1>
												<a href="#">Gabriel Groza</a>
											</h1>
											<p class="time-comment">Dec 15, 2015<span class="slashComment">/</span><a class="comment-reply-link" href="#"> Reply</a></p>

											<div class="comment-text">
												<p>
													Literally slow-carb umami, mixtape bicycle rights salvia skateboard. Selfies squid normcore chillwave, slow-carb cred Austin small batch leggings umami cliche trust fund Echo Park Pinterest 8-bit. PBR and B church-key keffiyeh
												</p>
											</div>
										</div>
									</div>
									<ul class="children">
										<li>
											<div class="comment depth-2">
												<div class="left-section">
													 <img alt="" src="img/blog/author-avatar.jpg">
												</div>
												<div class="right-section">
													
													<h1>
														<a href="#">Calin Tasca</a>
													</h1>
													<p class="time-comment">Dec 15, 2015<span class="slashComment">/</span><a class="comment-reply-link" href="#"> Reply</a></p>
													<div class="comment-text">
														<p>
															Literally slow-carb umami, mixtape bicycle rights salvia skateboard. Selfies squid normcore chillwave, slow-carb cred Austin small batch.
														</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li>
									<div class="pingback even thread-even depth-1">
										<div class="left-section">
											<img alt="" src="img/blog/author-avatar.jpg">
										</div>
										<div class="right-section">
											
											<h1>
												<a href="#">Nimeni Daniel</a>
											</h1>
											<p class="time-comment">Dec 15, 2015<span class="slashComment">/</span><a class="comment-reply-link" href="#"> Reply</a></p>
											<div class="comment-text">
												<p>
													Literally slow-carb umami, mixtape bicycle rights salvia skateboard. Selfies squid normcore chillwave, slow-carb cred Austin small batch leggings umami cliche trust fund Echo Park Pinterest 8-bit. PBR and B church-key keffiyeh
												</p>
											</div>
										</div>
									</div>
								</li>		
							</ul>
						</div> --><!-- Comments -->

						<!-- <div class="singleBlogForm">
							<h1>Leave a comment</h1>
							<form action="#" method="post" class="comment-form">
								<input id="author" name="author" type="text" value="" aria-required="true" required placeholder="Name...">
								<input id="email" name="email" type="text" value="" aria-required="true" required placeholder="Email...">
								<input id="url" name="url" type="text" value="" placeholder="Website...">
								<textarea name="comment" placeholder="Message..." rows="6" required></textarea>
								<p class="form-submit">
									<input name="submit" type="submit" id="submit" value="Post Comment">
								</p>
							</form>
						</div>
					</div> --><!-- end col-sm-8 -->
				</div><!-- end blog-left -->
				<div class="blog-right">
					<div class="col-sm-3 col-sm-offset-1">
						<div class="blogSidebar">
							<div class="widget kotak">
								<p class="photoborder"><img src="img/header/koc.jpg"></p>
									<h3 class="widget-title blogParagraph" style="padding-top: 20px;">About Me</h3>
									<ul class="blogParagraph" style="padding-left: 20px; padding-right: 20px;"><a>Literally slow-carb umami, mixtape bicycle rights salvia skateboard. Selfies squid normcore chillwave, slow-carb cred Austin small batch leggings umami cliche trust fund Echo Park Pinterest 8-bit. PBR and B church-key keffiyehLiterally slow-carb umami</a>
										
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
										<iframe src="http://instaembedder.com/gallery-v2.php?width=80&cols=3&rows=3&margin=0&color=gray&image_border=8&frame_color=white&cid=3877&" frameborder="0" width="300" height="300" ></iframe>
									</ul>
								</div>
							</div>
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
							<!-- <div class="widget">
								<h3 class="widget-title">Tweets</h3>
								<a class="twitter-timeline" href="https://twitter.com/UntoldFestival" data-widget-id="716220714324467712">Tweets by @UntoldFestival</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</div><!-- end widget -->
							<!-- end widget -->
						</div><!-- end blogSidebar -->
					</div><!-- end col-sm03 -->
				</div><!-- end blog-right -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- =============== END BLOG SINGLE ================ -->

	<!-- =============== START PAGINATION ================ -->
	<div class="section-block  bkg-grey-ultralight pagination-2">
		<div class="row full-width ">
			<div class="col-sm-6 leftHover" style="background-image: url('img/header/koc.jpg');">
				<a href="albumsSingle3.html" class="pagination-previous">
					<small>Prev</small>
					<span>Blog</span>
				</a>
			</div>
			<div class="col-sm-6 rightHover" style="background-image: url('img/header/koc.jpg');">
				<a href="albumsSingle1.html" class="pagination-next ">
					<small>Next</small>
					<span>Blog</span>
				</a>
			</div>
		</div>
	</div>
	<!-- =============== END PAGINATION ================ -->
	<!-- =============== END BLOG FILTER ================ -->

@endsection