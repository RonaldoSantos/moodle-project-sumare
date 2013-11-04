<?php 
	include '../functions/session_verification.php';
	include '../functions/insert.php';

	$type_user = $_SESSION['type_users'];
	$first_name = trim($_POST['fist_name']);
	$first_name = trim($_POST['fist_name']);
	$last_name = trim($_POST['last_name']);
	$email = trim($_POST['email']);
	$username = trim($_POST['username']);
	$password = md5(trim($_POST['password']));

	$query = mysql_query(insert("users", "username, password, first_name, last_name, email, date_register, status, type_users, image_user_path", "'$username', '$password', '$first_name', '$last_name', '$email', now(), 1, $type_user, '/users/id/images/img_teste.png'"));

	if ($query == 1) {
		header('location:../ead-admin/access.php#success_register');
	} else {
		header('location:../ead-admin/access.php#error_register');
	}
?>