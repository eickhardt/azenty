<?php 
	// Avoid "Undefined offset" error
	$check_products_path = false; 
	if ( isset(explode('/', Request::path())[1]) )
		$check_products_path = true; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="/img/azenty_ico_black.png">
	<title>Azenty - @yield('title')</title>

	<!-- Bootstrap -->
	<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

	<!-- 3D slider -->
	<link rel="stylesheet" href="/bower_components/carousel-3d/dist/styles/jquery.carousel-3d.default.css" />

	<!-- Custom css -->
	<link href="/css/app.css" rel="stylesheet" type="text/css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="footer_related_wrapper"> <!-- footer related wrapper -->
	<!-- Navigation -->
	<div id="topbar">
		<div class="container">
			<div id="header_logo">
				<a href="{{ route('home') }}"><img src="/img/azenty_logo.png" alt="">zenty</a>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-inverse" id="topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ route('home') }}">Forside</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a class="{{ (Request::path() == '/' ? 'active' : '') }}" href="{{ route('home') }}">Forside</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle {{ ( explode('/', Request::path())[0] == 'products' ? 'active' : '') }}" data-toggle="dropdown" data-hover="dropdown" role="button" aria-expanded="false">Produkter <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="{{ $check_products_path ? ( explode('/', Request::path())[1] == 'webshops' ? 'active' : '') : '' }}" href="{{ route('webshops') }}">Webshops</a></li>
							<li><a class="{{ $check_products_path ? ( explode('/', Request::path())[1] == 'e-marketing' ? 'active' : '') : '' }}" href="{{ route('e-marketing') }}">E-marketing</a></li>
							<li><a class="{{ $check_products_path ? ( explode('/', Request::path())[1] == 'google-infrastructure' ? 'active' : '') : '' }}" href="{{ route('google-infrastructure') }}">Google Infrastruktur</a></li>
							<li><a class="{{ $check_products_path ? ( explode('/', Request::path())[1] == 'hardware' ? 'active' : '') : '' }}" href="{{ route('hardware') }}">Hardware</a></li>
						</ul>
					</li>
					<li>
						<a class="{{ (Request::path() == 'references' ? 'active' : '') }}" href="{{ route('references') }}">Referencer</a>
					</li>
					<li>
						<a class="{{ (Request::path() == 'jobs' ? 'active' : '') }}" href="{{ route('jobs') }}">Job</a>
					</li>
					<li>
						<a class="{{ (Request::path() == 'about' ? 'active' : '') }}" href="{{ route('about') }}">Om os</a>
					</li>
					<li>
						<a class="{{ (Request::path() == 'contact' ? 'active' : '') }}" href="{{ route('contact') }}">Kontakt</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- EO Navigation -->

	<!-- Page -->
	@yield('content')
	<!-- EO Page -->

	<div class="push"></div>
	</div> <!-- EO footer related wrapper -->

	
	<div id="footer_line"></div>
	<div class="footer" id="footer">
		<div class="container">
			<div class="col-xs-12 col-sm-6">
				<p><b>Kontakt</b></p>
				<div>
					<p>Azenty ApS</p>
					<p>Blomstervej 1</p>
					<p>8381 Tilst</p>
				</div>
				<div>
					<p>info@azenty.com</p>
					<p>+45 28 832 831</p>
					<p>www.azenty.com</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<p><b>Info</b></p>
				<div>
					<p><a href="{{ route('about') }}">Om os</a></p>
					<p><a href="{{ route('jobs') }}">Job</a></p>
					<p><a href="{{ route('references') }}">Referencer</a></p>
				</div>
				<div>
					<p><a href="#">Handelsbetingelser</a></p>
					<p>Kunde hos Azenty?</p>
					<p>Powered by <a href="http://www.laravel.com/">Laravel</a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(function() {
			$('.alert').slideDown();
			$('.alert').on('click', function() {
				$(this).slideUp();
			});
			$('input').on('focus', function(e) {
			    $(this).one('mouseup', function() {
		            $(this).select();
		            return false;
		        }).select();
			});
		});
	</script>

	@yield('scripts')
	<!-- EO Scripts -->

</body>
</html>