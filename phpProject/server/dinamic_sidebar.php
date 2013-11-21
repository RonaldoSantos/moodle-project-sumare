<div class="span3">
	<div class="well sidebar-nav sidebar-teacher">
		<ul class="nav nav-list">
			<li class="nav-header">Área do Aluno</li>
			<?php 
				if ($_SESSION['id_discipline'] == NULL) {
					echo "<li class=\"active\"><a href=\"index.php\">Aluno</a></li>";
				} else {
					echo "<li><a href=\"index.php\">Aluno</a></li>";
				}
				$id_user = $_SESSION['id'];

				$query = mysql_query("select distinct 
										type_disciplines.id as 'id_type_disciplines'
										, type_disciplines.type_discipline_description
										from users 
											inner join users_disciplines
												on users.id = users_disciplines.id_user
											inner join disciplines
												on disciplines.id = users_disciplines.id_discipline
											inner join type_disciplines
												on type_disciplines.id = disciplines.id_type_disciplines
										where 
											users.id = $id_user
											and disciplines.discipline_status = 1
										order by
											type_disciplines.id");

				while ($row = mysql_fetch_array($query)) {
					$type_discipline_description = $row['type_discipline_description'];
					$id_type_discipline = $row['id_type_disciplines'];

					echo "<li class=\"nav-header\">Disciplinas $type_discipline_description</li>";

					$query_disciplines = mysql_query("select 
														users_disciplines.id_discipline
														, disciplines.discipline_title
														from users 
															inner join users_disciplines
																on users.id = users_disciplines.id_user
															inner join disciplines
																on disciplines.id = users_disciplines.id_discipline
															inner join type_disciplines
																on type_disciplines.id = disciplines.id_type_disciplines
														where 
															users.id = $id_user 
															and type_disciplines.id = $id_type_discipline
															and disciplines.discipline_status = 1
														order by 
															disciplines.discipline_title");

					while ($row = mysql_fetch_array($query_disciplines)) {
						$discipline_title = $row['discipline_title'];
						$id_discipline = $row['id_discipline'];

						if ($_SESSION['id_discipline'] == $id_discipline) {
							echo "<li class=\"active\"><a href=\"discipline.php?id=$id_discipline\">$discipline_title</a></li>";
						} else {
							echo "<li><a href=\"discipline.php?id=$id_discipline\">$discipline_title</a></li>";
						}
					}
				}
			?>
		</ul>
	</div><!--/.well -->
</div><!--/span-->