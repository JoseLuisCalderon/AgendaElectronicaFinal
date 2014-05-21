
<?php
require 'conexion.php';
$registro = "SELECT name, apP,apM FROM usuario WHERE name= '".$_POST["nombre1"]."' and apP= '".$_POST["nombreAP"]."' and apM= '".$_POST["nombreAM"]."'";
 $consulta = mysql_query($registro)or die('Error. ' . mysql_error());
$res = 0;
if($reg=mysql_fetch_array($consulta)){
    mysql_query("DELETE FROM usuario WHERE name= '".$_POST["nombre1"]."' and apP= '".$_POST["nombreAP"]."' and apM= '".$_POST["nombreAM"]."'") or die ("Problemas al realizar la consulta:".mysql_error());
$res = 1;
}
echo $res;
?>
