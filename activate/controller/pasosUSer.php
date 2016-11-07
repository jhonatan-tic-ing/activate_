<?php
require_once("model/connex.php");

class pasosUSer extends mi_Conexion{
  function pasosU(){
    session_start();

    $query_fechas = mysqli_query($this->conn,"SELECT CURDATE() as Fecha_ FROM ruta_u ")OR die("ERROR CODE: 01 ITP");
    $query_fechas_ = mysqli_query($this->conn,"SELECT pasos,trayecto,tiempo FROM `ruta_u` ORDER BY `ruta_u`.`tiempo` DESC ")OR die("ERROR CODE: 01 UP2");
    $resp = mysqli_fetch_array($query_fechas);
    $resp2 = mysqli_fetch_array($query_fechas_);

    $fechaDB = $resp['Fecha_'];
    $fechaDB_ = $resp2['tiempo'];

    $pasosTrayectoDB = $resp2['trayecto'];
    $pasosDB = $resp2['pasos'];
    $pasos = $pasosDB + 1;
    echo"<h1>Pasos:".$pasos."</h1>";
    $fecha = date('Y-m-d');

    if($fecha === $fechaDB){
      //echo "Si se cumple";
      $idu = $_SESSION["iduser"];
      $sumaPasostrayecto = $pasosTrayectoDB + 0.79;
      $date = date('Y-m-d H:i:s');
      $qup = "UPDATE ruta_u SET trayecto = $sumaPasostrayecto, pasos = $pasos, tiempo = '{$date}', id_user = $idu WHERE tiempo = '{$fechaDB_}' AND id_user = $idu";
      $IPU = @mysqli_query($this->conn,$qup)OR die("ERROR CODE: 01 IUP");
    }else{
      $idu = $_SESSION["iduser"];
      $IP = "INSERT INTO ruta_u(pasos,trayecto,tiempo,id_user) VALUES (1,0.79,NOW(),$idu)";
      $query_i = @mysqli_query($this->conn,$IP)OR die("ERROR CODE:");
    }

  }
  //metodo de las querys
  public function trayecto1($tiempo){
    $r = "SELECT MAX(`ruta_u`.`trayecto`) AS `trayecto__`, `usuarios`.`nom_user` as NU, `usuarios`.`app_user` as APPU, `ruta_u`.`pasos` as Pasos FROM `usuarios` INNER JOIN `ruta_u` ON (`usuarios`.`id_user` = `ruta_u`.`id_user`) WHERE ruta_u.tiempo LIKE '%$tiempo%' GROUP BY `usuarios`.`nom_user`, `usuarios`.`app_user`, `ruta_u`.`trayecto`, `ruta_u`.`pasos`";
    $qt1 = mysqli_query($this->conn,$r)OR ide("ERROR CODE: 00 QE1");
    $rows2 = mysqli_num_rows($qt1);
    if($rows2 == true){
      $res1 = mysqli_fetch_array($qt1);
      $nom_Usr = $res1['NU'];
      $app = $res1['APPU'];
      $pasos_ = $res1['Pasos'];
      $trap = $res1['trayecto__'];
      ?>
      <table class="table table-striped">
        <thead>
          <tr>
            <td>Usuario</td><td>Pasos</td><td>Trayecto</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $nom_Usr." ".$app ?></td><td><?= $pasos_?></td><td><?= $trap?></td>
          </tr>
        </tbody>
      </table>
      <?php
    }else{
      echo"<h2>Sin resultados...</h2>";
    }

  }
}

?>
