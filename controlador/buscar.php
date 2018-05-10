<?php
  session_start();
  include '../modelo/ObtProducto.php';
  $ObtPro=new ObtProductos();
  $ObtPro->ObtenerTodos();
  $palabra=$_POST['clave'];
  $pa=explode(" ",$palabra);
  $num=count($pa);
  $productos=$_SESSION['producto'];

  for ($i=0; $i < $num; $i++) {
    $aux[]=null;
    $n=0;
    for ($j=0; $j < count($productos); $j++) {
      if($pa[$i]=="dama" && $productos[$j]['sexo']=="Mujer"){
        //echo $productos[$j]['id']."<br>";
        $aux[$n]=$productos[$j]['id'];
        $n++;
      }
    }
    echo $aux[0]."<br>";
    //$productos=$aux;
  }

  for ($i=0; $i < count($productos); $i++) {
    echo "Producto: ".$productos[$i]['producto']." Sexo: ".$productos[$i]['sexo']." Tipo: ".$productos[$i]['tipo']."<br>";
  }
  //echo "EL arreglo tiene una longitud de ".$num;
?>
