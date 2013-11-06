<?php 
	include '../functions/config.php';
	include '../functions/session_verification.php';
	include '../includes/header.php';
	
	$_SESSION['id_discipline'] = $_GET['id'];
?>
	<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
	</style>

	<?php include '../includes/loginBar.php'; ?>

	<div class="container">
		
		<div class="row-fluid">
			<?php include '../server/dinamic_sidebar.php'; ?>			
			<div class="span9">
				<div class="page-header">
					<h1>Sistemas Operacionais</h1>
				</div>

				<div class="input-append">
					<input class="span9" id="appendedInputButton" type="text" placeholder="Acrescentar Tópico">
					<button class="btn createTopic" type="button">Ok</button>
					<button class="btn" type="button">Histórico de Atividades</button>
					<button class="btn" type="button">Atividades em execulção</button>
				</div>

				<div class="accordion" id="accordion2">
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Aula 1</a>
						</div>
						<div id="collapseOne" class="accordion-body collapse in">
							<div class="accordion-inner">
								Anim pariatur cliche... <a href="#">
								<i class="icon-wrench"></i>Editar conteúdo</a>
								<a href="create_activit.php#sistemas-operacionais" class="btn btn-small" type="button">Criar atividade</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<footer>
			<p>&copy; Objeto de Aprendizagem de Projeto 2013</p>
		</footer>

	</div> <!-- /container -->

<?php include '../includes/footer.php'; ?>