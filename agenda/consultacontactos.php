<?php
require 'conexion.php';

$sql="SELECT name, apP,apM, birthDate,address,email,site,tel,cel,oficio FROM usuario where tipo='user'";
$resultado=mysql_query($sql,$con);

if($resultado){
$dator=array();
$i=0;
while($fila=mysql_fetch_assoc($resultado)){
	$datos[$i]=$fila;
	$i=$i+1;
}
}else{
 die("Error de conexión".mysql_error());   
}

mysql_close($con); 
echo json_encode($datos)
?>