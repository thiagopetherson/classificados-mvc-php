<?php
	
	namespace Controllers;	
	
	use \Core\Controller;
	use \Models\Usuarios;

	
	class CadastroController extends Controller 
	{

		public function index()
		{		

			$dados = array();
			
			
			//Chamando a view da página cadastro e passando valores
			$this->loadTemplate('cadastro', $dados);
			
		}


		public function cadastrar()
		{

			$usuarios = new Usuarios();


			if(isset($_POST['nome']) && !empty($_POST['nome'])) {

				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$senha = $_POST['senha'];
				$telefone = addslashes($_POST['telefone']);

				if($usuarios->registrar($nome,$email,$senha,$telefone))
				{
					header("Location: ".BASE_URL);
					exit();
				}
				else
				{
					header("Location: ".BASE_URL."cadastro");
					exit();					
				}

			}
		}
		
		

	}


		
	