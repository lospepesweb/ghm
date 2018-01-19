<?php 

require_once '../../models/gestorSliderCelular.php';
require_once '../../controllers/gestorSliderCelular.php';

//CLASE Y METODOS
//---------------------------------------------------------------------------------------------
class Ajax{

	#SUBIR LA IMAGEN DEL SLIDE
	#----------------------------------------------------------
	
	public $imagenTemporal;

	public function gestorSliderAjaxCelular(){
		
		$datos = $this->imagenTemporal;

		$respuesta = GestorSliderCelular::mostrarImagenControllerCelular($datos);

		echo $respuesta;

	}

	//ORDENAR IMAGENES DEL SLIDER DESKTOP
	//-------------------------------------------------------------------------------------------------
	public $actualizarOrdenId;
	public $actualizarOrdenItem;

	public function actualizarOrdenAjaxCelular(){
		
		$datos = array('ordenId'=>$this->actualizarOrdenId,
					   'ordenItem'=>$this->actualizarOrdenItem);

		$respuesta = GestorSliderCelular::actualizarOrdenControllerCelular($datos);

		echo $respuesta;

	}

}


//Objetos

if(isset($_FILES['imagen']['tmp_name'])){
	$a = new Ajax();
	$a -> imagenTemporal = $_FILES['imagen']['tmp_name'];
	$a -> gestorSliderAjaxCelular();
}

if(isset($_POST['actualizarOrdenId'])){
	$b = new Ajax;
	$b -> actualizarOrdenId = $_POST['actualizarOrdenId'];
	$b -> actualizarOrdenItem = $_POST['actualizarOrdenItem'];
	$b -> actualizarOrdenAjaxCelular();
}