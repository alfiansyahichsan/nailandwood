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
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('img/header/koc.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div class="breadTxt">
                            <h1>
                                Blog List
                            </h1>
                            <p>
                                Your time is limited, don’t waste it living someone else’s life. Don’t be trapped<br>by dogma, which is living the result of other people’s thinking.<br> Don’t let the noise of other opinions drown<br> your own inner voice.
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

	<!-- =============== START BLOG FILTER ================ -->
	<section class="aquraFilter padding" id="content">
		<div class="container">
			<!-- start blog-filter-category -->
			<div class="categories">
					<ul class="clearfix" data-option-key="filter">
						<li><a href="#"><i class="fa fa-filter"></i></a></li>
						<li> <a href="#" class="selected" data-option-value="*">All</a></li>
						<li> <a href="#" data-option-value=".news">News</a></li>
						<li> <a href="#" data-option-value=".audio">Audio</a></li>
						<li> <a href="#" data-option-value=".cloud">Soundcloud</a></li>
						<li> <a href="#" data-option-value=".video">Video</a></li>
						<li> <a href="#" data-option-value=".gallery">Gallery</a></li>
						<li> <a href="#" data-option-value=".standard">Standard</a></li>
					</ul>
			</div><!--end categories-->
			<!-- end blog-filter-category -->
			
			<!-- start filter -->
			<div class="row">
				<div class="blog col-sm-12 col-xs-12">
					<div class="aqura-filter-content">
						<ul class="clearfix">
							<li class="col-sm-4 col-xs-12 news gallery">
								<div class="blogBox">	
									<div class="owl-carousel">
									    <div class="item"><img src="img/blog/galPostGrid.png" alt=""></div>
									    <div class="item"><img src="img/blog/galPostGrid.png" alt=""></div>
									</div>	
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
											<a href="{{URL::route('blogsingle')}}">Read More</a>
										</div>			
									</div><!-- end blogBoxContent -->
								</div><!-- end blogBox -->
							</li><!-- end col-sm-4 -->
							<li class="col-sm-4 col-xs-12 video">
								<div class="blogBox">	
									<iframe src="https://player.vimeo.com/video/73340128" width="500" height="281"   ></iframe>
									<div class="blogBoxContent">
										<div class="blogHeader">
											<h1><a href="{{URL::route('blogsingle')}}">VIdeo Post</a></h1>
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
											<a href="{{URL::route('blogsingle')}}">Read More</a>
										</div>			
									</div><!-- end blogBoxContent -->
								</div><!-- end blogBox -->
							</li><!-- end col-sm-4 col-xs-12 -->
							<li class="col-sm-4 col-xs-12 cloud audio">
								<div class="blogBox">	
									<iframe height="200" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/73595878&amp;color=bb9b69&amp;show_artwork=false&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false"></iframe>
									<div class="blogBoxContent">
										<div class="blogHeader">
											<h1><a href="{{URL::route('blogsingle')}}">Soundcloud Post</a></h1>
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
											<a href="{{URL::route('blogsingle')}}">Read More</a>
										</div>			
									</div><!-- end blogBoxContent -->
								</div><!-- end blogBox -->
							</li><!-- end col-sm-4 col-xs-12 -->

							<li class="col-sm-4 col-xs-12 standard ">
								<div class="blogBox">	
									<div class="imgBox"><img src="img/blog/gridPost.png" alt="box-img"></div>
									<div class="blogBoxContent">
										<div class="blogHeader">
											<h1><a href="{{URL::route('blogsingle')}}">Last Show Post</a></h1>
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
											<a href="{{URL::route('blogsingle')}}">Read More</a>
										</div>			
									</div><!-- end blogBoxContent -->
								</div><!-- end blogBox -->
							</li><!-- end col-sm-4 col-xs-12 -->
							<li class="col-sm-4 col-xs-12 living">
								<div class="blogBox">	
									<div class="blogBoxContent">
										<div class="blogHeader">
											<h1><a href="blogSingle.html">Standard Post</a></h1>
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
											<a href="blogSingle.html">Read More</a>
										</div>			
									</div><!-- end blogBoxContent -->
								</div><!-- end blogBox -->
							</li><!-- end col-sm-4 col-xs-12 -->
							<li class="col-sm-4 col-xs-12 standard">
								<div class="blogBox">	
									<div class="blogBoxContent">
										<div class="blogHeader">
											<h1><a href="blogSingle.html">Standard Post</a></h1>
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
											<a href="blogSingle.html">Read More</a>
										</div>			
									</div><!-- end blogBoxContent -->
								</div><!-- end blogBox -->
							</li><!-- end col-sm-4 -->
						</ul>
					</div><!-- end aqura-filter-cotent -->
				</div><!-- end col-sm-12 -->
			</div><!-- end row -->
			<!-- end filter -->
		</div><!-- end container -->
	</section>
	<!-- =============== END BLOG FILTER ================ -->

@endsection