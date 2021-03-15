<?php
	
	$service_name = filter_var(trim($_POST['service_name']), FILTER_SANITIZE_STRING);
	$contacts = filter_var(trim($_POST['contacts']), FILTER_SANITIZE_STRING);
	$comment = filter_var(trim($_POST['comment']), FILTER_SANITIZE_STRING);

	$db = new mysqli('car-service', 'root', 'root', 'car-service');
	$db->query("INSERT INTO `applications` (`service_name`, `contacts`, `comment`) 
	VALUES('$service_name', '$contacts', '$comment')");
	
	$db->close();

    header('Location: /#popular');

	exit();
?>