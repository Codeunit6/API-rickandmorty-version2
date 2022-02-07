<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Rick and Morty - Personajes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="assets/css/css.css" media="none" onload="if(media!='all')media='all'"><noscript><link rel="stylesheet" href="assets/css/css.css"></noscript>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">Rick and morty</a></h1>
								<hr />
								<p>Personajes de la serie</p>
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Empezar</a>
							</footer>
						</div>
					</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Aqui estan todos los personajes de <strong>Rick and Morty</strong>.</h2>
					</header>
				</section>

			<!-- Carousel -->
				@yield('catalogos')
				@yield('botones')
				

			<!-- Main -->
				@yield('banner')
			<!-- Features -->
			<!-- Footer -->
		<div id="footer">
			<!-- Contact -->
				<section class="contact">
					
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">Linkedin</span></a></li>
					</ul>
				</section>

			<!-- Copyright -->
				<div class="copyright">
					<ul class="menu">
						<li>&copy; Rick and Morty.</li>
					</ul>
				</div>
			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/colores.js"></script>

	</body>
</html>