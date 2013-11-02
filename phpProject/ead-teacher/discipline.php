<?php include '../includes/header.php'; ?>
	<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
	</style>

	<?php include '../includes/loginBar.php'; ?>

	<div class="container">
		
		<div class="row-fluid">
			<div class="span3">
				<div class="well sidebar-nav sidebar-teacher">
					<ul class="nav nav-list">
						<li class="nav-header">Área do Professor</li>
						<li><a href="index.php">Professor</a></li>
						<li class="nav-header">Disciplinas Online</li>
						<li class="active"><a href="discipline.php#sistemas-operacionais">Sistemas Operacionais</a></li>
						<li><a href="#">História</a></li>
						<li><a href="#">Algoritmos</a></li>
						<li><a href="#">Java</a></li>
						<li class="nav-header">Disciplinas Presenciais</li>
						<li><a href="#">Banco de Dados</a></li>
						<li><a href="#">Compiladores</a></li>
						<li><a href="#">Redes de Computadores</a></li>
						<li><a href="#">GTI - Gestão de Tecnologia da Informação</a></li>
						<li class="nav-header">Sidebar</li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			
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