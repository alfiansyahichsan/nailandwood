@extends('shared.layouts')
@section('halaman')
{{$news->title}}
@endsection
@section('content')

	<!-- =============== START BREADCRUMB ================ -->
	
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START BLOG FILTER ================ -->
	<section class="blogSingle padding" id="content">
		<div class="container">
			<div class="row">
				<div class="blog-left">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
					@if($news->category == 1)
						<div class="owl-carousels">
						    <div class="item"><img src="{{asset('img/news/'.$news->imgpath)}}" alt=""></div>
						</div>
					@else
						<iframe width="600" height="410" src="https://www.youtube.com/embed/01jcwGApTWA" frameborder="0" allowfullscreen></iframe>
					@endif
						<div class="admin-list clearfix">
							<ul>
								<li><a>{{date('d M Y', strtotime($news->created_at))}}</a>&nbsp;/&nbsp;</li>
								<li><a>Paku & Kayu</a></li>
							</ul>
						</div>
						<div class="title">
							<h2>{{$news->title}}</h2>
						</div>
						<div class="paragraph" style="margin-bottom: 30px; word-wrap: break-word;">
							{!! $news->text !!}
						</div>
				</div><!-- end blog-left -->
				<div class="col-sm-2"></div>
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- =============== END BLOG SINGLE ================ -->

	<!-- =============== START PAGINATION ================ -->
	<div class="section-block  bkg-grey-ultralight pagination-2">
		<div class="row full-width ">

			@if($previous)
			<div class="col-sm-6 leftHover" style="background-image: url({{asset('img/header/koc.jpg')}});">
				<a href="{{URL::route('blogsingle',$previous['id'])}}" class="pagination-previous">
					<small>Prev</small>
					<span>Blog</span>
				</a>
			</div>
			@else
			<div class="col-sm-6 leftHover" style="background-image: url({{asset('img/header/koc.jpg')}});">
				<a href="#" class="pagination-previous">
					<small>Prev</small>
					<span>Blog</span>
				</a>
			</div>
			@endif

			@if($next)
			<div class="col-sm-6 rightHover" style="background-image: url({{asset('img/header/koc.jpg')}});">
				<a href="{{URL::route('blogsingle',$next['id'])}}" class="pagination-next ">
					<small>Next</small>
					<span>Blog</span>
				</a>
			</div>
			@else
			<div class="col-sm-6 leftHover" style="background-image: url({{asset('img/header/koc.jpg')}});">
				<a href="#" class="pagination-previous">
					<small>Prev</small>
					<span>Blog</span>
				</a>
			</div>
			@endif

		</div>
	</div>
	<!-- =============== END PAGINATION ================ -->
	<!-- =============== END BLOG FILTER ================ -->

@endsection