<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include 'links.php' ?>
    <title>Автосервис</title>
  </head>
  <body>
<nav class="margin-0">
  <div class="d-flex flex-column flex-md-row align-items-center px-md-4 bg-dark shadow-sm p-4 justify_between">
    
    <a class="text_link" href="/">
      <h5 class="my-0 mr-md-auto text-white font-weight-normal logo__font"> 
        Atlant Service
      </h5>
    </a>

    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-white" href="/">Каталог работ</a>
      <a class="p-2 text-white" href="/gallery/gallery.php">Галерея</a>
      <a class="p-2 text-white" href="/contacts/contacts.php">Контакты</a>

      <?php
      
        if($_COOKIE['user'] == ''):

      ?>

        <a class="btn btn-outline-warning" href="/reg-login-page/login.php">Войти</a>

      <?php else: ?>

        <a class="btn btn-outline-warning" href="DataBase/exit.php">Выйти</a>

      <?php endif; ?>
    </nav>
    
  </div>
</nav>
