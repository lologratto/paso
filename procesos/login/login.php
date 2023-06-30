<?php
require "../../php/conexion.php";
$u=$_GET['num_mesa'];
$c=$_GET['contraseña'];
$q="select * from mesas, fiscales where mesas.id_fiscal=fiscales.id_fiscal and num_mesa= '$u' and contraseña='$c' ";
$r=mysqli_query($con, $q);
if(mysqli_num_rows($r)>0){
    session_start();
    $_SESSION['num_mesa']=$u;
  header('location:../mesas/mesa.php');
}
else
{
    header('location:../../carga.php');
}

?>