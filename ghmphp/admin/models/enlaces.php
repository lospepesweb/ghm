<?php

class EnlacesModel{

	static public function enlaceModel($enlace){

		if($enlace == 'home' || 
		   $enlace == 'login' ||
		   $enlace == 'slider' ||
		   $enlace == 'videos' ||
		   $enlace == 'usuarios' ||
		   $enlace == 'salir'){

			$modulo = 'views/modulos/'.$enlace.'.php';
		
		} else if ($enlace == 'index') {
			$modulo = 'views/modulos/login.php';
		} else {
			$modulo = 'views/modulos/login.php';
		}

		return $modulo;
	}

}