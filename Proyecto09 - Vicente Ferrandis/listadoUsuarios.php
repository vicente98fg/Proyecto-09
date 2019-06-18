<?php

require_once('./src/Usuario.php');

$consulta = new Usuario();
$consulta->conectar();  
$resultado = $consulta->listarUsuarios();  

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" media="screen" href="./css/proyecto8.css" />
</head>
<body>
  
<?php include "./assets/navSup.php"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<table>
  <tr>
    <td><b>ID</b></td>
    <td><b>Nombre</b></td>
    <td><b>Apellidos</b></td>
    <td><b>Edad</b></td>
    <td><b>Curso</b></td>
  </tr>

  <?php
    foreach ($resultado as $usuarios) {
      echo "<tr>";
      echo "<td>".$usuarios['id']."</td>";
      echo "<td>".$usuarios['nombre']."</td>";
      echo "<td>".$usuarios['apellidos']."</td>";
      echo "<td>".$usuarios['edad']."</td>";
      echo "<td>".$usuarios['curso']."</td>";
      echo "</tr>";
    }

  ?>

</table>


</body>
</html>