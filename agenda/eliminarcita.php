
<?php

require 'conexion.php';
$registro = "SELECT idFecha FROM fechasAd WHERE idFecha= '".$_POST["Idcitae"]."'";
 $consulta = mysql_query($registro)or die('Error. ' . mysql_error());
$res = 0;
if($reg=mysql_fetch_array($consulta)){
    mysql_query("DELETE FROM fechasAd WHERE idFecha='$num'") or die ("Problemas al realizar la consulta:".mysql_error());
$res = 1;
}
echo $res;
?>
