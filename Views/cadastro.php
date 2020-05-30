		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-lg-offset-2">	
					<h1>Cadastre-se</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">					
					<form method="POST" action="<?php echo BASE_URL; ?>cadastro/cadastrar/">
						<div class="form-group">
							<label for="nome">Nome:</label>
							<input type="text" id="nome" name="nome" class="form-control">								
						</div>

					
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" id="email" name="email" class="form-control">								
						</div>

				
						<div class="form-group">
							<label for="senha">Senha:</label>
							<input type="text" id="senha" name="senha" class="form-control">								
						</div>

						<div class="form-group">
							<label for="telefone">Telefone:</label>
							<input type="text" id="telefone" name="telefone" class="form-control">								
						</div>

						<div class="form-group">
							<input type="submit" class="btn btn-info" value="Buscar" />
						</div>
					</form>
				</div>				
			</div>
		</div>
