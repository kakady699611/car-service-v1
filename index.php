<?php include 'navmenu.php'?>
    <div class="flex flex-wrap intro-background justify_center without-paddings">
      <h1 class="intro__text col-xs-8 col-sm-8 col-md-10">
        Atlant Service
      </h1>
      
      <div>
        <!-- Start Section -->
      <section id="service-block-main" class="section service-block__overlay">
      <!-- Container Starts -->
      <div class="justify_center">
               
          <h1 class="section-title color-1 justify_center uppercase pb-5">
           Почему вы должны выбрать нас?
          </h1>
          <h3 class="col-xs-8 col-sm-8 col-md-8 text-center color-1">
      Мы прилагаем все усилия за право оставаться лучшими в сфере оказания услуг по диагностике, техническому обслуживанию и ремонту автомобилей.
      </h3>
          <div class="flex pt-5 color-1">
            <div class="col-sm-6 col-md-3">
            <!-- Service-Block-1 Item Starts -->
            <div class="service-item">
              <div class="icon-wrapper">
                <span class="material-icons fs-80">
                  engineering
                </span>
              </div>
              <h2>
                Лучшие специалисты
              </h2>
              <p>
              Ремонт и техническое обслуживание автомобилей нужно доверять опытным специалистам.
              </p>
            </div>
            <!-- Service-Block-1 Item Ends -->
          </div>

          <div class="col-sm-6 col-md-3">
            <!-- Service-Block-1 Item Starts -->
            <div class="service-item">
              <div class="icon-wrapper">
                <span class="material-icons fs-80">
                  precision_manufacturing
                </span>
              </div>
              <h2>
                Качественное оборудование
              </h2>
              <p>
                У нас в распоряжении имеется только самое качественное оборудование.
              </p>
            </div>
            <!-- Service-Block-1 Item Ends -->
          </div>

          <div class="col-sm-6 col-md-3">
            <!-- Service-Block-1 Item Starts -->
            <div class="service-item">
              <div class="icon-wrapper">
              <span class="material-icons fs-80">
                speed
              </span>
              </div>
              <h2>
                Скорость работы
              </h2>
              <p>
                Мы выполним ремонт любой сложности в кратчайшие сроки.
              </p>
            </div>
            <!-- Service-Block-1 Item Ends -->
          </div>

          <div class="col-sm-6 col-md-3">
            <!-- Service-Block-1 Item Starts -->
            <div class="service-item">
              <div class="icon-wrapper">
                <span class="material-icons fs-80">
                  money_off
                </span>
              </div>
              <h2>
                Цена
              </h2>
              <p>
                Стоимость наших услуг приятно вас удивит.
              </p>
            </div>
          </div><!-- Service-Block-1 Item Ends -->
        </div>
      </div><!-- Container Ends -->
    </section><!-- Service Main Section Ends -->
    <div class="flex justify_center">
      <a class="floating-button" href="#popular">Перейти к каталогу услуг</a>
    </div>
      </div>
    </div>

    <!-- Популярное -->
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

            <button type="button" id="<?php echo $popular["id"] ?>" class="btn btn-lg btn-block btn-outline-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $popular["service_name"] ?>">Оставить заявку</button>
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
              <button type="button" id="<?php echo $service["id"] ?>" class="btn btn-lg btn-block btn-outline-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $service["service_name"] ?>">Оставить заявку</button>
                 
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>



<?php include 'modal/modal.php' ?>
<script src="modal/modal.js"></script>

<?php include 'footer.php' ?>