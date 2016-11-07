<ul class="nav navbar-nav">
    <li class="btm-menu">
        <a href="inicio">
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio
        </a>
    </li>
</ul>
<ul class="nav navbar-nav"><!--inicio1-->
    <li class="dropdown btm-menu">
        <a href="destroy.php">
        Cerrar sesión
      		<span class="glyphicon glyphicon-log-out" aria-hidden="true"><span class="label label-danger"></span>
        </a>

    </li>
</ul><!--fin inicio1-->

<ul class="nav navbar-nav navbar-right"><!--Inical derecha-->
<li class="btm-menu-usr">
    <a href="perfil_user"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
    <font color="#fff"> Bienvenido:</font> <span class="label label-success"><?=$_SESSION["nomuser"];?></span>
    </a>
</li>
</ul><!--fin derecha-->
