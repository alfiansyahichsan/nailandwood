@extends('shared.layouts')
@section('halaman')
{{$blogs->title}}
@endsection
@section('content')

<section class="padding blogSidebarRight" id="content">
		<div class="container" style="margin-top: -30px;">
			<div class="row">
				<div class="blog-sidebar-right">

					<div class="col-sm-8">
					@if($blogs->category == 1)
						<div class="item"><img src="{{asset('img/blog/'.$blogs->imgpath)}}" alt="{{$blogs->imgpath}}"></div>
					@else
						<iframe width="600" height="410" src="{{$blogs->linkvideo}}" frameborder="0" allowfullscreen></iframe>
					@endif
						<div class="blogBox">	
							    
							<div class="blogBoxContent">
								<div class="blogHeader">
									<h1><a href="#">{{$blogs->title}}</a></h1>
								</div>
								<div class="admin-list clearfix">
									<ul>
										<li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
										<li><a href="#">By Admin</a>&nbsp;&nbsp;</li>
									</ul>
								</div>
								<div class="blogParagraph" style="word-wrap: break-word;">
									{!! $blogs->text !!}
								</div><!--end blogParagraph  -->
								<hr>			
							</div><!-- end blogBoxContent -->
						</div><!-- end blogBox -->
						
					</div><!-- end col-sm-8 -->
				</div><!-- end blog-left -->

@include('shared.aboutblog')

			</div><!-- end row -->
		</div><!-- end container -->
	</section>
		<!-- =============== START PAGINATION ================ -->
	<div class="section-block  bkg-grey-ultralight pagination-2">
		<div class="row full-width ">
			<div class="col-sm-6 leftHover" style="background-image: url('img/header/koc.jpg');">
				<a href="/news/35" class="pagination-previous">
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


@endsection