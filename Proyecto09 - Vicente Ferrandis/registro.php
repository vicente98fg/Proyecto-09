<?php

require "./src/Usuario.php";

$consulta=new Usuario();
$consulta->conectar(); 
$error = $consulta->comprobarCampos($_POST);
if(isset($error)){
  if($error===false){
    //NO HAY ERROR
    $consulta->conectar();
    $consulta->nuevoUsuario();
  }
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
  
<link rel="stylesheet" type="text/css" media="screen" href="./css/proyecto9.css" /> 

<?php include "./assets/navSup.php"; ?>

<BR>

<?php
  if(isset($error)){
    if($error!="") echo "<h4>ERROR:$error</h4>";
  }
?>

<BR>

<form action="registro.php" method="post">
      <div class="grupoFormItem">
        <label for="id"></label>
        <span class="formLabel">ID </span>
        <input type="text" name="id" value="">
      </div> <BR>
      <div class="grupoFormItem">
        <label for="nombre"></label>
        <span class="formLabel">Nombre </span>
        <input type="text" name="nombre" value="">
      </div> <BR>
      <div class="grupoFormItem">
        <label for="apellidos"></label>
        <span class="formLabel">Apellidos</span>
        <input type="text" name="apellidos" value="">
      </div> <BR>
      <div class="grupoFormItem">
        <label for="edad"></label>
          <span class="formLabel">Edad </span>
        <input type="text" name="edad" value="">
      </div> <BR>
      <div class="grupoFormItem">
        <label for="curso"></label>
        <span class="formLabel">Curso</span>
        <input type="text" name="curso" value="">
      </div> <BR>
      <input type="submit" name="" value="Insertar datos">
    </form>



</body>
</html>
