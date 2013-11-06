<?php 
	include '../functions/config.php';
	include '../functions/session_verification.php';
	include '../includes/header.php';


	$id = $_GET['id'];
	$_SESSION['id_discipline'] = $id;
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
					<?php 
						$query_disciplines = mysql_query(select("disciplines", "*", "id=$id", ""));
						$row_disciplines = mysql_fetch_array($query_disciplines);
						$disciplines_title = $row_disciplines['discipline_title'];
						echo "<h1>$disciplines_title</h1>";
					?>
				</div>

				<div class="accordion" id="accordion2">
					<?php 
						$query_topics = mysql_query("select * from topics where id_discipline=$id");
						$row_topics = mysql_fetch_array($query_topics);
						if ($row_topics == NULL) {
							echo "A Najara diz que não tem topicos na disciplina";
							exit();
						};

						do {
							$id_topic = $row_topics['id'];
							$topic_title = $row_topics['topic_title'];
							$topic_description = $row_topics['topic_description'];

							echo "<div class=\"accordion-group\">
									<div class=\"accordion-heading\">
										<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse$id_topic\">$topic_title</a>
									</div>
									<div id=\"collapse$id_topic\" class=\"accordion-body collapse\">
										<div class=\"accordion-inner\">
											$topic_description
										</div>
									</div>
								</div>";
						} while ($row_topics = mysql_fetch_array($query_topics));
					?>
				</div>
			</div>
		</div>

		<hr>

		<footer>
			<p>&copy; Objeto de Aprendizagem de Projeto 2013</p>
		</footer>

	</div> <!-- /container -->

<?php include '../includes/footer.php'; ?>