<?php
	
	$login = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	$hashpass = md5($pass."kakady");

	$db = new mysqli('car-service', 'root', 'root', 'car-service');
	$result = $db->query("SELECT * FROM `users` WHERE `email` = '$login' AND `password` = '$hashpass'");

	$user = $result->fetch_assoc();
	if(count($user) == 0) {
		echo "Неверный логин или пароль!";
		exit();
	}
	
	$db->close();

	setcookie('user', $user['email'], time() + 3600, "/");

	

	header('Location: /');

	exit();
?>