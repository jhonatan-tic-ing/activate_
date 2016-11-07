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
//inicializamos la session
session_start();
//verificmos si la session existe
if(isset($_SESSION["iduser"])){
require_once"header.php";
?>
	</head>
	<body>
<?php
require_once"tema/content_menu.php";
function rutas_view($ruta){
	//ruta para mandar a llamar el archivo
	$archivo = "view/$ruta.php";

	//condición de archivo valido
	if(file_exists($archivo)){
		require"$archivo";
	}
	else{
	?>

	<br /><br /><br /><br /><br /><br /><br />
	<div class="col-md-4  col-sm-4 col-xs-12 col-md-offset-4 col-sm-offset-4 text-center">
	        <div class="alert alert-dismissible alert-danger">
	            <button type="button" class="close" data-dismiss="alert">×</button>
	            <p>
	            	<b>Vista no disponible</b>
	            </p>
	        </div>
	    </div>
	<?php
	}
}
//si esta vacio mande por automatico a la direccion X
/*if(empty ($_GET['url']))
{
	$_GET['url'] = "";
}*/
//mandamos a llamar la funcion rutas_view
rutas_view($_GET['url']);
require_once"footer.php";
?>
<body>
</html>
<?php
}
else
{
	session_destroy();
	header("Location:/activate");
}
?>
