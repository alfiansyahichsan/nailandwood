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
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
</head>
<body>
	<div class="page-loader">
		<div class="loader">
	<div class="loader-inner">
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
	</div>
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
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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

	<script>
	@if(Session::has('message'))
	var type = "{{ Session::get('alert-type', 'info') }}";
	switch(type){
	    case 'info':
	        toastr.info("{{ Session::get('message') }}");
	        break;
	    
	    case 'warning':
	        toastr.warning("{{ Session::get('message') }}");
	        break;
	    case 'success':
	        toastr.success("{{ Session::get('message') }}");
	        break;
	    case 'error':
	        toastr.error("{{ Session::get('message') }}");
	        break;
	}
	@endif
	</script>

	<script>
	$('div.alert').delay(3500).slideUp(300);
	</script>

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