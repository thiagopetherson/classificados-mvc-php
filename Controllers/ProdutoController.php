<?php
	
	namespace Controllers;
	
	use \Core\Controller;
	use \Models\Anuncios;
	use \Models\Usuarios;
	
	class ProdutoController extends Controller {

		public function index()
		{
			
		}
		
		public function abrir($id)
		{
			$dados = array();
			
			$a = new Anuncios();
			$u = new Usuarios();

			if(empty($id)) {
				header("Location: ".BASE_URL);
				exit();
			} 

			$info = $a->getAnuncio($id);
			
			$dados['info'] = $info;
			
			$this->loadTemplate('produto',$dados);
			
		}
		
	}