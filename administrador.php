<?php
session_start();
 ?>
<html lang="es">
  <head>
    <title>Boutique Allen:. Panel Administrador</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="img/allen.png"/>
    <link rel="stylesheet" href="css/admin.css" type="text/css"/>
    <link rel="stylesheet" href="css/fuentes.css" type="text/css"/>
    <link rel="stylesheet" href="css/icons.css" type="text/css"/>
    <link rel="stylesheet" href="css/Animate.css" type="text/css"/>
    <link rel="stylesheet" href="css/menu.css" type="text/css"/>
  </head>
  <body>
    <header>
      <?php
      include 'header.php';
      ?>
    </header>

    <aside id="panel">
      <ul>
        <li><a href="administrador.php" class="icon-home icono"> Home</a></li>
        <li><a href="#" class="icon-plus icono"> Agregar</a></li>
        <li><a href="#" class="icon-minus icono"> Eliminar</a></li>
        <li><a href="verificar.php?salir=0" class=" icon-exit icono"> Salir</a></li>
      </ul>
    </aside>

  </body>
</html>
