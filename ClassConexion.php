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
  public function results($total_consultas){
    $result = $this->conexion->query($total_consultas);
    while($data = $result->fetch_assoc()){
      print_r($data);
    }
    return $data;
  }
}
?>