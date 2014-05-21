
<?php

require_once 'conexion.php';
$registro = "SELECT idFecha FROM fechasAd WHERE idFecha= '".$_POST["citaPP"]."'";
$consulta = mysql_query($registro)or die('Error. ' . mysql_error());
$res =0;
while ($row = mysql_fetch_array($consulta)) {
    $res = 1;
}
echo $res;
?>
