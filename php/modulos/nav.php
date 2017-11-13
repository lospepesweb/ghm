<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		
		<!-- Logo de GHM -->
		<a class="ghmLogo" href="<?php 	echo RUTA; ?>">
			<span class="icon-logo"></span>
		</a>
		<!-- Fin de Logo -->
			
		<!-- Menú hamburguesa -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
			<div id="nav-icon" class="nav-icon">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</div>
		</button>
		<!-- Fin del meú hamburguesa -->
				
		<!-- Opciones del menú -->
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="navbar-nav" id="navbar-nav-lp">
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="navBarAudiovisual" data-toggle="dropdown" role="button">AUDIOVISUAL</a>
					<div class="dropdown-menu" aria-labelledby="navBarAudiovisual">
			        	<a class="dropdown-item" href="#.">Institucional</a>
			        	<a class="dropdown-item" href="#.">Infraestructura</a>
			        	<a class="dropdown-item" href="#.">Educativo</a>
			        	<a class="dropdown-item" href="#.">Publicitario</a>
			        	<a class="dropdown-item" href="#.">Mappig</a>
			        </div>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="navBarFotografia" data-toggle="dropdown" role="button">FOTOGRAFÍA</a>
					<div class="dropdown-menu" aria-labelledby="navBarFotografia">
			        	<a class="dropdown-item" href="<?php echo RUTA; ?>fotografia/naturaleza.php">Naturaleza</a>
			        	<a class="dropdown-item" href="#">Institucional</a>
			        	<a class="dropdown-item" href="#">Infraestructura</a>
			        	<a class="dropdown-item" href="#">Artístico</a>
			        	<a class="dropdown-item" href="#">Extremo</a>
			        	<a class="dropdown-item" href="#">Publicitaria</a>
			        	<a class="dropdown-item" href="#">Retrato</a>
			        	<a class="dropdown-item" href="#">Producciones en estudio</a>
			        </div>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="navBarDiseño" data-toggle="dropdown" role="button">DISEÑO</a>
					<div class="dropdown-menu" aria-labelledby="navBarDiseño">
			        	<a class="dropdown-item" href="#">Gráfica</a>
			        	<a class="dropdown-item" href="#">Editorial</a>
			        	<a class="dropdown-item" href="#">Digital</a>
			        </div>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link" dropdown-toggle" id="navBarEspacios" data-toggle="dropdown" role="button">ESPACIOS</a>
					<div class="dropdown-menu" aria-labelledby="navBarEspacios">
			        	<a class="dropdown-item" href="#">Stand</a>
			        	<a class="dropdown-item" href="#">Arquigrafía</a>
			        	<a class="dropdown-item" href="#">Exposiciones</a>
			        </div>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">MONITOREO</a>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="navBarVuelos" data-toggle="dropdown" role="button"">VUELOS</a>
					<div class="dropdown-menu ultimo" aria-labelledby="navBarVuelos">
			        	<a class="dropdown-item" href="#">Drone</a>
			        	<a class="dropdown-item" href="#">Helicóptero</a>
			        </div>
				</li>
			</ul>
		</div>
		<!-- Fin de opciones de menú -->
	</div>
</nav>