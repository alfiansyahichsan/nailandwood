<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="HandheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>@yield('halaman') - Paku dan Kayu | Indonesia</title>
	<link rel="icon" href="{{ asset('img/content/pakukayu.png')}}">
@yield('css')
	<!-- ========== CSS INCLUDES ========== -->
	<link rel="stylesheet" href="{{ asset('css/master.css') }}">
</head>
<body>
	<div class="page-loader">
		 <div class="vertical-align align-center">
			  <img src="loader/loader.gif" alt="" class="loader-img">
		 </div>
	</div>
@yield('layout')
@yield('script')
	<!-- ================================================== -->
	<!-- =============== START JQUERY SCRIPTS ================ -->
	<!-- ================================================== -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('jplayer/jplayer/jquery.jplayer.js') }}"></script>
	<script src="{{ asset('js/jPlayer.js')}}"></script>
	<script src="{{ asset('js/plugins.js')}}"></script>
	<script src="{{ asset('js/main.js')}}"></script>
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