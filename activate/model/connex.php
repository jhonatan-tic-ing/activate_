<?php
//clase
class mi_Conexion{
  //atibutos
  private $server = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $db = 'pba';
  public $conn;
  //creamos construnctor
  public function __CONSTRUCT(){
    $this->conn = @mysqli_connect($this->server,$this->user,$this->pass,$this->db)OR die("ERROR CODE 00");
    @mysqli_query($this->conn,"SET NAMES 'utf8'");
    //ZONA horaria
    date_default_timezone_set('America/Mexico_City');
  }
}
?>
