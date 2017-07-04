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
					@foreach($blogs as $bl)
						<div class="blogBox">
					@if($bl->category == 1)	
							    <div class="item"><img src="{{asset('img/blog/'.$bl->imgpath)}}" alt=""></div>
					@else
						<iframe width="600" height="410" src="{{$bl->linkvideo}}" frameborder="0" allowfullscreen></iframe>
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
						
					</div><!-- end col-sm-8 -->
				</div><!-- end blog-left -->

@include('shared.aboutblog')

			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- =============== END BLOG SIDEBAR-RIGHT ================ -->


@endsection