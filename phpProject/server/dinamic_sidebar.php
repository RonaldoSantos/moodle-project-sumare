<div class="span3">
	<div class="well sidebar-nav sidebar-teacher">
		<ul class="nav nav-list">
			<li class="nav-header">Área do Aluno</li>
			<li class="active"><a href="index.php">Aluno</a></li>
			<?php 
				$id_user = $_SESSION['id'];
				$query = mysql_query(select("users_disciplines", "*", "id_user=$id_user", ""));

				while ($row = mysql_fetch_array($query)) {
					if ($row['id_discipline'] == 1) {
						echo "<li class=\"nav-header\">Disciplinas Online</li>";
						$query_disciplines = mysql_query(select("disciplines", "*", "id_type_disciplines=1", ""));
						while ($row = mysql_fetch_array($query_disciplines)) {
							$discipline_title = $row['discipline_title'];
							echo "<li><a href=\"#\">$discipline_title</a></li>";
						}
					}

					if ($row['id_discipline'] == 2) {
						echo "<li class=\"nav-header\">Disciplinas Presenciais</li>";
						$query_disciplines = mysql_query(select("disciplines", "*", "id_type_disciplines=2", ""));
						while ($row = mysql_fetch_array($query_disciplines)) {
							$discipline_title = $row['discipline_title'];
							echo "<li><a href=\"#\">$discipline_title</a></li>";
						}
					}
				}
			?>
		</ul>
	</div><!--/.well -->
</div><!--/span-->