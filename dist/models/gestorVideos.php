<?php

require_once '../admin/models/conexion.php';

class VideosModel {

	static public function seleccionarVideosModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT ruta, tit_esp, noti_esp FROM $tabla ORDER BY orden ASC LIMIT 4");

		$stmt->execute();

		return $stmt -> fetchAll();

		$stmt->close();
		
	}

	static public function seleccionarVideosModelIngles($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT ruta, tit_ing, noti_ing FROM $tabla ORDER BY orden ASC LIMIT 4");

		$stmt->execute();

		return $stmt -> fetchAll();

		$stmt->close();
		
	}
	
}