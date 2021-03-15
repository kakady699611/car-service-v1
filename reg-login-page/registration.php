<?php include '../navmenu.php'?>
	
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" href="../css/fonts.css">

	<form class="reg-form" action="../DataBase/register.php" method="POST">
		<div class="reg-form-header">
			Регистрация
		</div>
		<div class="reg-form-wrapper">
			<input id="email" class="reg-form-input" type="email" name="email" placeholder="sample@mail.com">
			<input id="pass" class="reg-form-input" type="password" name="pass" placeholder="******">
			<input class="reg-form-input" type="password" name="confirmPassword" placeholder="******">
			<button class="btn reg-form-button" type="submit">Зарегистрироваться</button>
		</div>
	</form>