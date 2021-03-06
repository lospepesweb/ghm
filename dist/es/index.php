<?php 
	// require_once '../admin/models/global.php';
	require_once 'models/gestorVideos.php';
	require_once 'models/gestorSlider.php';

	require_once 'controllers/gestorVideos.php';
	require_once 'controllers/gestorSlider.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- LINKS -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/responsiveslides.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111296676-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-111296676-1');
	</script>


	<meta charset="UTF-8">
	<title>GHM Contenidos</title>
	<meta name="description" content="Somos una empresa de comunicación integral. Cada trabajo es desarrollado con la singularidad que aporta su contexto y finalidad, buscando sintetizar en imágenes poderosas el universo a cada cliente.">

	<!-- METATAGS -->
	<meta name="languaje" content="ES"/>
	<meta name="robots" content="index, follow"/>
	<meta name="googlebot" content="index, follow"/>
	<meta name="geo.region" content="AR-J"/>
	<meta name="geo.placename" content="San Juan"/>
	<meta name="author" content="Los Pepes WEB, www.lospepesweb.com"/>

	<!--OG-->
	<meta property="og:title" content="GHM Contenidos"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.ghmtv.com"/>
	<meta property="og:image" content="http://www.ghmtv.com/img/favicon-200x200.png"/>
	<meta property="og:site_name" content="GHM Contenidos"/>
	<meta property="og:description" content="Somos una empresa de comunicación integral. Cada trabajo es desarrollado con la singularidad que aporta su contexto y finalidad, buscando sintetizar en imágenes poderosas el universo a cada cliente."/>
	<meta property="og:locale" content="es_LA"/>
	
	<!-- ICONO -->
	<link rel="icon" type="image/png" sizes="32x32" href="http://www.ghmtv.com/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="http://www.ghmtv.com/img/favicon-32x32.png">
</head>
<body class="index">

	<!-- Header -->
	<header class="container-fluid">
		<div class="container lang-container d-none d-lg-block">
			<div class="row">
				<div class="col-2 text-right ml-auto">
					<a href="#" id="langEsp" class="lang active">ES</a>
					<span class="lang">/</span>
					<a href="../en/index.php" id="langEng" class="lang">EN</a>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				
				<!-- Logo de GHM -->
				<a class="ghmLogo" href="#">
					<span class="icon-logo"></span>
				</a>
				<!-- Fin de Logo -->
					
				<!-- Menú hamburguesa -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
					<div id="nav-icon" class="nav-icon">
						<span class="icon-bar"></span>
						<!-- <span class="icon-bar"></span> -->
						<span class="icon-bar"></span>
					</div>
				</button>
				<!-- Fin del meú hamburguesa -->
						
				<!-- Opciones del menú -->
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="navbar-nav" id="navbar-nav-lp">
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle navClose-link" id="navBarAudiovisual" data-toggle="dropdown" role="button">AUDIOVISUAL<span class="closeNav d-lg-none">+</span></a>
							<div class="dropdown-menu" aria-labelledby="navBarAudiovisual">
					        	<a class="dropdown-item" href="audiovisual/index.html#institucional">Institucional</a>
					        	<a class="dropdown-item" href="audiovisual/index.html#infraestructura">Infraestructura</a>
					        	<a class="dropdown-item" href="audiovisual/index.html#educativo">Educativo</a>
					        	<a class="dropdown-item" href="audiovisual/index.html#publicitario">Publicitario</a>
					        	<a class="dropdown-item" href="audiovisual/index.html#mapping">Mapping</a>
					        </div>

						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle navClose-link" id="navBarFotografia" data-toggle="dropdown" role="button">FOTOGRAFÍA<span class="closeNav d-lg-none">+</span></a>
							<div class="dropdown-menu" aria-labelledby="navBarFotografia">
					        	<a class="dropdown-item" href="fotografia/naturaleza.html">Naturaleza</a>
					        	<a class="dropdown-item" href="fotografia/institucional.html">Institucional</a>
					        	<a class="dropdown-item" href="fotografia/infraestructura.html">Infraestructura</a>
					        	<a class="dropdown-item" href="fotografia/artistico.html">Artístico</a>
					        	<a class="dropdown-item" href="fotografia/extremo.html">Extremo</a>
					        	<a class="dropdown-item" href="fotografia/publicitaria.html">Publicitaria</a>
					        	<a class="dropdown-item" href="fotografia/retrato.html">Retrato</a>
					        	<a class="dropdown-item" href="fotografia/producciones.html">Producciones en estudio</a>
					        	<a class="dropdown-item" href="fotografia/agricultura.html">Agricultura</a>
					        	<a class="dropdown-item" href="fotografia/cruce.html">Cruce de Los Andes</a>
					        </div>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle navClose-link" id="navBarDiseño" data-toggle="dropdown" role="button">DISEÑO<span class="closeNav d-lg-none">+</span></a>
							<div class="dropdown-menu" aria-labelledby="navBarDiseño">
					        	<a class="dropdown-item" href="diseno/grafico.html">Gráfica</a>
					        	<a class="dropdown-item" href="diseno/editorial.html">Editorial</a>
					        	<a class="dropdown-item" href="diseno/digital.html">Digital</a>
					        </div>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle navClose-link" id="navBarEspacios" data-toggle="dropdown" role="button">ESPACIOS<span class="closeNav d-lg-none">+</span></a>
							<div class="dropdown-menu" aria-labelledby="navBarEspacios">
					        	<a class="dropdown-item" href="espacios/stand.html">Stand</a>
					        	<a class="dropdown-item" href="espacios/arquigrafia.html">Arquigrafía</a>
					        	<a class="dropdown-item" href="espacios/exposiciones.html">Exposiciones</a>
					        </div>
						</li>
						<li class="nav-item dropdown">
							<a href="monitoreo/monitoreo.html" class="nav-link navClose-link" id="navBarMonitoreo" data-toggle="" role="button">MONITOREO</a>
							<div class="dropdown-menu" aria-labelledby="navBarMonitoreo">
					        </div>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle navClose-link" id="navBarVuelos" data-toggle="dropdown" role="button">VUELOS<span class="closeNav d-lg-none">+</span></a>
							<div class="dropdown-menu ultimo" aria-labelledby="navBarVuelos">
					        	<a class="dropdown-item" href="vuelos/drone.html">Drone</a>
					        	<a class="dropdown-item" href="vuelos/helicoptero.html">Helicóptero</a>
					        </div>
						</li>
					</ul>
					<div id="lang-container" class="container lang-container d-block d-lg-none">
						<div class="row">
							<div class="col-12 text-left">
								<a href="#" id="langEsp" class="lang active">ES</a>
								<span class="lang">/</span>
								<a href="../en" id="langEng" class="lang">EN</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin de opciones de menú -->
			</div>

		</nav>
	</header>

	<!-- Slider -->
	<section id="portada" class="index container-fluid">
		<div class="row">
			<div class="col-12 slide-lp">
	
			    <ul class="rslides d-none d-lg-block">
			      <?php 
			      	$slider_d = new Slider();
			      	$slider_d -> seleccionarSliderController();
			      ?>
			    </ul>

			    <ul class="rslides d-block d-lg-none">
					<?php 
						$slider_c = new Slider();
						$slider_c -> seleccionarSliderControllerCelular();
					?>
			    </ul>

			</div>
		</div>
	</section>
	<div class="index clear"></div>

	<!-- Videos -->
	<section id="noticias" class="videos">
		<?php 
			$videos = new Videos();
			$videos ->seleccionarVideosController();
		?>
		
	</section>
	<div class="index clear"></div>

	<!-- Intro -->
	<section id="intro" class="index container intro">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10 text-center">
				<h1 class="titulo">Creatividad, profesionalismo y trayectoria</h1>
				<p class="texto">Fundada en 1993, GHM Contenidos es una productora versátil y dinámica, capaz de materializar los desafíos más osados. Desde nuestras oficinas en plena Cordillera de los Andes, proveemos servicios de publicidad, imagen corporativa, diseño integral, monitoreo y vuelos con drone o helicóptero a clientes de Argentina y Latinoamérica. Nuestra experiencia y trayectoria nos permite trabajar en campañas integrales, coproducciones y contrataciones particulares, ofreciendo como valor agregado creatividad, tecnología, conocimiento, sistematización y comprensión integral de la comunicación institucional, realización audiovisual, editorial y stands.</p>
			</div>
		</div>
	</section>

	<!-- Huevo -->
	<section id="huevo" class="index huevo">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-lg-4">
					<img src="../img/INDEX-HUEVO-BIO.png" class="img-fluid" alt="Guestavo Huevo Muñoz">
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
	<section id="equipo" class="index container equipo">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 text-center">
				<h2 class="titulo">Nuestro equipo</h2>
				<p class="texto">La colaboración es la base de la creatividad. Por eso cada proyecto es abordado interdisciplinarmente. Nuestro equipo de trabajo está integrado por profesionales expertos en cada área, que confluyen en el proceso creativo aportando sus habilidades. Cada producto entregado es el resultado de esta cooperación y sinergia creativa.</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-01.png" class="img-fluid" alt="GHM Cotenidos - Gustavo">
					<figcaption>
						<h3 class="titulo-equipo">Gustavo</h3>
						<p class="texto-equipo">Director general</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-02.png" class="img-fluid" alt="GHM Cotenidos - Gabriela">
					<figcaption>
						<h3 class="titulo-equipo">Gabriela</h3>
						<p class="texto-equipo">Directora creativa</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-03.png" class="img-fluid" alt="GHM Cotenidos - Valentín">
					<figcaption>
						<h3 class="titulo-equipo">Valentín</h3>
						<p class="texto-equipo">Diseño</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-04.png" class="img-fluid" alt="GHM Cotenidos - Belén">
					<figcaption>
						<h3 class="titulo-equipo">Belén</h3>
						<p class="texto-equipo">Diseño</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-05.png" class="img-fluid" alt="GHM Cotenidos - Analía">
					<figcaption>
						<h3 class="titulo-equipo">Analía</h3>
						<p class="texto-equipo">Diseño</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-06.png" class="img-fluid" alt="GHM Cotenidos - Guillermina">
					<figcaption>
						<h3 class="titulo-equipo">Guillermina</h3>
						<p class="texto-equipo">Diseño</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-09.png" class="img-fluid" alt="GHM Cotenidos - Enrique">
					<figcaption>
						<h3 class="titulo-equipo">Enrique</h3>
						<p class="texto-equipo">Administración</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-08.png" class="img-fluid" alt="GHM Cotenidos - Katharina">
					<figcaption>
						<h3 class="titulo-equipo">Katharina</h3>
						<p class="texto-equipo">Administración</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-07.png" class="img-fluid" alt="GHM Cotenidos - Mercedes">
					<figcaption>
						<h3 class="titulo-equipo">Mercedes</h3>
						<p class="texto-equipo">Diseño</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-11.png" class="img-fluid" alt="GHM Contenidos - Milagros">
					<figcaption>
						<h3 class="titulo-equipo">Milagros</h3>
						<p class="texto-equipo">Producción</p>
					</figcaption>
				</figure>
			</div>
<!-- 			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-10.png" class="img-fluid" alt="GHM Contenidos - Matías">
					<figcaption>
						<h3 class="titulo-equipo">Matías</h3>
						<p class="texto-equipo">Animación</p>
					</figcaption>
				</figure>
			</div> -->
<!-- 			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-12.png" class="img-fluid" alt="GHM Contenidos - Ezequiel">
					<figcaption>
						<h3 class="titulo-equipo">Ezequiel</h3>
						<p class="texto-equipo">Informática</p>
					</figcaption>
				</figure>
			</div> -->
		</div>
	</section>

	<!-- Clientes -->
	<section id="clientes" class="index container clientes">
		<div class="row justify-content-center align-items-center">
			<div class="col-12 text-center">
				<h2 class="titulo">Clientes</h2>
			</div>

			<div class="col-4 col-lg-3">
				<img src="../img/Recurso1.png" class="img-fluid" alt="Presidencia de la Nación">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso2.png" class="img-fluid" alt="YPF">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso3.png" class="img-fluid" alt="Techint">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso4.png" class="img-fluid" alt="Tenaris">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso5.png" class="img-fluid" alt="Barrick Gold">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso6.png" class="img-fluid" alt="Panedile">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso7.png" class="img-fluid" alt="Troy Resources Argentina">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso8.png" class="img-fluid" alt="360 Energy">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso9.png" class="img-fluid" alt="McKinsey & Company">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso10.png" class="img-fluid" alt="Ford">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso11.png" class="img-fluid" alt="Toyota">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso12.png" class="img-fluid" alt="Antofagasta Minerals">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso13.png" class="img-fluid" alt="Gobierno de San Juan">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso14.png" class="img-fluid" alt="Vialidad Nacional">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso15.png" class="img-fluid" alt="Gobierno de Chile">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso16.png" class="img-fluid" alt="El Trece">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso17.png" class="img-fluid" alt="Grupo Phronesis">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso18.png" class="img-fluid" alt="Petersen, Thiele y Cruz">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso19.png" class="img-fluid" alt="Fundaciones Grupo Petersen">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso20.png" class="img-fluid" alt="Banco San Juan">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso21.png" class="img-fluid" alt="Funación Banco San Juan">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso22.png" class="img-fluid" alt="Funación Banco Santa Fe">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso23.png" class="img-fluid" alt="Funación Banco Entre Rios">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso24.png" class="img-fluid" alt="Funación Banco Santa Cruz">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso25.png" class="img-fluid" alt="Bodegas Bórbore">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso26.png" class="img-fluid" alt="Tekno Food">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso27.png" class="img-fluid" alt="Olivita">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso28.png" class="img-fluid" alt="Conduciendo Bien">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso29.png" class="img-fluid" alt="Instituto Cervantes">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso30.png" class="img-fluid" alt="Saul Saidel">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso31.png" class="img-fluid" alt="Teatro del Bicentenario">
			</div>
			<div class="col-4 col-lg-3">
				<img src="../img/Recurso32.png" class="img-fluid" alt="MPBA Franklin Rawson">
			</div>
		</div>
	</section>

	<!-- Contacto  -->
	<section id="contacto" class="index contacto">
		<div class="container">
			<div class="row" itemscope itemtype="http://schema.org/CreativeWork">
				<div class="col-12 text-center">
					<h2 class="titulo">Contacto</h2>
				</div>
				<div class="col-12 text-center">
					<p class="texto">Esteban Echeverría 772 Sur (5400) | San Juan · Argentina</p>
				</div>
				<div class="col-12 text-center">
					<p class="texto" itemprop="telephone">
						<span class="icon-phone"></span>
						+ 54 264 4266621 · 4085014
					</p>
				</div>
				<div class="col-12 text-center">
					<p class="texto">
						<span class="icon-mouse"></span>
						<a href="mailto:ghmtv@ghmtv.com" itemprop="email">ghmtv@ghmtv.com</a> | 
						<a href="https://www.youtube.com/channel/UC1i1fEIsMjAJA5peqehEHiw" target="_blank"><span class="icon-youtube"></span></a>
						<a href="https://www.facebook.com/Ghmtv/" target="_blank"><span class="icon-facebook"></span></a>
						<a href="https://www.instagram.com/ghmcontenidos_"><span class="icon-instagram"></span></a>
					</p>
				</div>
				<div class="col-12 text-center">
					<a href="mailto:ghmtv@ghmtv.com" class="btn-default">
						<span class="icon-chevron-thin-right"></span>
						Enviar mail
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Mapa -->
	<div class="index mapa">
    	<div id="map">
    	</div>
	    <script>
	      	function initMap() {
	        	var ghm = {lat: -31.537869, lng: -68.560407};
	        	var map = new google.maps.Map(document.getElementById('map'), {
	          	zoom: 16,
	          	center: ghm,
	          	styles: [
					{"elementType": "geometry", "stylers": [{"color": "#f5f5f5"}]},
					{"elementType": "labels.icon", "stylers": [{"visibility": "off"}]},
					{"elementType": "labels.text.fill", "stylers": [{"color": "#616161"}]},
					{"elementType": "labels.text.stroke", "stylers": [{"color": "#f5f5f5"}]},
					{"featureType": "administrative.land_parcel", "elementType": "labels.text.fill","stylers": [{"color": "#bdbdbd"}]},
					{"featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#eeeeee"}]},
					{"featureType": "poi", "elementType": "labels.text.fill", "stylers": [{"color": "#757575"}]},
					{"featureType": "poi.park", "elementType": "geometry", "stylers": [{"color": "#e5e5e5"}]},
					{"featureType": "poi.park","elementType": "labels.text.fill","stylers": [{"color": "#9e9e9e"}]},
					{"featureType": "road","elementType": "geometry","stylers": [{"color": "#ffffff"}]},
					{"featureType": "road.arterial","elementType": "labels.text.fill","stylers": [{"color": "#757575"}]},
					{"featureType": "road.highway","elementType": "geometry","stylers": [{"color": "#dadada"}]},
					{"featureType": "road.highway", "elementType": "labels.text.fill","stylers": [{"color": "#616161"}]},
					{"featureType": "road.local", "elementType": "labels.text.fill","stylers": [{"color": "#9e9e9e"}]},
					{"featureType": "transit.line", "elementType": "geometry","stylers": [{"color": "#e5e5e5"}]},
					{"featureType": "transit.station", "elementType": "geometry","stylers": [{"color": "#eeeeee"}]},
					{"featureType": "water","elementType": "geometry","stylers": [{"color": "#c9c9c9"}]},
					{"featureType": "water","elementType": "labels.text.fill","stylers": [{"color": "#9e9e9e"}]}
				]
	        });
	        var marker = new google.maps.Marker({
	          position: ghm,
	          map: map,
	          icon: '../img/huevoMapa.png',
	          zoomControl: false,
	          scaleControl: true
	        });
	      }
	    </script>
    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_uJhI8xR2Rw67F6EH_Jo7OkQtXyDFtxU&callback=initMap" async defer></script>
	</div>

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row justify-content-center">

				<div class="d-12 col-lg-3 class-aux">
					<a id="closeNav1" data-toggle="" href="#footer-home" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer">Home<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-home" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer"><a id="btn-slide-intro" class="item-footer" href="#intro">Acerca de GHM</a></li>
						<li class="item-footer"><a id="btn-slide-huevo" class="item-footer" href="#huevo">Gustavo Muñoz Lorenzo</a></li>
						<li class="item-footer"><a id="btn-slide-equipo" class="item-footer" href="#equipo">Equipo</a></li>
						<li class="item-footer"><a id="btn-slide-clientes" class="item-footer" href="#clientes">Clientes</a></li>
						<li class="item-footer"><a id="btn-slide-noticias" class="item-footer" href="#noticias">Noticias</a></li>
						<li class="item-footer"><a id="btn-slide-contacto" class="item-footer" href="#contacto">Contacto</a></li>
					</ul>

					<a id="closeNav2" data-toggle="" href="#footer-audiovisual" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Audiovisual<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-audiovisual" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer"><a href="audiovisual/index.html#institucional" class="item-footer">Institucional</a></li>
						<li class="item-footer"><a href="audiovisual/index.html#infraestructura" class="item-footer">Infraestructura</a></li>
						<li class="item-footer"><a href="audiovisual/index.html#educativo" class="item-footer">Educativo</a></li>
						<li class="item-footer"><a href="audiovisual/index.html#publicitario" class="item-footer">Publicitario</a></li>
						<li class="item-footer"><a href="audiovisual/index.html#mappig" class="item-footer">Mapping</a></li>
					</ul>
				</div>

				<div class="d-12 col-lg-3 class-aux">
					<a id="closeNav3" data-toggle="" href="#footer-fotografia" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Fotografía<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-fotografia" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer"><a class="item-footer" href="fotografia/naturaleza.html">Naturaleza</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/institucional.html">Institucional</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/infraestructura.html">Infraestructura</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/artistico.html">Artístico</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/extremo.html">Extremo</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/publicitaria.html">Publicitaria</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/retrato.html">Retrato</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/producciones.html">Producciones en estudio</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/agricultura.html">Agricultura</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/cruce.html">Cruce de Los Andes</a></li>
					</ul>

					<a id="closeNav4" data-toggle="" href="#footer-diseño" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Diseño<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-diseño" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer"><a href="diseno/grafico.html" class="item-footer">Gráfica</a></li>
						<li class="item-footer"><a href="diseno/editorial.html" class="item-footer">Editorial</a></li>
						<li class="item-footer"><a href="diseno/digital.html" class="item-footer">Digital</a></li>
					</ul>
				</div>

				<div class="d-12 col-lg-3 class-aux">
					<a id="closeNav5" data-toggle="" href="#footer-espacios" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Espacios<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-espacios" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer"><a class="item-footer" href="espacios/stand.html">Stand</a></li>
						<li class="item-footer"><a class="item-footer" href="espacios/arquigrafia.html">Arquigrafía</a></li>
						<li class="item-footer"><a class="item-footer" href="espacios/exposiciones.html">Exposiciones</a></li>
					</ul>

					<a data-toggle="" href="monitoreo/monitoreo.html" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top btn-monitoreo">Monitoreo</a>
					<ul class="d-none d-lg-block lista-footer">
					</ul>

					<a id="closeNav6" data-toggle="" href="#footer-Drone" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Vuelos<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-Drone" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer"><a class="item-footer" href="vuelos/drone.html">Drone</a></li>
						<li class="item-footer"><a class="item-footer" href="vuelos/helicoptero.html">Helicóptero</a></li>
					</ul>
				</div>

				<div class="d-12 col-lg-3 class-aux">
					<a id="closeNav7" data-toggle="" href="#footer-oficinas" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Nuestra oficina<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-oficinas" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer">Esteban Echeverría <br class="d-none d-lg-block">772 Sur (5400)</li>
						<li class="item-footer">San Juan · Argentina</li>
						<li class="item-footer">+54 264 4266621 | 4085014</li>
						<li class="item-footer"><a class="item-footer" href="mailto:ghmtv@ghmtv.com">ghmtv@ghmtv.com</a></li>
						<ul class="lista-footer redes">
							<a href="https://www.youtube.com/channel/UC1i1fEIsMjAJA5peqehEHiw" target="_blank"><span class="icon-youtube"></span></a>
							<a href="https://www.facebook.com/Ghmtv/" target="_blank"><span class="icon-facebook"></span></a>
							<a href="https://www.instagram.com/ghmcontenidos_" target="_blank"><span class="icon-instagram"></span></a>
						</ul>
					</ul>


					<a id="closeNav8" data-toggle="" href="#footer-trabaja" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Trabajá con nosotros<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-trabaja" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer"><a class="item-footer" href="mailto:ghmtv@ghmtv.com">ghmtv@ghmtv.com</a></li>
					</ul>
					<div class="d-12 col-lg-3 class-aux border-top"></div>

				</div>

			</div>
			<div class="row logoHuevo-container">
				<div class="d-12 col-lg-3 ml-auto class-aux">
					<a href="#" class="logoHuevo"><span class="icon-logoHuevo"></span></a>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/popper.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/scripts.js"></script>
	<script type="text/javascript" src="../js/responsiveslides.min.js"></script>
	<script type="text/javascript">
		// Configuración del slider de portada
		$(".rslides").responsiveSlides({
	        speed: 0,
	        timeout: 5000
	      });


		// Con este escript lo que hacemos que al seleccionar una de las opciones del footer del index se deslice hasta esa sección suavemente.
		var listaIDS = [document.getElementById('btn-slide-intro'),
				document.getElementById('btn-slide-huevo'),
				document.getElementById('btn-slide-equipo'),
				document.getElementById('btn-slide-clientes'),
				document.getElementById('btn-slide-noticias'),
				document.getElementById('btn-slide-contacto')
				];

		for (var i=0; i<listaIDS.length; i++) {
			$(listaIDS[i]).click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

					var $target = $(this.hash);
					$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

					if ($target.length) {
						var targetOffset = $target.offset().top;
						$('html,body').animate({scrollTop: targetOffset}, 900); // modificar este numero para que el deslizamiento sea mas rápido o mas lento.
						return false;
					}
				}
			});
		}
	</script>
</body>
</html>