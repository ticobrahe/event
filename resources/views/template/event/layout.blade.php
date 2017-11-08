<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Arenalluries</title>

<link href="event/css/bootstrap.css" rel="stylesheet">
<link href="event/css/revolution-slider.css" rel="stylesheet">
<link href="event/css/owl.css" rel="stylesheet">
{{Html::style('event/css/style.css')}}
{{Html::style('event/css/style.css')}}

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="event/css/responsive.css" rel="stylesheet">
<link rel="apple-touch-icon" sizes="57x57" href="event/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="event/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="event/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="event/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="event/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="event/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="event/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="event/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="event/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="event/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="event/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="event/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="event/images/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<style type="text/css">
	.bgcolour{
		background-color: blue;
	}
</style>

<body >
<div class="page-wrapper">
    <div class="preloader"></div>
    @include('template.event.header')
    @yield('content')
    @include('template.event.footer')
</div>

<script src="event/js/jquery.js"></script> 
<script src="event/js/bootstrap.min.js"></script>
<script src="event/js/revolution.min.js"></script>
<script src="event/js/bxslider.js"></script>
<script src="event/js/owl.carousel.min.js"></script>
<script src="event/js/jquery.mixitup.min.js"></script>
<script src="event/js/jquery.fancybox.pack.js"></script>
<script src="event/js/wow.js"></script>
<script src="event/js/script.js"></script>

</body>
</html>