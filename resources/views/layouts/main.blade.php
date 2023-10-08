<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>@yield('title')</title>
@section('head')
@yield('head')

	    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    	<![endif]-->
    
	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,300,700,400' rel='stylesheet' type='text/css'>

	<!-- Library CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/library/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/library/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/library/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/library/jquery-ui.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/library/jquery.fancybox.css') }}">
   
    
    
	
	<!-- SHOP -->

	<!-- MAIN STYLE -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ URL::asset('css/color-green.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('css/layout-shop.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('css/style1.css') }}" type="text/css" />
    

	
	@show
    
    
</head>

<body>
@yield('header')
@yield('body')
  
  <!-- Library JS -->
	<script src="{{ URL::asset('js/library/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery-ui.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/owl.carousel.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery.ui.touch-punch.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/parallax.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery.countdown.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery.mb.YTPlayer.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery.responsiveTabs.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery.fancybox.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/SmoothScroll.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/isotope.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery.colio.min.js') }}" type="text/javascript"></script>
    
     <!-- Extension1 JS -->
	<script src="{{ URL::asset('js/library/modules.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/sorting.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/library/theme.js') }}" type="text/javascript"></script>

	<!-- Main Js -->
<script src="{{ URL::asset('js/script.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/scriptc.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/crop.js') }}" type="text/javascript"></script>
    
    
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-20585382-5', 'megadrupal.com');
        ga('send', 'pageview');
    </script>

	  
</body>
</html>