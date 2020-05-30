<?php
	
	namespace Controllers;
	
	use \Core\Controller;
	use \Models\Anuncios;

	
	class MeusAnunciosController extends Controller
	{		
				
		public function index()
		{			
			$dados = array();			
		
			if(empty($_SESSION['cLogin'])) 
			{
				header("Location: ".BASE_URL);
				exit();

			}			
			//Chamando a view da página view e passando valores
			$this->loadTemplate('meusAnuncios', $dados);				
		}


		public function pegarMeusAnuncios()
		{			
			$dados = array();			
			$a = new Anuncios();

			$anunc = $a->getMeusAnuncios();

			if($anunc) 
			{				
				return $anunc;
				exit();			
			} 
			else 
			{
				return false;
				exit();
				
			}	
		
		}


		public function adicionarAnuncio($titulo, $categoria, $valor, $descricao, $estado)
		{			
			$dados = array();			
			$a = new Anuncios();

			
			if($a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado)) 
			{				
				header("Location: ".BASE_URL."meusAnuncios");		
			} 
			else 
			{
				header("Location: ".BASE_URL);
				exit();				
			}		
		}


		public function excluir($id)
		{			
			$dados = array();			
			$a = new Anuncios();

			
			if($a->excluirAnuncio($id)) 
			{				
				header("Location: ".BASE_URL."meusAnuncios");		
			} 
			else 
			{
				header("Location: ".BASE_URL);
				exit();				
			}		
		}
			
	}