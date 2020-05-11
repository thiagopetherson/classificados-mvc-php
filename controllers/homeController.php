<?php
	
	class homeController extends controller
	{		
		
		//Esses parâmetros são para paginação e os outros 3 são para o caso de o filtro de busca ter valores
		public function index($param_get = "", $filtros_cat_get = "",  $filtros_pre_get = "",  $filtros_est_get = "")
		{			
			$dados = array();
						
			$a = new Anuncios();
			$u = new Usuarios();
			$c = new Categorias();

			if($filtros_cat_get == "sem-categoria"){
				$filtros_cat_get = "";
			}

			if($filtros_pre_get == "sem-preco"){
				$filtros_pre_get = "";
			}

			if($filtros_est_get == "sem-estado"){
				$filtros_est_get = "";
			}


			/*
			$filtros = array(
				'categoria' => '',
				'preco' => '',
				'estado' => ''
			);
			*/

			if(isset($_POST['buscar'])) {
				$filtros['categoria'] = addslashes($_POST['categoria']);
				$filtros['preco']  = addslashes($_POST['preco']);
				$filtros['estado']  = addslashes($_POST['estado']);
			}
			else
			{
				$filtros = array(
				'categoria' => $filtros_cat_get,
				'preco' => $filtros_pre_get,
				'estado' => $filtros_est_get
				);				
			}
			
			$total_anuncios = $a->getTotalAnuncios($filtros);
			$total_usuarios = $u->getTotalUsuarios();

			$p = 1;

			if(isset($param_get) && !empty($param_get)) {
				$p = addslashes($param_get);
			}

			$por_pagina = 2;
			$total_paginas = ceil($total_anuncios / $por_pagina);
			
			//print_r($filtros);
			//die();

			$anuncios = $a->getUltimosAnuncios($p, $por_pagina, $filtros);
			$categorias = $c->getLista();
			
			$dados['total_anuncios'] = $total_anuncios;
			$dados['total_usuarios'] = $total_usuarios;
			$dados['categorias'] = $categorias;
			$dados['filtros'] = $filtros;
			$dados['anuncios'] = $anuncios;
			$dados['total_paginas'] = $total_paginas;
			$dados['p'] = $p;
			
			
			//Chamando a view da página view e passando valores
			$this->loadTemplate('home', $dados);			
			
		}	
		
	}