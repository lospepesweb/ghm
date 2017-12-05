<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>GHM | Dashboard</title>
	<link rel="stylesheet" type="text/css" href="views/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/css/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="views/css/estilos-back.css">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<script src="views/js/jquery-3.2.1.min.js"></script>
	<script src="views/js/bootstrap.min.js"></script>
	<script src="views/js/jquery-ui.min.js"></script>
	<script src="views/js/sweetalert.min.js"></script>
</head>
<body>
	
		<!--=====================================
		COLUMNA CONTENIDO        
		======================================-->
		
		<?php  
		$plantilla = new Enlaces();
		$plantilla -> enlacesController();
		?>
	
		<!--====  Fin de COLUMNA CONTENIDO  ====-->
	
	<script src="views/js/validarLogin.js"></script>
	<script src="views/js/gestorVideos.js"></script>
</body>
</html>