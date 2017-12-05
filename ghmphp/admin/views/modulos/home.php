<?php session_start();

	if(!$_SESSION['validar']){
		header('location:login');
		exit();
	} 
include 'views/modulos/botonera.php';