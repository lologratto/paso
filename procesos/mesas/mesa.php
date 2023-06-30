<?php
require "../../php/conexion.php"
?>
<?php

session_start();
if(!isset ($_SESSION['num_mesa'])){
    header("location:mesa.php");
}
$nomusuario=$_SESSION["num_mesa"];
?>
<?php
echo("<h1>mesa".$_SESSION['num_mesa'].'</h1>');
$q="select * from listas";
$r=mysqli_query($con, $q);
 while($valores=mysqli_fetch_array($r)){
echo( "<form action='../guardar/guardar.php' method='GET'>");
echo('<label>'. $valores['candidatos'].'</lavel>');
echo("<br>");
echo ('<input name=L'.$valores['id_lista'].'> </input>');
echo("<br>");

}
echo ('<input name=mesa value='.$_SESSION['num_mesa'].' type="hidden">'.$_SESSION['num_mesa'].'</input>');
echo("<br>");
echo( "<input type='submit' value='enviar'>");    
echo("<br>");  
echo ("</form>");

?>
