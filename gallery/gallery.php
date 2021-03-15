<?php include '../navmenu.php' ?>

<link rel="stylesheet" href="gallery.css">
<meta name="viewport" content="wdith=device-width">

        <div class="gallery__wrapper">
            <?php
                include '../DataBase/connection.php';
                $photos = get_all_photos();
                foreach ($photos as $i => $photo): ?>
                <div class="gallery__image-block">
                    <img class="gallery__image" src="../<? echo($photo["image_link"]) ?>" alt="<? echo($photo["alt"]) ?>">
                </div>
            <?php endforeach; ?> 
        </div>          

<?php include '../footer.php' ?>