<?php
	
	require "enviroment.php";	
	$config = array();
	
	//Esse IF e else é para ver se configuramos o banco com dados
	//do servidor local ou da hospedagem
	if(ENVIRONMENT == "development")
	{
		define("BASE_URL", "http://localhost/b7-classificados-em-mvc/");
		$config['dbname'] = 'b7_classificados'; //Nome do banco
		$config['host'] = 'localhost'; //host
		$config['dbuser'] = 'root'; //usuário
		$config['dbpass'] = ''; //senha
	}
	else
	{
		define("BASE_URL", "http://meusite.com.br");
		//Aqui eu posso mudar para os dados da hospedagem
		$config['dbname'] = 'b7_classificados';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	}	
	
	global $db;
	
	try
	{
		$db = NEW PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],
		$config['dbuser'], $config['dbpass']);
	}
	catch(PDOException $e)
	{
		echo "ERRO: ".$e->getMessage();
		exit();
	}