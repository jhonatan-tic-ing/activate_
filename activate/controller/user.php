<?php
//requerir archivo de conexion
require_once('model/connex.php');
//clase y herencia de la conexion
class usuarios extends mi_Conexion{
  //metodo Insert
  public function InsertUser($nom_user,$app_user,$apm_user,$user_log,$pass_user){
    $qi = "INSERT INTO usuarios(nom_user, app_user, apm_user, user_log, pass_user, rol_user, activo_user) VALUES ('$nom_user','$app_user','$apm_user','$user_log','$pass_user','U',1)";
    $query_i = @mysqli_query($this->conn,$qi)OR die("ERROR CODE 01_IU");
    ?>
    <script>
      alert("Usuario Registrado...");
      setTimeout(location.href="usuarios");
    </script>
    <?php
  }
  public function ValUSer($user,$pass){
    //realizar la consulta a la bd
    $res = "SELECT id_user, nom_user, app_user, user_log, pass_user, rol_user, activo_user FROM usuarios WHERE user_log = '$user' AND pass_user = '$pass' AND activo_user = 1";
    $query_select = @mysqli_query($this->conn,$res)OR die("ERROR CODE 01_SU");
    $rows_u = mysqli_num_rows($query_select);
    if($rows_u == true){
      session_start();
      $rowsU = mysqli_fetch_array($query_select);
      $iduser = $rowsU["id_user"];
      $_SESSION["iduser"] = $iduser;
      $nomuser = $rowsU["nom_user"];
      $_SESSION["nomuser"] = $nomuser;
      $appuser = $rowsU["app_user"];
      $_SESSION["appuser"] = $appuser;
      $rol = $rowsU["rol_user"];
      $_SESSION["rol"] = $rol;
      //validar acceso
      if($rol == "A"){
      ?>
      <script>
        setTimeout(location.href="admin");
      </script>
      <?php
    }else if($rol == "U"){

      ?>
      <script>
        setTimeout(location.href="inicio");
      </script>
      <?php
    }else{ echo "<script> setTimeout(location.href='index.php');</script>"; }
    }else{
      echo"<script>alert('El usuario no existe o esta inactivo, consulte con su administrador...');</script>";
    }
  }
  //metodo para mostrrar usuarios
  public function verUsuarios(){
    $qselect = mysqli_query($this->conn,"SELECT * FROM usuarios")OR die("ERROR CODE: 002");
    ?>
    <table width="100%" border="1px">
      <tr>
        <td>Nombre</td><td>APP</td><td>APM</td><td>USUARIO</td>
      </tr>
    <?php
    while($regs = mysqli_fetch_array($qselect)){
      ?>
      <tr>
        <td><?php echo$a1 = $regs['nom_user'];?></td>
        <td><?php echo$a2 = $regs['app_user'];?></td>
        <td><?php echo$a2 = $regs['apm_user'];?></td>
        <td><?php echo$a3 = $regs['user_log'];?></td>
      </tr>
      <?php
    }
    echo"</table>";
  }
}
?>
