<?php 
	include '../functions/config.php';
	include '../functions/insert.php';

	session_start();

	$type_user = trim($_POST['type_user']);
	$first_name = trim($_POST['fist_name']);
	$first_name = trim($_POST['fist_name']);
	$last_name = trim($_POST['last_name']);
	$email = trim($_POST['email']);
	$username = trim($_POST['username']);
	$password = md5(trim($_POST['password']));
	
	echo $type_user.'<br />';
	echo $first_name.'<br />';
	echo $last_name.'<br />';
	echo $email.'<br />';
	echo $username.'<br />';
	echo $password.'<br />';

	$query = mysql_query(insert("users", "username, password, first_name, last_name, email, date_register, status, type_users, image_user_path", "'$username', '$password', '$first_name', '$last_name', '$email', now(), 1, $type_user, '/users/id/images/img_teste.png'"));

	if ($query == 1) {
		header('location:../pagina/#success');
	} else {
		header('location:../pagina/#error');
	}
?>