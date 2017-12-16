<?php 

require_once '../../models/gestorSlider.php';
require_once '../../controllers/gestorSlider.php';

//CLASE Y METODOS
//---------------------------------------------------------------------------------------------
class Ajax{

	#SUBIR LA IMAGEN DEL SLIDE
	#----------------------------------------------------------
	
	public $imagenTemporal;

	public function gestorSliderAjax(){
		
		$datos = $this->imagenTemporal;

		$respuesta = GestorSlider::mostrarImagenController($datos);

		echo $respuesta;

	}

	//ORDENAR IMAGENES DEL SLIDER DESKTOP
	//-------------------------------------------------------------------------------------------------
	public $actualizarOrdenId;
	public $actualizarOrdenItem;

	public function actualizarOrdenAjax(){
		
		$datos = array('ordenId'=>$this->actualizarOrdenId,
					   'ordenItem'=>$this->actualizarOrdenItem);

		$respuesta = GestorSlider::actualizarOrdenController($datos);

		echo $respuesta;

	}

}


//Objetos

if(isset($_FILES['imagen']['tmp_name'])){
	$a = new Ajax();
	$a -> imagenTemporal = $_FILES['imagen']['tmp_name'];
	$a -> gestorSliderAjax();
}

if(isset($_POST['actualizarOrdenId'])){
	$b = new Ajax;
	$b -> actualizarOrdenId = $_POST['actualizarOrdenId'];
	$b -> actualizarOrdenItem = $_POST['actualizarOrdenItem'];
	$b -> actualizarOrdenAjax();
}