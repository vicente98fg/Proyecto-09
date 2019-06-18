<?php
/**
 * Juego
 */
 require_once "./src/Conexion.php";

class Juego extends Conexion
{
  public $conexion=null;
  private $id;
  private $nombre;


  function __construct()
  {
  }

public function listarJuegos(){
    $resultado=$this->conexion->query("SELECT * FROM juego");
    return $resultado;
}

public function juegoMicrorobots(){
    $resultado2=$this->conexion->query("SELECT * FROM juego");
    $num_filas=$resultado2->num_rows;
    if ($num_filas==0) {
      $consulta="INSERT INTO juego (nombre)
                    VALUES ('Microrobots')";
    $this->conexion->query($consulta);
    }
}



}