<!DOCTYPE html>
<html>
<head>
  <!--Contenedo de elementos meta,css y js-->
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <head>
  <?php
    require_once("header.php");
  ?>
  <script>
  $(document).ready(function(){
      $('#formulario').submit(function () {
        if($('#user').val() == "" && $("#psw").val() == "") {
            alert("Ingresar usuario y contraseña");
            return false;
        }
      })
  })
  </script>
  </head>
<body>
<div>
<!-- Modal -->
<div class="espacio_arriba">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
      <table width="100%">
          <tr>
            <td align="center">LOGIN</td>
          </tr>
      </table>
      </div>
      <div class="modal-body">
      <form method="POST" class="contact_form" id="formulario">
        <label class="control-label">* Usuario:</label>
        <input type="text" class="form-control" name="usr_name" placeholder="Usuario" id="user">
        <label class="control-label">* Contraseña:</label>
        <input type="password" class="form-control" name="psw_usr" placeholder="**********" id="psw">
        <!--<center><span class="label label-danger text-center">::Registrate::</span></center>-->
      </div>
      <div class="modal-footer">
        <button type="submit" name="ingreso" class="btn-lg btn-block btn btn-success">Ingresar</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
<?php
require_once"footer.php";
?>
</body>
</html>
<?php
//validar envio de formulario
if(isset($_POST['ingreso'])){
  require_once("controller/user.php");
  $validarUser = new usuarios();
  $validarUser->ValUSer($_POST['usr_name'],$_POST['psw_usr']);
}
?>
