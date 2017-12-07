<?php

require_once '../../models/gestorVideos.php';
require_once '../../controllers/gestorVideos.php';

/*========================================
=            Clases y métodos            =
========================================*/

class Ajax{

	//ordenar videos
	public $actualizarOrdenId;
	public $actualizarOrdenItem;

	public function actualizarOrdenAjax(){
		
		$datos = array('ordenId'=>$this->actualizarOrdenId,
					   'ordenItem'=>$this->actualizarOrdenItem);

		$respuesta = GestorVideos::actualizarOrdenController($datos);

		echo $respuesta;

	}

}

/*=====  End of Clases y métodos  ======*/

/*===============================
=            Objetos            =
===============================*/

if(isset($_POST['actualizarOrdenId'])){
	$a = new Ajax;
	$a -> actualizarOrdenId = $_POST['actualizarOrdenId'];
	$a -> actualizarOrdenItem = $_POST['actualizarOrdenItem'];
	$a -> actualizarOrdenAjax();
}

/*=====  End of Objetos  ======*/