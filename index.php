<?php
session_start();
 ?>
<html lang="es">
  <head>
    <title>Boutique Allen:. Inicio</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="img/allen.png"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <link rel="stylesheet" href="css/fuentes.css" type="text/css"/>
    <link rel="stylesheet" href="css/icons.css" type="text/css"/>
    <link rel="stylesheet" href="css/Animate.css" type="text/css"/>
    <link rel="stylesheet" href="css/menu.css" type="text/css"/>
    <link rel="stylesheet" href="css/slide.css">
  </head>
  <body>
    <header>
      <?php
        include 'header.php';
        include 'menu.php';
      ?>
    </header>
    <section class="main">
      <article class="container">
         <div class="slidesjs-wraper">
            <div class="slides">
                <img src="https://www.hublot.com/images/ImagesBoutiques/cannes_1.jpg" />
                <img src="http://www.boutiquenadine.com/wp-content/uploads/2017/09/boutique-nadine-viadebenci-04.jpg" />
                <img src="http://www.spelldesigns.com/wp-content/uploads/BoutiqueParty-0450.jpg" />
                <img src="http://www.travelingchicboutique.com/wp-content/uploads/2016/10/Traveling-Chic-Boutique-Trunk-Show-2.jpg" />
            </div>
        </div>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jquery.slides.js"></script>
        <script>
           $(function() {
           $(".slides").slidesjs({
             play: {
             active: true,
             auto: true,
             interval: 4000,
             swap: true
                       }
                  });
              });
        </script>
      </article>
    </section>

    <?php  include 'pie.php'; ?>
  </body>
</html>
