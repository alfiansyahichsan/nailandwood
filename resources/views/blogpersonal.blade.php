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
					@elseif($blogs->category == 2)
						<iframe width="600" height="410" src="{{$blogs->linkvideo}}" frameborder="0" allowfullscreen></iframe>
					@else
					
					@endif
						<div class="blogBox">	
							    
							<div class="blogBoxContent" style="word-wrap: break-word;">
								<div class="blogHeader">
									<h1><a href="#">{{$blogs->title}}</a></h1>
								</div>
								<div class="admin-list clearfix">
									<ul>
										<li><a href="#">{{date('d M Y', strtotime($blogs->created_at))}}</a>&nbsp;/&nbsp;</li>
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
	<div class="section-block bkg-grey-ultralight pagination-2">
	<div class="row full-width ">
		@if($previous)
			<div class="col-sm-6 leftHover">
				<a href="{{URL::route('blogpersonal',$previous['id'])}}" class="pagination-previous">
					<small>Prev</small>
					<span>{{str_limit($previous['title'],16)}}</span>
				</a>
			</div>
			@else
			<div class="col-sm-6 leftHover">
				<a href="#" class="pagination-previous">
					<small>This is</small>
					<span>FIRST</span>
				</a>
			</div>
			@endif

			@if($next)
			<div class="col-sm-6 rightHover">
				<a href="{{URL::route('blogpersonal',$next['id'])}}" class="pagination-next ">
					<small>Next</small>
					<span>{{str_limit($next['title'],16)}}</span>
				</a>
			</div>
			@else
			<div class="col-sm-6 rightHover">
				<a href="#" class="pagination-next">
					<small>This is</small>
					<span>LAST</span>
				</a>
			</div>
			@endif
	</div>
	</div>
	<!-- =============== END PAGINATION ================ -->


@endsection