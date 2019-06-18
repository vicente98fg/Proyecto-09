<?php

session_start();
 	if (!isset($_SESSION['nombre']) == '') {
  header('Location: /carpeta/login.php');
}
require "./src/Conexion.php";
require "./src/Usuario.php";

$consulta = new Usuario();
$consulta->conectar(); 
$resultado = $consulta->seleccionarUsuario(); 
$consulta->insertar();



?>

<!DOCTYPE html>
<link rel="stylesheet" href="proyecto7.css"/>


<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/proyecto8.css" />
    
</head>
<body>

<?php include "./assets/navSup.php"; ?>    

    <script src="./js/proyecto8.js">
    </script>

    <div id=titulo>MicroRobots</div>

    <form action="">
    <p style="text-align: center">
        <b><font size=5>Información Usuario</font></b>
        <?php
            foreach ($resultado as $usuarios) {
                echo "<b><p style='text-align: center'>Id Usuario:</b> ".$usuarios['id']."</p>";
                echo "<b><p style='text-align: center'>Usuario:</b> ".$usuarios['nombre']."</p>";
                echo "<b><p style='text-align: center'>Puntuación:</b> ".$usuarios['puntuacion']."</p>";
            }
        ?>
    </p>

        <p style="text-align: center">Siguiente fila:
        <input id= "sig" type="text"></p>
        <p style="text-align: center">Siguiente columna:
        <input id= "sig2" type="text"></p>
        <p style="text-align: center"><button type="button" name="button" onclick="comprobarMovimiento()">Comprobar movimiento</button></p>
        <p style="text-align: center">Movimientos realizados:
        <input id= "mov" type="movimientos" value="" disabled=”disabled”></p>
        <p style="text-align: center">Número de movimientos:
        <input type="nummov" value="" disabled=”disabled”></p>
        <p style="text-align: center">
    </form>
    
    <p style="text-align: center"><input id="reiniciar" type="button" value="Reiniciar tablero" onClick="window.location.reload()"></p>
        
    
</body>
</html>