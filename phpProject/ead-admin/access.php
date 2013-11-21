<?php 
	include '../functions/session_verification.php';
	include '../functions/insert.php';
	include '../includes/header.php'; 
?>
	<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
	</style>

	<?php 
		include '../includes/loginBar.php';
		$type_new_user = $_GET['id'];
		$_SESSION['type_new_user'] = $type_new_user;
	?>

	<div class="container">
		<!-- Form Access -->
		<div id="resposta"></div>
		<form class="form-signin" action="../server/register_new_user.php" method="POST" name="cadastro" id="cadastro">
			<fieldset>
				<legend style="padding:0 2px 0 0;">Cadastro de usuário</legend>
				<div>
					<label>Nome:</label>
					<input class="input-block-level" style="width:300px;" type="text" placeholder="Nome" id="nome" name="fist_name" required />

					<label>Sobrenome:</label>    
					<input class="input-block-level" style="width:300px;" type="text" placeholder="Sobrenome" id="sobrenome" name="last_name" required />
				</div>   
				<label>E-mail:</label>
				<input class="input-block-level" style="width:300px;" type="email" id="email" placeholder="example@example.com" name="email" required />

				<label>Confirmação de e-mail:</label>
				<input class="input-block-level" style="width:300px;" type="email" id="email_addr_repeat" name="email_addr_repeat" required />

				<label>Login:</label>
				<input class="input-block-level" style="width:300px;" type="text" placeholder="Login" name="username" id="usuario" required />
				
				<label>Informações:</label>
				<textarea rows="3" style="width: 288px;" placeholder="Informações" name="info" id="info"></textarea>

				<label>Senha:</label>
				<input class="input-block-level" style="width:300px;" type="password" placeholder="" id="senha" name="password" required />

				<label>Confirmação da senha:</label>
				<input class="input-block-level" style="width:300px;" type="password" id="password_confimation" name="password_repeat" required />
				
				<label class="input-block-level">Vincular a uma disciplina:</label>
				<label class="radio inline">
					<input type="radio" name="vinculateUser" value="1">
					Sim
				</label>
				<label class="radio inline">
					<input type="radio" name="vinculateUser" value="0" checked>
					Não
				</label>
				<br>
				<br>

				<div class="vinculateUsers">
					<form class="form-search">
						<input type="text" placeholder="nome da disciplina ou curso" class="input-large search-query">
						<button type="submit" class="btn">Pesquisar disciplina ou curso</button>
					</form>

					<table class="table table-hover">
						<caption>Disciplinas</caption>
						<thead>
							<tr>
								<th>Nome do curso</th>
								<th>Nome da disciplina</th>
								<th>Descrição da disciplina</th>
								<th>Tipo da disciplina</th>
								<th>Turma</th>
								<th>Vincular</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td>
									<label class="checkbox">
										<input type="checkbox" style="margin-left: 5px;">
									</label>
								</td>
							</tr>
							<tr class="info">
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td>
									<label class="checkbox">
										<input type="checkbox" style="margin-left: 5px;" checked="checked">
									</label>
								</td>
							</tr>
							<tr>
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td>
									<label class="checkbox">
										<input type="checkbox" style="margin-left: 5px;">
									</label>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<br>
				<button type="submit" id="send"class="btn">Enviar</button>
			</fieldset>
			<br>
			<a class="a-right" href="index.php"> &laquo;Voltar</a>
		</form>

		<hr>

		<footer>
			<p>&copy; Objeto de Aprendizagem de Projeto 2013</p>
		</footer>

	</div> <!-- /container -->

<?php include '../includes/footer.php'; ?>