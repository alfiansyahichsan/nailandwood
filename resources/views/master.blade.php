<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="HandheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>@yield('halaman') - Paku dan Kayu | Indonesia</title>
	<link rel="icon" href="{{ asset('img/content/pakukayu.png')}}">

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
@yield('css')
	<!-- ========== CSS INCLUDES ========== -->
	<link rel="stylesheet" href="{{ asset('css/master.css') }}">
</head>
<body>
	<div class="page-loader">
		<div class="spinner">
			<div class="rect1"></div>
			<div class="rect2"></div>
			<div class="rect3"></div>
			<div class="rect4"></div>
			<div class="rect5"></div>
		</div>
	</div>
@yield('layout')
@yield('script')
	<!-- ================================================== -->
	<!-- =============== START JQUERY SCRIPTS ================ -->
	<!-- ================================================== -->
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('jplayer/jplayer/jquery.jplayer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jPlayer.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
	<script>
		$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 150;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;<br></span><span class="morecontent"><span>' + h + '<br></span>&nbsp;&nbsp;<label class="read-more-trigger rmButton morelink">' + moretext + '</label></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
	</script>
	<!-- <script src="js/app.js"></script>
    <script src="js/script.js"></script> -->
	<!-- <script src="js/map.js"></script> -->
	<!-- <script type='text/javascript' src='http://theme-fusion.com/avada/architecture/wp-content/themes/Avada/assets/js/main.min.js?ver=3.8.8' async></script> -->
    <!-- <script src="assets/js/mainScrollGalleryJs.js"></script> -->
	<!--[if lte IE 9 ]>
		<script src="js/placeholder.js"></script>
		<script>
			jQuery(function() {
				jQuery('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
	<!-- ================================================== -->
	<!-- =============== END JQUERY SCRIPTS ================ -->
	<!-- ================================================== -->
</body>
</html>