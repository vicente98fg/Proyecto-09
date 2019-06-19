<?php
/**
 * Usuario
 */
 require_once "./src/Conexion.php";

class Usuario extends Conexion
{
  public $conexion=null;
  private $nombre;
  private $apellidos;
  private $edad;
  private $curso;

  function __construct()
  {
  }


public function comprobarCampos($post){
  $error=null;
  if(!isset($post)||!isset($post["id"])||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["edad"])||!isset($post["curso"])){
    $error="";
  }elseif($post["id"]==""){
    $error="No has introducido la id";
  }elseif($post["nombre"]==""){
    $error="No has introducido el nombre";
  }elseif($post["apellidos"]==""){
    $error="No has introducido el apellido";
  }elseif($post["edad"]==""){
    $error="No has introducido tu edad";
  }elseif($post["curso"]==""){
    $error="No has introducido tu curso";
  }else {
    $error=false;
    $this->id = $post['id'];
    $this->nombre = $post['nombre'];
    $this->apellidos = $post['apellidos'];
    $this->edad = $post['edad'];
    $this->curso = $post['curso'];
  }
  return $error;
  }

public function listarUsuarios(){
  $resultado=$this->conexion->query("SELECT * FROM usuario");
  return $resultado;
}

public function nuevoUsuario(){
  $consulta="INSERT INTO usuario (id, nombre, apellidos, edad, curso)
                VALUES ($this->id, '$this->nombre', '$this->apellidos', $this->edad, '$this->curso')";
    $this->conexion->query($consulta);
}

public function seleccionarUsuario(){
  $resultado=$this->conexion->query("SELECT * FROM usuario join usuario_juego ORDER BY `id` DESC LIMIT 1");
  return $resultado;
  }

public function insertar(){
    $resultado2=$this->conexion->query("SELECT * FROM usuario_juego");
    $num_filas=$resultado2->num_rows;

    if ($num_filas==0) {
      $consulta="INSERT INTO usuario_juego (id_usuario, id_juego)
                VALUES (1, 1)";
    $this->conexion->query($consulta);
  }
}

}



