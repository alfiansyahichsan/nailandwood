@extends('shared.layout')
@section('halaman')
Video
@endsection
@section('content')
	
	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
        <div class="row qwerty">
            <!-- <div class="col-sm-12">
            	<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/1tT2GYLKHLw',containment:'.player',autoPlay:true, mute:true, startAt:0, opacity:1}">
                    	    
                    	</div>
					</div>
				</div><!end bread  -->
            </div> 
        </div>
    </section>
	<!-- =============== END BREADCRUMB ================ -->

	<!-- ================================================== -->
	<!-- =============== VIDEO GALLERY ================ -->
	<!-- ================================================== -->
	<section class="blogSidebarRight" id="content">
		<div class="container">
			<div class="row">
				<div class="blog-sidebar-right qqwwee">
					<div class="col-sm-2">
						
					</div>
					<div class="col-sm-8">
					@foreach($lvideo as $lvideo)
					@if($loop->first)
						<div class="blogBox">	
							<iframe width="600" height="410" src="{{$lvideo->link}}" frameborder="0" allowfullscreen></iframe>
							<div class="blogBoxContent">
								<div class="blogHeader">
								<h1><a>{{$lvideo->title}}</a></h1>
								</div>
							<div class="blogParagraph read-more-wrap" style="margin-top: 5px;">
									<input type="checkbox" class="read-more-state" id="post-{{$lvideo->id}}" />
										<p class="read-more-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus hic nam voluptatem mollitia doloribus! Tempora neque pariatur saepe error esse soluta repellat laboriosam aperiam qui accusantium placeat, aspernatur maxime, 
										<span class="read-more-target">Libero fuga facilis vel consectetur quos sapiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatem!</span></p>

									<label for="post-{{$lvideo->id}}" class="read-more-trigger rmButton" style="margin-top: 10px;"></label>
									<hr style="margin-bottom: -20px;">
									
								</div><!--end blogParagraph  -->
							
							</div><!-- end blogBoxContent -->
						</div><!-- end blogBox -->
					@else($loop->remaining)
						<div class="blogBox">	
							<iframe width="600" height="410" src="{{$lvideo->link}}" frameborder="0" allowfullscreen></iframe>
							<div class="blogBoxContent">
								<div class="blogHeader">
								<h1><a>{{$lvideo->title}}</a></h1>
								</div>
							<div class="blogParagraph read-more-wrap" style="margin-top: 5px;">
									<input type="checkbox" class="read-more-state" id="post-{{$lvideo->id}}" />
										<p class="read-more-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus hic nam voluptatem mollitia doloribus! Tempora neque pariatur saepe error esse soluta repellat laboriosam aperiam qui accusantium placeat, aspernatur maxime, 
										<span class="read-more-target">Libero fuga facilis vel consectetur quos sapiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatem!</span></p>

									<label for="post-{{$lvideo->id}}" class="read-more-trigger rmButton" style="margin-top: 10px;"></label>
									<hr style="margin-bottom: -20px;">
									
								</div><!--end blogParagraph  -->
							
							</div><!-- end blogBoxContent -->
						</div><!-- end blogBox -->
			          @endif
						
					@endforeach
						
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