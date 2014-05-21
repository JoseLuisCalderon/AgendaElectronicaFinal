<?php

$servidor="sql303.260mb.net";
$usuario="n260m_14540996";
$contrasena="79hercul";
$baseDatos="n260m_14540996_transporte";
$con=mysql_connect($servidor,$usuario,$contrasena)or die("Error de conexión".mysql_error());
mysql_select_db($baseDatos,$con);
?>

