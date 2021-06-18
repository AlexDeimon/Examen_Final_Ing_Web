<?php
	$conexion=new MySQLi("localhost","id16852268_root","GQdrn%Q_MeUO(PW1","id16852268_prueba");
	mysqli_set_charset($conexion, 'utf8');
	if($conexion->connect_errno){
		die("Fallo la conexion a la BD: (".$conexion->mysql_connect_errno().")".$conexion->mysql_connect_errno());
	}
	else{
		echo "Conectado...";
	}
?>