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
    <style>
      .main{
        width: 75%;
      }
    </style>
  </head>
  <body>
    <header>
      <?php
        include $_SERVER['DOCUMENT_ROOT'].'/vistas/header.php';
        include $_SERVER['DOCUMENT_ROOT'].'/vistas/menu.php';
      ?>
    </header>
    <div id="contenedor">
    <?php
      include $_SERVER['DOCUMENT_ROOT'].'/vistas/aside1.php';
     ?>
    <section class="main">
      <article class="container">
         <div class="slidesjs-wraper">
            <div class="slides">
                <img src="/img/Allen3.png" />
                <img src="/img/Allen4.jpg" />
                <img src="/img/Allen1.png" />
                <img src="/img/Allen2.png" />
            </div>
        </div>
        <script src="/js/jquery-1.9.1.min.js"></script>
        <script src="/js/jquery.slides.js"></script>
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
      <section class="dos">
        <article>
          <h2>Mision</h2>
          <p>Atender las necesidades de moda y del vestir de la sociedad, proporcionando a sus clientes productos de calidad, a sus accionistas una rentabilidad creciente y sostenible y a sus empleados la posibilidad de desarrollar sus competencias profesionales.</p>
        </article>
        <article>
          <h2>Visi&oacute;n</h2>
          <p>Ser una empresa de referencia, líder en distribución de moda, en continuo crecimiento, con presencia en el mercado, que se distinga por proporcionar una calidad de atención y servicio excelente a sus clientes.</p>
        </article>
      </section>

    </section>
   </div>
    <?php  include $_SERVER['DOCUMENT_ROOT'].'/vistas/pie.php'; ?>
  </body>
</html>
