<?php 
	require_once '../models/gestorSlider.php';
	require_once '../models/gestorVideos.php';

	require_once '../controllers/gestorVideos.php';
	require_once '../controllers/gestorSlider.php';
?>

<!DOCTYPE html>
<html lang="en">
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
	<meta name="languaje" content="en"/>
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
					<a href="../es" id="langEsp" class="lang">ES</a>
					<span class="lang">/</span>
					<a href="#" id="langEng" class="lang active">EN</a>
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
					        	<a class="dropdown-item" href="audiovisual/institucional.html">Institutional</a>
					        	<a class="dropdown-item" href="audiovisual/infraestructura.html">Infrastructure</a>
					        	<a class="dropdown-item" href="audiovisual/educativo.html">Educative</a>
					        	<a class="dropdown-item" href="audiovisual/publicitario.html">Publicity</a>
					        	<a class="dropdown-item" href="audiovisual/mapping.html">Mapping</a>
					        </div>

						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle navClose-link" id="navBarFotografia" data-toggle="dropdown" role="button">PHOTOGRAPHY<span class="closeNav d-lg-none">+</span></a>
							<div class="dropdown-menu" aria-labelledby="navBarFotografia">
					        	<a class="dropdown-item" href="fotografia/naturaleza.html">Nature</a>
					        	<a class="dropdown-item" href="fotografia/institucional.html">Institutional</a>
					        	<a class="dropdown-item" href="fotografia/infraestructura.html">Infrastructure</a>
					        	<a class="dropdown-item" href="fotografia/artistico.html">Artistic</a>
					        	<a class="dropdown-item" href="fotografia/extremo.html">Extreme</a>
					        	<a class="dropdown-item" href="fotografia/publicitaria.html">Publicity</a>
					        	<a class="dropdown-item" href="fotografia/retrato.html">Portrait</a>
					        	<a class="dropdown-item" href="fotografia/producciones.html">Studio productions</a>
					        	<a class="dropdown-item" href="fotografia/agricultura.html">Agriculture</a>
					        	<a class="dropdown-item" href="fotografia/cruce.html">Los Andes crossing</a>
					        </div>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle navClose-link" id="navBarDiseño" data-toggle="dropdown" role="button">DESIGN<span class="closeNav d-lg-none">+</span></a>
							<div class="dropdown-menu" aria-labelledby="navBarDiseño">
					        	<a class="dropdown-item" href="diseno/grafico.html">Graphic</a>
					        	<a class="dropdown-item" href="diseno/editorial.html">Editorial</a>
					        	<a class="dropdown-item" href="diseno/digital.html">Digital</a>
					        </div>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle navClose-link" id="navBarEspacios" data-toggle="dropdown" role="button">SPACES<span class="closeNav d-lg-none">+</span></a>
							<div class="dropdown-menu" aria-labelledby="navBarEspacios">
					        	<a class="dropdown-item" href="espacios/stand.html">Stand</a>
					        	<a class="dropdown-item" href="espacios/arquigrafia.html">Arquigraphy</a>
					        	<a class="dropdown-item" href="espacios/exposiciones.html">Expositions</a>
					        </div>
						</li>
						<li class="nav-item dropdown">
							<a href="monitoreo/monitoreo.html" class="nav-link navClose-link" id="navBarMonitoreo" data-toggle="" role="button">MONITORING</a>
							<div class="dropdown-menu" aria-labelledby="navBarMonitoreo">
					        </div>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle navClose-link" id="navBarVuelos" data-toggle="dropdown" role="button">FLIGHTS<span class="closeNav d-lg-none">+</span></a>
							<div class="dropdown-menu ultimo" aria-labelledby="navBarVuelos">
					        	<a class="dropdown-item" href="vuelos/drone.html">Drone</a>
					        	<a class="dropdown-item" href="vuelos/helicoptero.html">Helicopter</a>
					        </div>
						</li>
					</ul>
					<div id="lang-container" class="container lang-container d-block d-lg-none">
						<div class="row">
							<div class="col-12 text-left">
								<a href="../es" id="langEsp" class="lang">ES</a>
								<span class="lang">/</span>
								<a href="#" id="langEng" class="lang active">EN</a>
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
			$videos ->seleccionarVideosControllerIngles();
		?>
		
	</section>
	<div class="index clear"></div>
	
	<!-- Intro -->
	<section id="intro" class="index container intro">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10 text-center">
				<h1 class="titulo">Creativity, professionalism and career</h1>
				<p class="texto">Founded 1993, GHM Contents is a versatile and dynamic producer, capable of materialize the most daring challenges.  From our office based in Los Andes mountain range, we provide services of publicity, corporative image, integral design, monitoring and flights with drones or helicopter to clients from Argentina and Latin America. Our experience and career path allow us to work in integral campaigns, co-productions and private hiring. We offer, as an added value, creativity, technology, knowledge, systematization and integral understanding of institutional communication, audiovisual realization, editorial and stands.</p>
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
					<p class="texto">General Manager</p>
					<a href="huevo.html" class="btn-default">
						<span class="icon-chevron-thin-right"></span>
						See Biography
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Equipo -->
	<section id="equipo" class="index container equipo">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 text-center">
				<h2 class="titulo">Our team</h2>
				<p class="texto">The cooperation is the base of the creativity. That is why, every project is carried out interdisciplinary. Our teamwork is formed by professionals qualified in each area who contribute with their skills. Each delivered product is the result of this cooperation and creative synergy.</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-01.png" class="img-fluid" alt="GHM Cotenidos - Gustavo">
					<figcaption>
						<h3 class="titulo-equipo">Gustavo</h3>
						<p class="texto-equipo">General Manager</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-02.png" class="img-fluid" alt="GHM Cotenidos - Gabriela">
					<figcaption>
						<h3 class="titulo-equipo">Gabriela</h3>
						<p class="texto-equipo">Creative Manager Director</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-03.png" class="img-fluid" alt="GHM Cotenidos - Valentín">
					<figcaption>
						<h3 class="titulo-equipo">Valentín</h3>
						<p class="texto-equipo">Design</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-04.png" class="img-fluid" alt="GHM Cotenidos - Belén">
					<figcaption>
						<h3 class="titulo-equipo">Belén</h3>
						<p class="texto-equipo">Design</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-05.png" class="img-fluid" alt="GHM Cotenidos - Analía">
					<figcaption>
						<h3 class="titulo-equipo">Analía</h3>
						<p class="texto-equipo">Design</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-06.png" class="img-fluid" alt="GHM Cotenidos - Guillermina">
					<figcaption>
						<h3 class="titulo-equipo">Guillermina</h3>
						<p class="texto-equipo">Design</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-09.png" class="img-fluid" alt="GHM Cotenidos - Enrique">
					<figcaption>
						<h3 class="titulo-equipo">Enrique</h3>
						<p class="texto-equipo">Administration</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-08.png" class="img-fluid" alt="GHM Cotenidos - Katharina">
					<figcaption>
						<h3 class="titulo-equipo">Katharina</h3>
						<p class="texto-equipo">Administration</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-07.png" class="img-fluid" alt="GHM Cotenidos - Mercedes">
					<figcaption>
						<h3 class="titulo-equipo">Mercedes</h3>
						<p class="texto-equipo">Design</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-11.png" class="img-fluid" alt="GHM Contenidos - Milagros">
					<figcaption>
						<h3 class="titulo-equipo">Milagros</h3>
						<p class="texto-equipo">Production</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-6 col-lg-4 text-center fila">
				<figure>
					<img src="../img/INDEX-EQUIPO-GHM-12.png" class="img-fluid" alt="GHM Contenidos - Ezequiel">
					<figcaption>
						<h3 class="titulo-equipo">Ezequiel</h3>
						<p class="texto-equipo">I.T</p>
					</figcaption>
				</figure>
			</div>
		</div>
	</section>
	
	<!-- Clientes -->
	<section id="clientes" class="index container clientes">
		<div class="row justify-content-center align-items-center">
			<div class="col-12 text-center">
				<h2 class="titulo">Clients</h2>
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
					<h2 class="titulo">Contact</h2>
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
						<a href="#"><span class="icon-instagram"></span></a>
					</p>
				</div>
				<div class="col-12 text-center">
					<a href="mailto:ghmtv@ghmtv.com" class="btn-default">
						<span class="icon-chevron-thin-right"></span>
						Send an email
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
						<li class="item-footer"><a id="btn-slide-intro" class="item-footer" href="#intro">About  ghm</a></li>
						<li class="item-footer"><a id="btn-slide-huevo" class="item-footer" href="#huevo">Gustavo Muñoz Lorenzo</a></li>
						<li class="item-footer"><a id="btn-slide-equipo" class="item-footer" href="#equipo">Team</a></li>
						<li class="item-footer"><a id="btn-slide-clientes" class="item-footer" href="#clientes">Clients</a></li>
						<li class="item-footer"><a id="btn-slide-noticias" class="item-footer" href="#noticias">News</a></li>
						<li class="item-footer"><a id="btn-slide-contacto" class="item-footer" href="#contacto">Contact</a></li>
					</ul>

					<a id="closeNav2" data-toggle="" href="#footer-audiovisual" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Audiovisual<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-audiovisual" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer"><a href="audiovisual/institucional.html" class="item-footer">Institutional</a></li>
						<li class="item-footer"><a href="audiovisual/infraestructura.html" class="item-footer">Infrastructure</a></li>
						<li class="item-footer"><a href="audiovisual/educativo.html" class="item-footer">Educative</a></li>
						<li class="item-footer"><a href="audiovisual/publicitario.html" class="item-footer">Publicity</a></li>
						<li class="item-footer"><a href="audiovisual/mapping.html" class="item-footer">Mapping</a></li>
					</ul>
				</div>

				<div class="d-12 col-lg-3 class-aux">
					<a id="closeNav3" data-toggle="" href="#footer-fotografia" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Photography<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-fotografia" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer"><a class="item-footer" href="fotografia/naturaleza.html">Nature</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/institucional.html">Institutional</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/infraestructura.html">Infrastructure</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/artistico.html">Artistic</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/extremo.html">Extreme</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/publicitaria.html">Publicity</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/retrato.html">Portrait</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/producciones.html">Studio productions</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/agricultura.html">Agriculture</a></li>
						<li class="item-footer"><a class="item-footer" href="fotografia/cruce.html">Los Andes crossing</a></li>
					</ul>

					<a id="closeNav4" data-toggle="" href="#footer-diseño" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Design<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-diseño" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer"><a href="diseno/grafico.html" class="item-footer">Graphic</a></li>
						<li class="item-footer"><a href="diseno/editorial.html" class="item-footer">Editorial</a></li>
						<li class="item-footer"><a href="diseno/digital.html" class="item-footer">Digital</a></li>
					</ul>
				</div>

				<div class="d-12 col-lg-3 class-aux">
					<a id="closeNav5" data-toggle="" href="#footer-espacios" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Spaces<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-espacios" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer"><a class="item-footer" href="espacios/stand.html">Stand</a></li>
						<li class="item-footer"><a class="item-footer" href="espacios/arquigrafia.html">Arquigraphy</a></li>
						<li class="item-footer"><a class="item-footer" href="espacios/exposiciones.html">Expositions</a></li>
					</ul>

					<a data-toggle="" href="monitoreo/monitoreo.html" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top btn-monitoreo">Monitoring</a>
					<ul class="d-none d-lg-block lista-footer">
					</ul>

					<a id="closeNav6" data-toggle="" href="#footer-Drone" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Flights<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-Drone" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer"><a class="item-footer" href="vuelos/drone.html">Drone</a></li>
						<li class="item-footer"><a class="item-footer" href="vuelos/helicoptero.html">Helicopter</a></li>
					</ul>
				</div>

				<div class="d-12 col-lg-3 class-aux">
					<a id="closeNav7" data-toggle="" href="#footer-oficinas" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Our office<span class="closeNav d-lg-none">+</span></a>
					<ul id="footer-oficinas" class="collapse show lista-footer" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						<li class="item-footer">Esteban Echeverría <br class="d-none d-lg-block">772 Sur (5400)</li>
						<li class="item-footer">San Juan · Argentina</li>
						<li class="item-footer">+54 264 4266621 | 4085014</li>
						<li class="item-footer"><a class="item-footer" href="mailto:ghmtv@ghmtv.com">ghmtv@ghmtv.com</a></li>
						<ul class="lista-footer redes">
							<a href="https://www.youtube.com/channel/UC1i1fEIsMjAJA5peqehEHiw" target="_blank"><span class="icon-youtube"></span></a>
							<a href="https://www.facebook.com/Ghmtv/" target="_blank"><span class="icon-facebook"></span></a>
							<a href="#"><span class="icon-instagram"></span></a>
						</ul>
					</ul>


					<a id="closeNav8" data-toggle="" href="#footer-trabaja" aria-expanded="false" aria-controls="collapseOne" class="titulo-footer border-top">Work with us<span class="closeNav d-lg-none">+</span></a>
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