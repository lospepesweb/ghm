<?php 

$idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
	if($idioma=="es") { 
			header('Location: es'); 
	} else { 
			header( 'Location: en' ); 
	}