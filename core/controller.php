<?php
	class controller
	{		
		//Método que carregará a view
		public function loadView($viewName, $viewData = array())
		{
			extract($viewData);
			require 'views/'.$viewName.'.php';
		}
		
		//Esse método carregará o template em comum que fica em todas as páginas
		public function loadTemplate($viewName, $viewData = array()) 
		{
			require 'views/template.php';
			
		}	
		
		//Método que carrega a viem dentro do template
		public function loadViewInTemplate($viewName, $viewData = array())
		{
			extract($viewData);
			require 'views/'.$viewName.'.php';			
		}
		
	}
?>