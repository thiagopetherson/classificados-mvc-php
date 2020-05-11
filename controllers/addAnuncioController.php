<?php

	class addAnuncioController extends controller 
	{

		public function index()
		{		

			$dados = array();
			
			
			//Chamando a view da página cadastro e passando valores
			$this->loadTemplate('addAnuncio', $dados);
			
		}


		public function pegarLista()
		{

			$categorias = new Categorias();

			$c = $categorias->getLista();

			if($c) 
			{				
				return $c;
				exit();			
			} 
			else 
			{
				header("Location: ".BASE_URL."meusAnuncios");
				exit();
				
			}	

		}
		



		public function cadastrar()
		{

			$anuncios = new Anuncios();


			if(!empty($_POST['categoria']) OR !empty($_POST['titulo']) OR !empty($_POST['valor'])  OR !empty($_POST['descricao']) OR !empty($_POST['estado'])) {

				$categoria = addslashes($_POST['categoria']);
				$titulo = addslashes($_POST['titulo']);
				$valor = addslashes($_POST['valor']);
				$descricao = addslashes($_POST['descricao']);
				$estado = addslashes($_POST['estado']);

				if($anuncios->addAnuncio($titulo,$categoria,$valor,$descricao,$estado))
				{
					header("Location: ".BASE_URL."meusAnuncios");
					exit();
				}
				else
				{
					header("Location: ".BASE_URL."addAnuncio");
					exit();					
				}
			}
			else
			{
				header("Location: ".BASE_URL."addAnuncio");
				exit();
			}
		}
		
		

	}


		
	