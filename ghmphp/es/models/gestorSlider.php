<?php

require_once '../admin/models/conexion.php';

class SliderModel {

	static public function seleccionarSliderModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT ruta FROM $tabla ORDER BY orden ASC");

		$stmt->execute();

		return $stmt -> fetchAll();

		$stmt->close();
		
	}
	
	static public function seleccionarSliderModelCelular($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT ruta FROM $tabla ORDER BY orden ASC");

		$stmt->execute();

		return $stmt -> fetchAll();

		$stmt->close();
		
	}

}