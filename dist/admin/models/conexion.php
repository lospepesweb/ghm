<?php

class Conexion {

	static public function conectar(){
	
		$link = new PDO('mysql:host=localhost;dbname=ghm','root','');
		return $link;
	}
}