<?php
$m=$_GET['mesa'];
require "../../php/conexion.php"
?>
<?php
$q="select * from listas";
$r=mysqli_query($con, $q);
 while($valores=mysqli_fetch_array($r)){
    $L=$_GET['L'. $valores['id_lista']];
   
   $q="insert into votos (id_lista, id_mesa, voto) values (".$valores['id_lista'] .",". $m. "," .$L.")";

   $r2=mysqli_query($con, $q);
}
 

header("location:../mesa/mesa.php");
 ?>