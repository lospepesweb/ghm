<?php

class Enlaces{

	public function enlacesController(){
		
		if(isset($_GET['pagina'])){
			$enlaces = $_GET['pagina'];
		} else {
			$enlaces = 'index';
		}

		$respuesta = EnlacesModel::enlaceModel($enlaces);

		include $respuesta;

	}

}