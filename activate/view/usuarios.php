<br/><br/><br/><br/>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <script>
      $(document).ready(function(){
        //accedemos al metodo ajax
        $('#E').on('click',function(){
          if($('#nus').val() == "" && $('#app').val() == "" && $('#apm').val() == "" && $('#us').val() == "" && $('#p1').val() == "") {
              alert("Favor de llenar los campos...");
              return false;
          }
          if($('#p1').val() != $('#p2').val()){
            alert("Las contraseñas no coinciden...");
            return false;
          }
        })
        })
      </script>
      <table width="100%">
        <form method="POST">
        <tr>
          <td><label>Nombre:</label></td><td><input type="text" class="form-control" name="nus" id="nus"></td>
        </tr>
        <tr>
          <td><label>APP:</label></td><td><input type="text" class="form-control"name="app" id="app"></td>
        </tr>
        <tr>
          <td><label>APM:</label></td><td><input type="text" class="form-control"name="apm" id="apm"></td>
        </tr>
        <tr>
          <td><label>Usuario:</label></td><td><input type="text" class="form-control"name="us" id="us"></td>
        </tr>
        <tr>
          <td><label>Password:</label></td><td><input type="text" class="form-control"name="p1" id="p1"></td>
        </tr>
        <tr>
          <td><label>Password:</label></td><td><input type="text" class="form-control"name="p2" id="p2"></td>
        </tr>
        <tr>
          <td colspan="2">
            <button  type="submit" class="btn btn-primary btn-lg" name ="En" id="E">Registrar</button>
          </td>
        </tr>
      </table>
    </form>
      <div id="resultado"></div>
      <?php
      require_once('controller/user.php');
      $vu = new usuarios();
      $vu->verUsuarios();
      ?>
    </div>

  </div>
</div>
<?php
if(isset($_POST['En'])){
  require_once('controller/user.php');
  $regU = new usuarios();
  $regU->InsertUser($_POST['nus'],$_POST['app'],$_POST['apm'],$_POST['us'],$_POST['p1']);
}

?>
