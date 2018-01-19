<?php

require_once 'conexion.php';

class GestorPasswordModel{

	static public function seleccionarPasswordModel($datosModel, $tabla){
	
		$stmt = Conexion::conectar()->prepare("SELECT password FROM $tabla WHERE id = 1");

		// $stmt -> bindparam(':password', $datosModel, PDO::PARAM_STR);

		$stmt->execute();
		
		return $stmt->fetch();
		
		$stmt->close();

	}

	static public function actualizarPasswordModel($datosModel, $tabla){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET password = :password WHERE password = :passActual");
		$stmt -> bindParam(':passActual', $datosModel['passwordActual'], PDO::PARAM_STR);
		$stmt -> bindParam(':password', $datosModel['passwordNueva'], PDO::PARAM_STR);

		if($stmt->execute()){
			return 'ok';
		} else {
			return 'error';
		}


	}

}