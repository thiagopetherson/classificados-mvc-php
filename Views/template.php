<html>
	<head>
		<title>Classificados</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
		
	</head>

	<?php
		if(isset($_SESSION["cNome"]) AND !empty($_SESSION["cNome"])){	
			// SAUDAÇÕES.			
			date_default_timezone_set('America/Sao_Paulo');
			$hora = date("H");

			if($hora > 06 AND $hora < 12){
				$mensagem_boasvindas = "Bom dia, " . $_SESSION["cNome"] . " !";
			}
			else if($hora >= 12 AND $hora < 18){
				$mensagem_boasvindas = "Boa tarde, " . $_SESSION["cNome"] . " !";
			}
			else{
				$mensagem_boasvindas = "Boa noite, " . $_SESSION["cNome"] . " !";
			}			
		}
	?>


	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="<?php echo BASE_URL; ?>" class="navbar-brand">Classificados</a>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
						<li><a href="<?php echo BASE_URL; ?>meusAnuncios">Meus Anúncios</a></li>
						<li><a href="<?php echo BASE_URL; ?>login/sair/">Sair</a></li>
					<?php else: ?>
						<li><a href="<?php echo BASE_URL; ?>cadastro">Cadastre-se</a></li>
						<li><a href="<?php echo BASE_URL; ?>login">Login</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</nav>

		<?php if(isset($mensagem_boasvindas) && !empty($mensagem_boasvindas)): ?>
		<div class="container-fluid">
			<div class="text-right">				
					<h4 style="margin-top:0; margin-bottom:2px"><?php echo $mensagem_boasvindas; ?></h4>			
			</div>
		</div>
		<?php endif; ?>

				
		<?php $this->loadViewInTemplate($viewName, $viewData) ?>
		
		
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>	
</html>