<?php
	
	namespace Controllers;
	
	use \Core\Controller;
	use \Models\Anuncios;
	use \Models\Categorias;
	
	class EditarAnuncioController extends Controller 
	{

		public function index($id)
		{		

			$dados = array();
			$a = new Anuncios();
			

			if(empty($_SESSION['cLogin'])) 
			{
				
				herder("Location: ".BASE_URL);
				exit;

			}
			
			$dados['id_anuncio'] = $id;

			//Chamando a view da página cadastro e passando valores
			$this->loadTemplate('editarAnuncio', $dados);
			
		}


		public function pegarAnuncio($id)
		{

			$a = new Anuncios();	

			if(isset($id) && !empty($id)) 
			{
				$info = $a->getAnuncio($id);
				return $info;
				
			} 
			else 
			{				
				
				header("Location: ".BASE_URL."meusAnuncios");
				exit;
			}

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



		public function editar($id)
		{

			$anuncios = new Anuncios();


			if(!empty($_POST['categoria']) OR !empty($_POST['titulo']) OR !empty($_POST['valor'])  OR !empty($_POST['descricao']) OR !empty($_POST['estado'])) {

				$categoria = addslashes($_POST['categoria']);
				$titulo = addslashes($_POST['titulo']);
				$valor = addslashes($_POST['valor']);
				$descricao = addslashes($_POST['descricao']);
				$estado = addslashes($_POST['estado']);

				if(isset($_FILES['fotos'])) 
				{
					$fotos = $_FILES['fotos'];
				} else {
					$fotos = array();
				}



				if($anuncios->editAnuncio($titulo,$categoria,$valor,$descricao,$estado,$fotos,$id))
				{
					header("Location: ".BASE_URL."meusAnuncios");
					exit();
				}
				else
				{
					header("Location: ".BASE_URL."editarAnuncio/index/".$id);
					exit();					
				}
			}
			else
			{
				header("Location: ".BASE_URL."addAnuncio");
				exit();
			}
		}
		

		public function apagarFoto($id_foto, $id_anuncio)
		{			
			$dados = array();			
			$a = new Anuncios();

			
			if($a->excluirFoto($id_foto)) 
			{				
				header("Location: ".BASE_URL."editarAnuncio/index/".$id_anuncio);	

			} 
			else 
			{
				header("Location: ".BASE_URL."editarAnuncio/index/".$id_anuncio);
					
			}		
		}

		

	}


		
	