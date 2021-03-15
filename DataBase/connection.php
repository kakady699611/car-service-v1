<?php
$host = 'localhost'; // адрес сервера
$database = 'car-service'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'root'; // пароль

$db = new PDO("mysql:host=$host; dbname=$database", $user, $password);

function get_all_services(){
  global $db;
  $services = $db->query("SELECT * FROM services");
  return $services;
}

function get_all_popular(){
  global $db;
  // $popular = $db->query("SELECT * FROM popular");
  $popular = $db->query("SELECT * FROM services LIMIT 3;");
  return $popular;
}

function get_all_photos(){
  global $db;
  $photos = $db->query("SELECT * FROM gallery");
  return $photos;
}

?>
