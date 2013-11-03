<?php 
	include 'config.php';
	include 'select.php';

	session_start();

	$check_session = $_SESSION['username'];

	$query = mysql_query(select("users", "username", "username='".$check_session."'", ""));

	$row = mysql_fetch_array($query);


	$username = $row['username'];

	if (!isset($username)) {
		header('location:/index.php');
	}
?>