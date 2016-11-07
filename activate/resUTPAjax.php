<?php
require_once("controller/pasosUSer.php");
$run = new pasosUSer();
$run->trayecto1($_POST['tiempo']);
?>
