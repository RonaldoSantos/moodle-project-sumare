<?php

	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'moodle_project');
	 
	$conn = mysql_connect('localhost', DB_USER, DB_PASS);
	mysql_select_db(DB_NAME) or die('Não foi possível conectar ao banco!');
	mysql_query("SET NAMES 'utf8'", $conn);

?>