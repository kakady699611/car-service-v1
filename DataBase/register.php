<?php
	
	$login = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
	$confirmPass = filter_var(trim($_POST['confirmPassword']), FILTER_SANITIZE_STRING);

	if(mb_strlen($login) < 5 || mb_strlen($login) > 40){
		echo ("Недопустимая длина логина");
		exit();
	} else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 40){
		echo ("Недопустимая длина пароля");
		exit();
	} else if ($pass != $confirmPass) {
		echo ("Пароли не совпадают");
		exit();
	}

	$hashpass = md5($pass."kakady");

	$db = new mysqli('car-service', 'root', 'root', 'car-service');
	$db->query("INSERT INTO `users` (`email`, `password`) 
	VALUES('$login', '$hashpass')");
	
	$db->close();

	header('Location: /reg-login-page/login.php');
	exit();
?>