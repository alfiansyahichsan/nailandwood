@extends('shared.layout')
@section('halaman')
Biography
@endsection
@section('content')
	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('img/header/koc.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div class="breadTxt">
                            <h1>
                                Paku Dan Kayu
                            </h1>
                            <p>
                                There's an old saying, 'That what doesn't kill you, makes you stronger' I don't believe that. <br> I think the things that try to kill you make you angry and sad. Strength comes<br> from the good things - your family, your friends,<br> the satisfaction of hard work.
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
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START BIOGRAPHY SECTION ================ -->
	<section class="biography padding background-properties" id="content">
		<div class="container">
			<div class="sectionTitle paddingBottom">
				<span class="heading-t3"></span>
				<h2><a href="albums.html">Biography</a></h2>
				<span class="heading-b3"></span>
			</div><!-- end sectionTtile -->
			<div class="row">
				<div class="col-sm-12">
					<p>Emi Haze graduated from the Institute
					of Design in Verona with
					a degree in Graphic Design
					and Advertising Design.I live in the north-east of Italy and my huge passion is digital art.
					Art and painting connected to technology have always been my strongest passions. People think I am calm, quiet, sometimes introvert, really creative, inspired and perfectionist.
					In my opinion everything in every moment has an artistic side, the aesthetics of things, people around me...
					for me everything has its own importance, images, textures, sounds, fragrances, my creativity is costantly stimulated.</p>
					<p>I currently work as freelance and in the last years I focused on personal projects and creations in order to build,
					my own wide portfolio that could distinguish me both in style, technique and creativity.
					In my first works i focused on a graphic style based on construction and deconstruction of the human body
					using various tools and graphic effects that render it almost a sketch.</p>
					<p>In my recent works I tried to merge the human body with nature or rather with the four elements of fire,
					air, water and earth, and even with a fifth esoteric element: the Aristotelian ether, that includes all the others,
					the essence of celestial bodies, eternal and unchangeable in comparison with the earth as a place of change.
					The result is the vision of my imaginative world hanging between reality and fantasy, dream and utopia
					and in which color and sensitivity have the predominant role.</p>
					<p>I currently work as freelance and in the last years I focused on personal projects and creations in order to build,
					my own wide portfolio that could distinguish me both in style, technique and creativity.
					the essence of celestial bodies, eternal and unchangeable in comparison with the earth as a place of change.
					The result is the vision of my imaginative world hanging between reality and fantasy, dream and utopia
					and in which color and sensitivity have the predominant role.</p>
				</div>
					<div class="signature" style="float: right;">
						<a href="http://www.emihaze.com/showcase">Emili Haze:</a>
						<div class="imgSignuature">
							<img src="img/content/signature.png" alt="">
						</div>
					</div>
			</div>
		</div><!-- end container -->
	</section>

	<!-- =============== START CONTACT ================ -->
	<section class="contactSingle padding background-properties" id="content" style="background-image:url(img/subHeader/headser.png);">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="contactTop">
						<h2>Contact Information</h2>
						<h4>Bandung, Indonesia</h4>
						<p>Paku dan Kayu<br>
						yeahhhhh
						</p>
						<div class="contactInfo">
							<ul>
								<li>Email: <a href="#">pakukayu@gmail.com</a></li>
								<li>Phone: <a href="#">+68224578945</a></li>
							</ul>
						</div>
					</div>
				</div><!-- end col-sm-4 -->
				<div class="col-sm-7 col-sm-offset-1">
					<div class="singleBlogForm">
						<h2>Get in Touch</h2>
						<form action="#" method="post" class="comment-form">
							<input id="author" name="author" type="text" value="" aria-required="true" required="" placeholder="First Name *">
							<input id="lastName" name="email" type="text" value="" aria-required="true" required="" placeholder="Last Name">
							<input id="url" name="url" type="text" value="" placeholder="Subject* ">
							<input id="address" name="url" type="text" value="" placeholder="Email Address* ">
							<textarea name="comment" placeholder="Message..." rows="6" required=""></textarea>
							<p class="form-submit">
								<input name="submit" type="submit" id="submit" value="Send Email">
							</p>
						</form>
					</div><!-- end contactForm -->
				</div><!-- end col-sm-7 col-sm-offset-1 -->
			</div>
		</div><!-- end container -->
	</section>
	<!-- =============== END CONTACT ================ -->
@endsection