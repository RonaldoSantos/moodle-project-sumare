<?php
	include 'config.php';
	include 'select.php';
	include 'insert.php';
	include 'update.php';

	session_start();

	$username  = trim($_POST['username']);
	$password  = md5(trim($_POST['password']));

	if (!$username || !$password) {
		header('location:../404.html');
	} else {
		validate_DB_User($username, $password);
	}

	function validate_DB_User ($username, $password) {

		$query = mysql_query(select("users", "*", "username='{$username}' AND password='{$password}'", ""));

	 	$num = mysql_num_rows($query);

	 	if ($num > 0) {
	 		while ($row = mysql_fetch_array($query)) {

				if ($row['status'] == 1) {

					register_session($username);

					log_datetime_user($row['id'], $username);
					switch ($row['type_users']) {
						case 1:
							header('location:../ead-admin?id='.$row['id']);
						break;
						case 2:
							header('location:../ead-admin?id='.$row['id']);
						break;
						case 3:
							header('location:../ead-teacher?id='.$row['id']);
						break;
						case 4:
							header('location:../ead-student?id='.$row['id']);
						break;
						
						default:
							header('location:../ead-student/');
						break;
					}

				} else {
					header('location:../#error_status_inativo');
				}
	 		}
	 	} else {
	 		header('location:../#error_table_empty');
	 	}
	}

	function register_session ($username) {
		$_SESSION['username'] = $username;
	}

	function log_datetime_user ($id, $username) {
		mysql_query(update("users", "date_register=now()", "id=$id"));
		mysql_query(insert("log_users", "id_user, log_username", "$id, '$username'"));
	}
?>