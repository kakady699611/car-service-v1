<?php include '../navmenu.php' ?>
	
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" href="../css/fonts.css">

	<form class="reg-form" action="../DataBase/login.php" method="POST">
		<div class="reg-form-header">
			Авторизация
		</div>
		<div class="reg-form-wrapper">
			<input id="email" class="reg-form-input" type="email" name="email" placeholder="sample@mail.com">
			<input id="pass" class="reg-form-input" type="password" name="pass" placeholder="******">
			<button class="btn btn-r reg-form-button" type="submit">Войти</button>
		</div>
		<p class="reg-form-subtitle"><a href="registration.php">Зарегистрироваться?</a></p>
	</form>