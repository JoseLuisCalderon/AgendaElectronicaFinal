<?php

require_once('conexion.php');
$sql = "SELECT * FROM usuario where user='" . $_POST["Usuarios"] . "' and password='" . $_POST["Contrasena"] . "'";
$consulta = mysql_query($sql)or die('Error. ' . mysql_error());
$res = 0;
while ($row = mysql_fetch_array($consulta)) {
    $res = 1;
}
echo $res;
?>


