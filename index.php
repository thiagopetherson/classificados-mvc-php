<?php
	session_start();
	require 'config.php';
	
	//Aqui chamamos o arquivo de Autoload
	require 'autoload.php';
	
	$core = new Core();
	$core->run();
	
?>