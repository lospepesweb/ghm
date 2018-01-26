<?php

class Conexion {

	static public function conectar(){
	
		$link = new PDO('mysql:host=localhost;dbname=ghmtvcom_ghm','ghmtvcom_lospepes','lospepes351624');
		return $link;
	}
}