<?php
	class Core
	{
		public function run()
		{
			$url = '/';
			if(isset($_GET['url'])){
				$url .= $_GET['url']; //Se tiver dados na URL, é retornado
			}				
			
			$params = array(); //Se no caso não tiver parâmetros, deixamos o Array vazio
			
			if(!empty($url) && $url != "/")
			{
				$url = explode('/', $url);
				array_shift($url); //O método array_shift() remove o primeiro registro do Array.
				
				$currentController = $url[0].'Controller'; //Pegando o Controller
				array_shift($url); //colocamos novamente para eliminar o primeiro, pois já usamos acima
				
				if(isset($url[0]) && !empty($url[0])){
					$currentAction = $url[0]; //Pegando o Action
					array_shift($url); //colocamos novamente para eliminar o primeiro, pois já usamos acima (então só sobrará os parâmetros)
				}
				else{
					$currentAction = "index"; //Se não tiver action, colocamos o action index
				}				
				
				if(count($url) > 0){ //Verificando se tem parâmetros na url
					$params = $url;
				}
			}
			else{
				$currentController = 'homeController';
				$currentAction = 'index';
			}	
			
			$c = new $currentController();	
			//O método nativo do PHP, call_user_func_array(), serve para quando queremos executar um método de uma classe, porém não sabemos o seu nome		
			call_user_func_array(array($c, $currentAction), $params);
		}		
	}
?>