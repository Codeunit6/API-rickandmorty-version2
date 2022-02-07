<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Rick and Morty - {{$personaje['name']}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">Personaje: {{$personaje['name']}}</a></h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="{{route('inicio')}}">Inicio</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-mobile" id="content">
								<article id="main">
									<header>
										<h2><a href="#">{{$personaje['name']}}</a></h2>
										<p>
											{{$personaje['gender']}}
										</p>
									</header>
									<a href="#" class="image featured"><img src="{{$personaje['image']}}" alt="" /></a>
									<p>
									Estatus: {{$personaje['status']}}
									</p>
									<p>
									Especie: {{$personaje['species']}}
									</p>
									<p>
									ID del personaje: {{$personaje['id']}}
									</p>
									<p>
									Después de haber estado desaparecido durante casi 20 años, Rick Sánchez llega de imprevisto a la puerta de la casa de su hija Beth y se va a vivir con ella y su familia utilizando el garaje como su laboratorio personal.
									</p>
							</div>
							<div class="col-4 col-12-mobile" id="sidebar">
								
								<section>
									<header>
										<h3>OTROS PERSONAJES</h3>
									</header>
									<p>
										Aqui puedes ver mas!
									</p>
									
									<div class="row gtr-50">
									
									@foreach ($personajes as $personajeAlternativo)
                                            @if($loop->index < 5)
                                                <div class="col-4">
                                                    <a href="{{route('detalle',$personajeAlternativo['id'])}}" class="image fit"><img src="{{$personajeAlternativo['imagen']}}" alt="" /></a>
                                                </div>
                                                <div class="col-8">
                                                    <h4>{{$personajeAlternativo['nombre']}}</h4>
                                                    <p>
                                                        {{$personajeAlternativo['especie']}}
                                                    </p>
                                                </div>
                                            @endif
                                        @endforeach
								
								</section>
							</div>
						</div>
						<hr />

					</div>

				</div>

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
											<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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

	</body>
</html>