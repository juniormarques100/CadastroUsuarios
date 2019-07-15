<?php require 'pages/header.php'; ?>

<?php

if(!empty($_GET['u'])) {
	$id = $_GET['u'];

	$info = $u->getInfo($id);

	if(empty($info['email'])) {
		header("Location: ./");
		exit;
	}

} else {
	header("Location: ./");
	exit;
}

?>

		<div class="row justify-content-center">
			<div class="col-5">
				<div class="card">
					<div class="card-header">
						<strong>EDITAR USUÁRIO</strong>
					</div><!--card-header-->
					<div class="card-body">
						<form class="form-login" method="POST" action="edit_submit.php">

							<input type="hidden" name="id" value="<?php echo $info['id']; ?>">
				
							<div class="form-group">
								<label for="nome">Nome</label>
								<input id="nome" class="form-control" type="text" name="nome" placeholder="Seu nome" value="<?php echo $info['nome']; ?>">
							</div>

							<div class="form-group">
								<label for="email">E-mail</label>
								<input id="email" class="form-control" type="email" name="email" placeholder="Seu e-mail" value="<?php echo $info['email']; ?>">
							</div>

							<div class="form-group">
								<label for="senha">Senha</label>
								<input id="senha" class="form-control" type="password" name="senha" placeholder="Sua senha" value="<?php echo $info['senha']; ?>">
							</div>

							<div class="form-group">
								<label for="fone">Telefone</label>
								<input id="fone" class="form-control" type="text" name="fone" placeholder="Seu telefone" value="<?php echo $info['fone']; ?>">
							</div>

							<input type="submit" class="btn btn-primary" value="Salvar">
							<a href="./" class="btn btn-dark"><i class="fas fa-undo-alt"></i> Voltar</a>
						</form>
					</div><!--card-body-->
				</div><!--card-->
			</div><!--col-->
		</div><!--row-->