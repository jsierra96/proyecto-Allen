
    <nav>
        <ul class="menu1">
          <li><a href="/">Inicio</a></li>
            <li><a href="/vistas/novedades.php">Novedades</a></li>
            <li><a href="/vistas/categorias.php?tipo=men">Hombres</a></li>
            <li><a href="/vistas/categorias.php?tipo=woman">Mujeres</a></li>
            <li><a href="/vistas/categorias.php?tipo=children">Niños</a></li>
        </ul>
        <ul class="menu2">
        <?php
           if (isset($_SESSION['usuario'])){
             $usu=$_SESSION['usuario'];
        ?>
        <li><a href="#"><?php echo $usu[0]['nombre']; ?></a>
          <ul>
            <li><a href="/controlador/verificar?salir=0">Salir</a></li>
          </ul>
        </li>
        <li><a href="/vistas/historial.php">Compras</a></li>
        <li><a class="icon-cart" href="/vistas/listacompras.php"></a></li>
        <?php
      }else{?>
        <li><a href="/vistas/login.php">Ingresa</a></li>
        <li><a href="/vistas/registro.php">Registrar</a></li>
        <li><a class="icon-cart" href="/vistas/listacompras.php"></a></li>
      <?php
        }
      ?>
      </ul>
    </nav>
