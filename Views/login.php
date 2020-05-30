<div class="container">
	
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<h1>Login</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">	
			<form method="POST" action="<?php echo BASE_URL; ?>login/logar/">
				<div class="form-group">
					<label for="email">E-mail:</label>
					<input type="email" name="email" id="email" class="form-control" />
				</div>
				<div class="form-group">
					<label for="senha">Senha:</label>
					<input type="password" name="senha" id="senha" class="form-control" />
				</div>
				<input type="submit" value="Fazer Login" class="btn btn-default" />
			</form>
		</div>
	</div>

</div>
