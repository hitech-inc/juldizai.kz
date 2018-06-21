<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Жулдызай</title>

	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="/css/font.css">
	<style>
		body{
			font-family: ArnoProBoldSubhead_1;
		}
		a{
			cursor: pointer !important;
		}
	</style>
	<!-- Yandex map API -->
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
    </script>

    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css"/>
</head>
<body>
	<header>
		@include('frontend.partials._header')
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
		@include('frontend.partials._footer')
	</footer>
	
	<script src="/js/jquery.js"></script>
	<!-- Slick slider -->
	<script type="text/javascript" src="/js/slick.min.js"></script>
	<script src="/js/jquery-ui.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/app.js"></script>

	<script>
		$(document).ready(function(){
			@yield('scripts');
			
			$('.banner-slider').slick({
				dots: true,
			    infinite: true,
			    speed: 300,
			    slidesToShow: 1,
			    adaptiveHeight: false,
			    autoplay: true,
  				autoplaySpeed: 80000
			});
		});
	</script>

</body>
</html>