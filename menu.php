
    <nav>
        <ul class="menu1">
          <li><a href="/">Inicio</a></li>
            <li><a href="/novedades.php">Novedades</a></li>
            <li><a href="categorias.php?tipo=men">Hombres</a></li>
            <li><a href="categorias.php?tipo=woman">Mujeres</a></li>
            <li><a href="categorias.php?tipo=children">Niños</a></li>
        </ul>
        <ul class="menu2">
        <?php
           if (isset($_SESSION['usuario'])){
             $usu=$_SESSION['usuario'];
        ?>
        <li><a href="#"><?php echo $usu[0]['nombre']; ?></a>
          <ul>
            <li><a href="verificar?salir=0">Salir</a></li>
          </ul>
        </li>
        <li><a href="historial.php">Compras</a></li>
        <li><a class="icon-cart" href="listacompras.php"></a></li>
        <?php
      }else{?>
        <li><a href="login.php">Ingresa</a></li>
        <li><a href="registro.php">Registrar</a></li>
        <li><a class="icon-cart" href="listacompras.php"></a></li>
      <?php
        }
      ?>
      </ul>
    </nav>
