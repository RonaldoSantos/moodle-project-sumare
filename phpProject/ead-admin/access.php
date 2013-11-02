<?php include '../includes/header.php'; ?>
	<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
	</style>

	<?php include '../includes/loginBar.php'; ?>

	<div class="container">
		<!-- Form Access -->
		<div id="resposta"></div>
		<form class="form-signin" action="register.php" method="POST" name="cadastro" id="cadastro">
			<fieldset>
				<legend style="padding:0 2px 0 0;">Cadastro de usuário</legend>
				<div>
					<label>Nome:</label>
					<input class="input-block-level" style="width:300px;" type="text" placeholder="Nome" id="nome" name="nome" required />

					<label>Sobrenome:</label>    
					<input class="input-block-level" style="width:300px;" type="text" placeholder="Sobrenome" id="sobrenome" name="sobrenome" required />
				</div>   
				<label>E-mail:</label>
				<input class="input-block-level" style="width:300px;" type="email" id="email" placeholder="example@example.com" name="email" required />

				<label>Confirmação de e-mail:</label>
				<input class="input-block-level" style="width:300px;" type="email" id="email_addr_repeat" name="email_addr_repeat" required />

				<label>Login:</label>
				<input class="input-block-level" style="width:300px;" type="text" placeholder="Login" name="usuario" id="usuario" required />
				
				<label>Informações:</label>
				<textarea rows="3" style="width: 300px;" placeholder="Informações" name="info" id="info"></textarea>

				<input type="hidden" id="nivel" name="nivel" value="<?php echo $id = $_GET['id']; ?>"/>

				<label>Senha:</label>
				<input class="input-block-level" style="width:300px;" type="password" placeholder="" id="senha" name="senha" required />

				<label>Confirmação da senha:</label>
				<input class="input-block-level" style="width:300px;" type="password" id="password_confimation" name="password_confirmation" required />
				<br>
				<button type="submit" id="send"class="btn">Enviar</button>
			</fieldset>
			<br>
			<a class="a-right" href="restricted_area.html"> &laquo;Voltar</a>
		</form>

		<hr>

		<footer>
			<p>&copy; Objeto de Aprendizagem de Projeto 2013</p>
		</footer>

	</div> <!-- /container -->

<?php include '../includes/footer.php'; ?>