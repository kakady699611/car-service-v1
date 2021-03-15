<?php include 'navmenu.php'?>
<!-- Подключение CSS файла -->
<link rel="stylesheet" href="modal/modal.css">

<!-- Подключения JavaScript файла -->
<script src="modal/modal.js"></script>

    <div class="flex asd without-paddings xs-12">      
      <div class="intro-text-container col-xs-6 col-md-6">
        <p class="intro__text">
        Ремонт и техническое обслуживание автомобилей нужно доверять опытным специалистам, в распоряжении которых есть необходимые технические средства для реализации поставленных задач. Отличный автосервис может похвастаться наличием профессионалов в штате.
        </p>
        <a class="floating-button" href="#popular">Перейти к каталогу услуг</a>
      </div>
      <div class="col-xs-6 col-md-6">
        <img class="intro" src="img/background-2.png" alt="">
      </div>
    </div>
    <div id="popular" class="popular__container pt-5">
      <h2 class="pb-3">Популярное: </h2>
      <div class="card-deck mb-3 text-center">

      <?php
        include 'DataBase/connection.php';
        $populars = get_all_popular();
        foreach ($populars as $i => $popular): ?>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?php echo $popular["service_name"]; ?></h4>
          </div>
          <div class="card-body">

            <div class="card-image">
              <img src="
                <?php if($popular["service_image"] != '') {
                  echo($popular["service_image"]);
                } else {
                  echo('img/1.jpg');
                } ?>"
              >  
            </div>

            <h1 class="card-title pricing-card-title"><?php echo $popular["price"]; ?><small class="text-muted"> руб.</small></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li><?php echo $popular["description"]; ?></li>
            </ul>

            <button type="button" id="<?php echo $popular["id"] ?>" class="btn btn-lg btn-block btn-outline-primary">Оставить заявку</button>
          </div>
        </div>

      <?php endforeach ?>

      </div>
    </div>

    <div class="services__container pt-1">
      <h2 class="pb-3 pl-3">Каталог услуг: </h2>
      <div class="card-deck mb-3 text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php
          $services = get_all_services();
          foreach ($services as $i => $service): ?>
          <div class="card mb-4 shadow-sm col-xs-4">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal"><?php echo $service["service_name"]; ?></h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title"><?php echo $service["price"]; ?><small class="text-muted"> руб.</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li><?php echo $service["description"]; ?></li>
              </ul>
              <div class="onbottom">
                  <button type="button" id="service_<?php echo $service["id"] ?>"  class="btn btn-lg btn-block btn-outline-primary">Оставить заявку</button>
                 
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>




<?php include 'footer.php' ?>