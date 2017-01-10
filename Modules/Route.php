<?php 
	// convertimos fatal error en excepciones
	$bandera = true;
	if(!isset($_GET['page'])){
		$bandera = false;
	}else{
	if(!file_exists("Resources/templates/$_GET[page].php")){
		$bandera = false;

	}
}
	if ($bandera == false) {
		require_once "Resources/templates/main.php";
	}else{
		require_once "Resources/templates/$_GET[page].php";
	}
 	
 ?>
