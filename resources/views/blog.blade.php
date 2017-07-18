@extends('shared.layout')
@section('halaman')
Blog
@endsection
@section('content')

	<!-- =============== START BREADCRUMB ================ -->
	@foreach($slider as $s)
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url({{asset('img/header/'.$s->imagepathslider)}});" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div class="breadTxt">
                            <h1>
                                {{$s->title}}
                            </h1>
                            <p>
                                {!!$s->text!!}
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
	@endforeach
	
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START BLOG SIDEBAR-RIGHT ================ -->
	<section class="padding blogSidebarRight" id="content" style="margin-top: -50px;">
		<div class="container">
			<div class="row">
				<div class="blog-sidebar-right">

					<div class="col-sm-8">
				@if(!empty($blogs) && $blogs->count())
					@foreach($blogs as $bl)
						<div class="blogBox">
					@if($bl->category == 1)	
							    <div class="item"><img src="{{asset('img/blog/'.$bl->imgpath)}}" alt=""></div>
					@elseif($bl->category == 2)
						<iframe width="600" height="410" src="{{$bl->linkvideo}}" frameborder="0" allowfullscreen></iframe>
					@else
					
					@endif
							<div class="blogBoxContent">
								<div class="blogHeader">
									<h1><a href="{{URL::route('blogpersonal',$bl->id)}}">{{$bl->title}}</a></h1>
								</div>
								<div class="admin-list clearfix">
									<ul>
										<li><a href="#">{{date('d M Y', strtotime($bl->created_at))}}</a>&nbsp;/&nbsp;</li>
										<li><a href="#">By Admin</a>&nbsp;&nbsp;</li>
									</ul>
								</div>
								<div class="blogParagraph" style="word-wrap: break-word;">
									{!! str_limit($bl->text,300) !!}
								</div><!--end blogParagraph  -->
								<div class="rmButton">
									<a href="{{URL::route('blogpersonal',$bl->id)}}">Read More</a>
								</div>			
							</div><!-- end blogBoxContent -->
						</div><!-- end blogBox -->
				
					@endforeach
				@else
					<div class="blogHeader">
						<h3>No Post Yet !!</h3>
					</div>
					@endif
						<div class="paginate" style="text-align: center;">
		{{ $blogs->links() }}
	</div>
					</div><!-- end col-sm-8 -->
				</div><!-- end blog-left -->

				<div class="blog-right">
					<div class="col-sm-3 col-sm-offset-1">
						<div class="blogSidebar">
							<div class="widget">
								<div class="widget kotak" style="word-wrap: break-word;">
							@foreach($about as $aa)
								<p class="photoborder"><img src="{{asset('img/logo/'.$aa->imgpath)}}"></p>
									<h3 class="widget-title" style="padding-top: 20px;">{{$aa->title}}</h3>
									<ul style="padding-left: 20px; padding-right: 20px;"><a>{{$aa->text}}</a>
										
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
								@endforeach
							<div class="widget" style="text-align: center; padding-top: 20px; margin-top: 20px;">
							<h3>Instagram</h3>
							<span class="headen"></span>
								<div class="instagram-widgets">
									<ul id="instagram-sidebar-widget" class="clearfix">
										<iframe src="http://instaembedder.com/gallery-v2.php?width=80&cols=3&rows=3&margin=8&color=gray&image_border=8&frame_color=white&cid=3877&" frameborder="0" width="315" height="289" ></iframe>
									</ul>
								</div>
							</div>
							</div><!-- end widget -->
							<div class="widget" style="margin-bottom: 40px;">
								<h3 class="widget-title">Tweets</h3>
								<!-- twitter -->
								<a class="twitter-timeline" href="https://twitter.com/UntoldFestival" data-widget-id="716220714324467712">Tweets by @UntoldFestival</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</div><!-- end widget -->
						
						</div><!-- end blogSidebar -->
					</div><!-- end col-sm03 -->
				</div><!-- end blog-right -->

			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- =============== END BLOG SIDEBAR-RIGHT ================ -->

@endsection