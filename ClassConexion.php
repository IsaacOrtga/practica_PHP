<?php 
class Conexion{
  private $conexion; 
  private $total_consultas;
  private $consulta;
  public function __construct(){ 
    if(!isset($this->conexion)){ 
      $this->conexion = new mysqli('127.0.0.1', 'root', 'root', 'webpersonal') or die("Connect failed");
    }
  }
  public function consulta($consulta){ 
    $this->consulta =  $this->conexion->query($consulta);
    if(!$this->consulta){ 
      echo 'MySql Error: ' . $this->conexion->error;
      echo $consulta;
      exit;
    }
    return $this->consulta;
  }
  public function num_rows(){
    return $this->consulta->num_rows;
  }
  public function results(){
    $rows = array();
    while ($row = mysqli_fetch_array($this->consulta)){
      $rows[] = $row;
    }
    return $rows;
  }
}
?>