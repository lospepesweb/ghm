<?php 

$idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
	if($idioma=="es") { 
			// header('Location: es'); 
			header('Location: https://www.ghmtv.com/es'); 
	} else { 
			// header( 'Location: en' ); 
			header( 'Location: https://www.ghmtv.com/en' ); 
	}