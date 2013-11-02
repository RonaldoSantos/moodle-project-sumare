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
						<li class="active"><a href="discipline.html">Sistemas Operacionais</a></li>
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
				<form action="sample_posteddata.php" method="post">
					<p>
						<textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="10"></textarea>
					</p>
				</form>
			</div>
		</div>

		<hr>

		<footer>
			<p>&copy; Objeto de Aprendizagem de Projeto 2013</p>
		</footer>

	</div> <!-- /container -->

<?php include '../includes/footer.php'; ?>