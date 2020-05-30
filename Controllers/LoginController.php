<?php
	
	namespace Controllers;
	
	use \Core\Controller;	
	use \Models\Usuarios;

	
	class LoginController extends Controller 
	{

		public function index()
		{		

			$dados = array();
			
			
			//Chamando a view da página cadastro e passando valores
			$this->loadTemplate('login', $dados);
			
		}


		public function logar()
		{

			$usuarios = new Usuarios();

			if(isset($_POST['email']) && !empty($_POST['email'])) 
			{
				$email = addslashes($_POST['email']);
				$senha = $_POST['senha'];

				if($usuarios->login($email, $senha)) 
				{				
					header("Location: ".BASE_URL);
					exit();
					
				} 
				else 
				{
					header("Location: ".BASE_URL."login");
					exit();
					
				}
			}
		}

		public function sair()
		{
			$usuarios = new Usuarios();

			if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) 
			{
			
				if($usuarios->deslogin()) 
				{				
					header("Location: ".BASE_URL."login");
					exit();					
				} 
				else 
				{	
					header("Location: ".BASE_URL);
					exit();					
				}
			}
		}




	}


		
	