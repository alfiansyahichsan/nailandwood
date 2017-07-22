@extends('shared.layout')
@section('halaman')
Biography
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
                                {!! $s->title !!}
                            </h1>
                            <p>
                                {!! $s->text !!}
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

	<!-- =============== START BIOGRAPHY SECTION ================ -->
	<section class="biography padding background-properties" id="content">
		<div class="container" style="margin-top: -50px;">
			<div class="sectionTitle paddingBottom">
				<span class="heading-t3"></span>
				<h2><a href="albums.html">Biography</a></h2>
				<span class="heading-b3"></span>
			</div><!-- end sectionTtile -->
			@foreach($bio as $bi)
			<div class="row">
				<div class="col-sm-12">
					{!! $bi->text !!}
				</div>
			</div>
		</div><!-- end container -->
	</section>

	<!-- =============== START CONTACT ================ -->
	<section class="contactSingle padding background-properties" id="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="contactTop">
						<h2>Contact Information</h2>
						<h4>{{$bi->alamat}}</h4>
						<div class="contactInfo">
							<ul>
								<li>Email: <a>{{$bi->email}}</a></li>
								<li>Phone: <a>{{$bi->phone}}</a></li>
							</ul>
						</div>
					</div>
				</div><!-- end col-sm-4 -->
				@endforeach
				<div class="col-sm-7 col-sm-offset-1">
					<div class="singleBlogForm">
						<h2>Get in Touch</h2>
						<form action="/biography" method="POST" class="comment-form">
						{{ csrf_field() }}
							<input id="email" name="email" type="email" value="" placeholder="Email Address* " required=""><br>
							<input id="firstname" name="firstname" type="text" value="" placeholder="Your First Name* " required="">
							<input id="subject" name="subject" type="text" value="" placeholder="Subject* " required="">
							<textarea id="message" name="message" placeholder="Message..." rows="8" required=""></textarea>
							<p class="form-submit">
								<input name="submit" type="submit" id="submit" value="Send Email">
							</p>
							@if ($message = Session::get('success'))

						        <div class="alert alert-success">

						            <p>{{ $message }}</p><br>

						        </div>

						    @endif
						</form>
					</div><!-- end contactForm -->
				</div><!-- end col-sm-7 col-sm-offset-1 -->
			</div>
		</div><!-- end container -->
	</section>
	<!-- =============== END CONTACT ================ -->
@endsection