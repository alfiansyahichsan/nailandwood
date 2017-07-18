@extends('shared.layout')
@section('halaman')
Video
@endsection
@section('content')
	
	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
        <div class="row qwerty">
            <div class="col-sm-12">
            	<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<!-- <div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/1tT2GYLKHLw',containment:'.player',autoPlay:true, mute:true, startAt:0, opacity:1}">
                    	    
                    	</div>
					</div> -->
				</div>
            </div> 
        </div>
    </section>
	<!-- =============== END BREADCRUMB ================ -->

	<!-- ================================================== -->
	<!-- =============== VIDEO GALLERY ================ -->
	<!-- ================================================== -->
	<section class="padding blogSidebarRight" id="content" style="margin-top: -50px;">
		<div class="container">
			<div class="row">
				<div class="blog-sidebar-right qqwwee">
					<div class="col-sm-2">
						
					</div>
					<div class="col-sm-8">
					@if(!empty($lvideo) && $lvideo->count())
					@foreach($lvideo as $lvideos)
					@if($loop->first)
						<div class="blogBox">	
							<iframe width="600" height="410" src="{{$lvideos->link}}" frameborder="0" allowfullscreen></iframe>
							<div class="blogBoxContent">
								<div class="blogHeader">
								<h1><a>{{$lvideos->title}}</a></h1>
								</div>
								<div class="blogParagraph read-more-wrap" style="margin-top: 5px;">
									<input type="checkbox" class="read-more-state" id="post-{{$lvideos->id}}" />
										<p class="read-more-wrap more">{{ $lvideos["story"] }}</p>

									<hr style="margin-bottom: -20px;">
									
								</div><!--end blogParagraph  -->
							
							</div><!-- end blogBoxContent -->
						</div><!-- end blogBox -->
					@else($loop->remaining)
						<div class="blogBox">	
							<iframe width="600" height="410" src="{{$lvideos->link}}" frameborder="0" allowfullscreen></iframe>
							<div class="blogBoxContent">
								<div class="blogHeader">
								<h1><a>{{$lvideos->title}}</a></h1>
								</div>
							<div class="blogParagraph read-more-wrap" style="margin-top: 5px;">
									<input type="checkbox" class="read-more-state" id="post-{{$lvideos->id}}" />
										<p class="read-more-wrap more">{{ $lvideos["story"] }}</p>
									<hr style="margin-bottom: -20px;">
									
								</div><!--end blogParagraph  -->
							
							</div><!-- end blogBoxContent -->
						</div><!-- end blogBox -->
			          @endif						
					@endforeach
					@endif
					<div class="paginate" style="text-align: center;">
			          	{{ $lvideo->render() }}
			         </div>
						
					<div class="col-sm-2">

					</div>
				</div><!-- end blog-left -->
				
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- ================================================== -->
	<!-- =============== END VIDEO GALLERY ================ -->
	<!-- ================================================== -->

@endsection