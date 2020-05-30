<div class="container">
	<h1>Meus Anúncios</h1>

	<a href="<?php echo BASE_URL; ?>addAnuncio" class="btn btn-default">Adicionar Anúncio</a>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Foto</th>
				<th>Titulo</th>
				<th>Valor</th>
				<th>Ações</th>
			</tr>
		</thead>
		<?php
	
		$anuncios = $this->pegarMeusAnuncios();

		if($anuncios <> false)
		{		
		foreach($anuncios as $anuncio)
		{
		?>
		<tr>
			<td>
				<?php if(!empty($anuncio['url'])): ?>
				<img src="assets/images/anuncios/<?php echo $anuncio['url']; ?>" height="50" border="0" />
				<?php else: ?>
				<img src="assets/images/default.jpg" height="50" border="0" />
				<?php endif; ?>
			</td>
			<td><?php echo $anuncio['titulo']; ?></td>
			<td>R$ <?php echo number_format($anuncio['valor'], 2); ?></td>
			<td>
				<a href="<?php echo BASE_URL; ?>editarAnuncio/index/<?php echo $anuncio['id']; ?>" class="btn btn-default">Editar</a>
				<a href="<?php echo BASE_URL; ?>meusAnuncios/excluir/<?php echo $anuncio['id']; ?>" class="btn btn-danger">Excluir</a>
			</td>
		</tr>
		<?php 
		}
		}
		?>
	</table>
</div>