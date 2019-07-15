<?php require 'pages/header.php'; ?>

	<div id="conteudo" class="container mt-5">
		<input class="btn btn-dark" type="submit" value="Adicionar" onclick="cadastrar()">
		<table class="table mt-3">
			<tr>
				<th>ID</th>
				<th>NOME</th>
				<th>EMAIL</th>
				<th>TELEFONE</th>
				<th>AÇÃO</th>
			</tr>
			<?php foreach ($u->getAll() as $dado): ?>
			<tr>
				<td><?php echo $dado['id']; ?></td>
				<td><?php echo $dado['nome']; ?></td>
				<td><?php echo $dado['email']; ?></td>
				<td><?php echo $dado['fone']; ?></td>
				<td>
					<a href="javascritp:" onclick = "editar(<?php echo $dado['id']; ?>)"><i class="fas fa-edit"></i></a>
					<a href="javascritp:" onclick = "excluir(<?php echo $dado['id']; ?>)" onload="true"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>

<?php require 'pages/footer.php'; ?>