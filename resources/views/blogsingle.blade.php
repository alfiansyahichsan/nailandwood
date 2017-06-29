@extends('shared.layouts')
@section('halaman')
{{$news->title}}
@endsection
@section('content')

	<!-- =============== START BREADCRUMB ================ -->
	
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START BLOG FILTER ================ -->
	<section class="blogSingle padding" id="content" style="margin-top: 80px;">
		<div class="containerblog">
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
								<li><a href="#">{{date('d M Y', strtotime($news->created_at))}}</a>&nbsp;/&nbsp;</li>
								<li><a href="#">By Admin</a>&nbsp;/&nbsp;</li>
							</ul>
						</div>
						<div class="title">
							<h2>{{$news->title}}</h2>
						</div>
						<div class="paragraph"  style="margin-bottom: 30px;">
							{!! $news->text !!}
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
				<div class="col-sm-2"></div>
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- =============== END BLOG SINGLE ================ -->

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
	<!-- =============== END BLOG FILTER ================ -->

@endsection