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
			<?php 
				include '../server/dinamic_sidebar.php';
			?>
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