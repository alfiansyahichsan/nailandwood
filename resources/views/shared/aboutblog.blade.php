<div class="blog-right">
	<div class="col-sm-3 col-sm-offset-1">
		<div class="blogSidebar">
			<div class="widget">
				<div class="widget kotak">
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
			
			<div class="widget">
				<h3 class="widget-title">Recent Posts</h3>
				<ul>
				@foreach($recent as $re)
					<li><a href="{{URL::route('blogpersonal',$re->id)}}">{{$re->title}}</a></li>
				@endforeach
				</ul>
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