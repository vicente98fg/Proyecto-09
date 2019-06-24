<?php

require_once('./src/Juego.php');

$consulta = new Juego();
$consulta->conectar();
$resultado = $consulta->listarJuegos(); 
$consulta->juegoMicrorobots();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" media="screen" href="./css/proyecto9.css" />
</head>
<body>
  
<?php include "./assets/navSup.php"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<table>
  <tr>
    <td><b>ID Juego</b></td>
    <td><b>Nombre Juego</b></td>
  </tr>

  <?php
    foreach ($resultado as $usuarios) {
      echo "<tr>";
      echo "<td>".$usuarios['id']."</td>";
      echo "<td><a href='./index.php'>".$usuarios['nombre']."</a></td>";
      echo "</tr>";
    }

  ?>

</table>


</body>
</html>