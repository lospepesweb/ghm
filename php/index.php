<?php require_once 'php/programacion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>GHM Contenidos</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<!-- Header -->
	<header class="container-fluid">
		<?php include 'modulos/nav.php'; ?>
	</header>

	<!-- Slider -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-12 slide-lp">
				<!-- <div class="carousel slide" id="primary-carousel" data-ride="carousel">

					<div class="carousel-inner">

						<div class="carousel-item active">
							<img class="d-block w-100" src="img/slide1.jpg" alt="">
						</div>

						<div class="carousel-item">
							<img class="d-block w-100" src="img/slide2.jpg" alt="">
						</div>

						<div class="carousel-item">
							<img class="d-block w-100" src="img/slide3.jpg" alt="">
						</div>

					</div>
					
				</div> -->
				<div class="flexslider">
				    <ul class="slides">
					    <li>
					      	<img src="img/slide1.jpg" />
					    </li>
					    <li>
					      	<img src="img/slide2.jpg" />
					    </li>
					    <li>
					      	<img src="img/slide3.jpg" />
					    </li>
				    </ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Videos -->
	<section class="videos">
		<div class="video1">
			<img src="img/video.png" class="img-fluid">
		</div>
		<div class="video2">
			<img src="img/video.png" class="img-fluid">
		</div>
		<div class="video3">
			<img src="img/video.png" class="img-fluid">
		</div>
		<div class="video4">
			<img src="img/video.png" class="img-fluid">
		</div>
	</section>
	<div class="clear"></div>

	<!-- Intro -->
	<section class="container intro">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10 text-center">
				<h1 class="titulo">Creatividad, profesionalismo y trayectoria</h1>
				<p class="texto">Fundada en 1993, GHM Contenidos es una productora versátil y dinámica, capaz de materializar los desafíos más osados. Desde nuestras oficinas en plena Cordillera de los Andes, proveemos servicios de publicidad, imagen corporativa, diseño integral, monitoreo y vuelos con drone o helicóptero a clientes de Argentina y Latinoamérica. Nuestra experiencia y trayectoria nos permite trabajar en campañas integrales, coproducciones y contrataciones particulares, ofreciendo como valor agregado creatividad, tecnología, conocimiento, sistematización y comprensión integral de la comunicación institucional, realización audiovisual, editorial y stands.</p>
			</div>
		</div>
	</section>

	<!-- Huevo -->
	<section class="huevo">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-lg-4">
					<img src="img/avatarG.png" class="img-fluid" alt="Guestavo Huevo Muñoz">
				</div>
				<div class="d-none d-lg-block col-1"></div>
				<div class="col-12 col-lg-5">
					<h2 class="titulo">Gustavo Muñoz Lorenzo</h2>
					<p class="texto">Dirección General</p>
					<a href="huevo.html" class="btn-default">
						<span class="icon-chevron-thin-right"></span>
						Ver biografía
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Equipo -->
	<section class="container equipo">

		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 text-center">
				<h2 class="titulo">Nuestro equipo</h2>
				<p class="texto">La colaboración es la base de la creatividad. Por eso cada proyecto es abordado interdisciplinarmente. Nuestro equipo de trabajo está integrado por profesionales expertos en cada área, que confluyen en el proceso creativo aportando sus habilidades. Cada producto entregado es el resultado de esta cooperación y sinergia creativa.</p>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="img/avatarEquipo.png" class="img-fluid" alt="Gustavo Muñoz">
					<figcaption>
						<h3 class="titulo-equipo">Gustavo</h3>
						<p class="texto-equipo">Director general</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="img/avatarEquipo.png" class="img-fluid" alt="Gustavo Muñoz">
					<figcaption>
						<h3 class="titulo-equipo">Gabriela</h3>
						<p class="texto-equipo">Directora creativa</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="img/avatarEquipo.png" class="img-fluid" alt="Gustavo Muñoz">
					<figcaption>
						<h3 class="titulo-equipo">Valentín</h3>
						<p class="texto-equipo">Equipo de diseño</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="img/avatarEquipo.png" class="img-fluid" alt="Gustavo Muñoz">
					<figcaption>
						<h3 class="titulo-equipo">Belén</h3>
						<p class="texto-equipo">Equipo de diseño</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="img/avatarEquipo.png" class="img-fluid" alt="Gustavo Muñoz">
					<figcaption>
						<h3 class="titulo-equipo">Analía</h3>
						<p class="texto-equipo">Equipo de diseño</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="img/avatarEquipo.png" class="img-fluid" alt="Gustavo Muñoz">
					<figcaption>
						<h3 class="titulo-equipo">Guillermina</h3>
						<p class="texto-equipo">Equipo de diseño</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="img/avatarEquipo.png" class="img-fluid" alt="Gustavo Muñoz">
					<figcaption>
						<h3 class="titulo-equipo">Mercedes</h3>
						<p class="texto-equipo">Equipo de diseño</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="img/avatarEquipo.png" class="img-fluid" alt="Gustavo Muñoz">
					<figcaption>
						<h3 class="titulo-equipo">Matías</h3>
						<p class="texto-equipo">Equipo de animación</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="img/avatarEquipo.png" class="img-fluid" alt="Gustavo Muñoz">
					<figcaption>
						<h3 class="titulo-equipo">Katharina</h3>
						<p class="texto-equipo">Equipo de administración</p>
					</figcaption>
				</figure>
			</div>
		</div>
	</section>

	<!-- Clientes -->
	<section class="container clientes">
		<div class="row justify-content-center align-items-center">
			<div class="col-12 text-center">
				<h2 class="titulo">Clientes</h2>
			</div>

			<div class="col-4 col-lg-3">
				<img src="img/Recurso1.png" class="img-fluid" alt="Presidencia de la Nación">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso2.png" class="img-fluid" alt="YPF">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso3.png" class="img-fluid" alt="Techint">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso4.png" class="img-fluid" alt="Tenaris">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso5.png" class="img-fluid" alt="Barrick Gold">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso6.png" class="img-fluid" alt="Panedile">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso7.png" class="img-fluid" alt="Troy Resources Argentina">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso8.png" class="img-fluid" alt="360 Energy">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso9.png" class="img-fluid" alt="McKinsey & Company">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso10.png" class="img-fluid" alt="Ford">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso11.png" class="img-fluid" alt="Toyota">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso12.png" class="img-fluid" alt="Antofagasta Minerals">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso13.png" class="img-fluid" alt="Gobierno de San Juan">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso14.png" class="img-fluid" alt="Vialidad Nacional">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso15.png" class="img-fluid" alt="Gobierno de Chile">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso16.png" class="img-fluid" alt="El Trece">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso17.png" class="img-fluid" alt="Grupo Phronesis">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso18.png" class="img-fluid" alt="Petersen, Thiele y Cruz">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso19.png" class="img-fluid" alt="Fundaciones Grupo Petersen">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso20.png" class="img-fluid" alt="Banco San Juan">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso21.png" class="img-fluid" alt="Funación Banco San Juan">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso22.png" class="img-fluid" alt="Funación Banco Santa Fe">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso23.png" class="img-fluid" alt="Funación Banco Entre Rios">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso24.png" class="img-fluid" alt="Funación Banco Santa Cruz">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso25.png" class="img-fluid" alt="Bodegas Bórbore">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso26.png" class="img-fluid" alt="Tekno Food">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso27.png" class="img-fluid" alt="Olivita">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso28.png" class="img-fluid" alt="Conduciendo Bien">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso29.png" class="img-fluid" alt="Instituto Cervantes">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso30.png" class="img-fluid" alt="Saul Saidel">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso31.png" class="img-fluid" alt="Teatro del Bicentenario">
			</div>
			<div class="col-4 col-lg-3">
				<img src="img/Recurso32.png" class="img-fluid" alt="MPBA Franklin Rawson">
			</div>
		</div>
	</section>

	<!-- Contacto  -->
	<section class="contacto">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="titulo">Contacto</h2>
				</div>
				<div class="col-12 text-center">
					<p class="texto">Esteban Echeverría 772 Sur (5400) | San Juan · Argentina</p>
				</div>
				<div class="col-12 text-center">
					<p class="texto">
						<span class="icon-phone"></span>
						+ 54 264 4266621 · 4085014
					</p>
				</div>
				<div class="col-12 text-center">
					<p class="texto">
						<span class="icon-mouse"></span>
						<a href="mailto:ghmtv@ghmtv.com">ghmtv@ghmtv.com</a> | 
						<a href="https://www.youtube.com/channel/UC1i1fEIsMjAJA5peqehEHiw" target="_blank"><span class="icon-youtube"></span></a>
						<a href="https://www.facebook.com/Ghmtv/" target="_blank"><span class="icon-facebook"></span></a>
						<a href="#"><span class="icon-instagram"></span></a>
					</p>
				</div>
				<div class="col-12 text-center">
					<a href="#" class="btn-default">
						<span class="icon-chevron-thin-right"></span>
						Enviar mail
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Mapa -->
	<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.501456166583!2d-68.5625626852397!3d-31.537849981363834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9681404df64be35f%3A0x2d3fc6fb19bffb93!2sghm+contenidos!5e0!3m2!1ses-419!2sar!4v1510436185485" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

	<!-- Footer -->
	<?php include 'modulos/footer.php'; ?>



	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>