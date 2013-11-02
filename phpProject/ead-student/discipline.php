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
						<li class="nav-header">Área do Aluno</li>
						<li><a href="index.php">Aluno</a></li>
						<li class="nav-header">Disciplinas Online</li>
						<li class="active"><a href="discipline.html#sistemas-operacionais">Sistemas Operacionais</a></li>
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

				<div class="accordion" id="accordion2">
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">Aula 1</a>
						</div>
						<div id="collapse1" class="accordion-body collapse in">
							<div class="accordion-inner">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, molestiae nobis iure excepturi veniam. Sapiente dolores deserunt sequi. Pariatur, voluptas debitis vero quo dolores provident ratione dicta animi quos perspiciatis!
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">Aula 2</a>
						</div>
						<div id="collapse2" class="accordion-body collapse">
							<div class="accordion-inner">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, molestiae nobis iure excepturi veniam. Sapiente dolores deserunt sequi. Pariatur, voluptas debitis vero quo dolores provident ratione dicta animi quos perspiciatis!
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">Aula 3</a>
						</div>
						<div id="collapse3" class="accordion-body collapse">
							<div class="accordion-inner">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, molestiae nobis iure excepturi veniam. Sapiente dolores deserunt sequi. Pariatur, voluptas debitis vero quo dolores provident ratione dicta animi quos perspiciatis!
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Aula 4</a>
						</div>
						<div id="collapseOne" class="accordion-body collapse">
							<div class="accordion-inner">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, molestiae nobis iure excepturi veniam. Sapiente dolores deserunt sequi. Pariatur, voluptas debitis vero quo dolores provident ratione dicta animi quos perspiciatis!
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