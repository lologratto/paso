<?php
session_start();
if(!isset ($_SESSION['nombre'])){
    header("location:carga2.php");
}
$nomusuario=$_SESSION["nombre"];
?>
<h1>entro</h1>