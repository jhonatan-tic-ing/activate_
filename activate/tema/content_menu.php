<!--Contenedor de Menú-->
<div class="navbar navbar-inverse navbar-fixed-top contmenu" role="navigation">
    <div class="container">
        <div class="navbar-header">
          <br/>
          <font color="#fff" size="5px"> ACTIVATE &nbsp;&nbsp;&nbsp;&nbsp;</font>
          <button type="button" class="navbar-toggle collapsed btn_verde" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
        <!--mostrar menu dependiendo del tipo de usuario-->
        <?php
            if($_SESSION["rol"]=="A"){
            include"tema/menuadmin.php";//listo
            }
            else if($_SESSION['rol']=="U"){
            include"tema/menuusuario.php";//listo
            }
            else{
                header("location:index.php");
            }
        ?>
        </div><!--/.nav-collapse -->
    </div>
</div>
