<?php
/**
 * Conexion
 */
class Conexion
{
  public $conexion=null;
  private $servername = "localhost";
  private $user = "root";
  private $pass = "";
  private $db = "juegos";
  function __construct()
  {
  }
  public function conectar(){
    $this->conexion = new mysqli( $this->servername, $this->user, $this->pass, $this->db);
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
}
