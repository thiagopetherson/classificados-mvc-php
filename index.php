<?php
	session_start();
	require 'config.php';	
	//Aqui chamamos o arquivo de Autoload do Composer
	require 'vendor/autoload.php';
		
	$core = new Core\Core();
	$core->run();
	
?>