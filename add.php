
<div class="row justify-content-center mt-5">
	<div class="col-5">
		<div class="card">
			<div class="card-header">
				<strong>CADASTRAR USUÁRIO</strong>
			</div><!--card-header-->
			<div class="card-body">
				<form class="form-login" method="POST">
		
					<div class="form-group">
						<labelb for="nome">Nome</label>
						<input id="nome" class="form-control" type="text" name="nome" placeholder="Seu nome">
					</div>

					<div class="form-group">
						<label for="email">E-mail</label>
						<input id="email" class="form-control" type="email" name="email" placeholder="Seu e-mail">
					</div>

					<div class="form-group">
						<label for="senha">Senha</label>
						<input id="senha" class="form-control" type="password" name="senha" placeholder="Sua senha">
					</div>

					<div class="form-group">
						<label for="fone">Telefone</label>
						<input id="fone" class="form-control" type="text" name="fone" placeholder="Seu telefone">
					</div>

					<input type="submit" class="btn btn-dark" value="Salvar" onclick="salvar()">
				</form>
			</div><!--card-body-->
		</div><!--card-->
	</div><!--col-->
</div><!--row-->