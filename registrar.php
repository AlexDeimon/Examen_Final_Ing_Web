<?php
require("conectar.php");
mysqli_query($conexion, "insert into login(email,password,tipousuario,activado,pregunta,respuesta) values('$_REQUEST[email]', '$_REQUEST[password]', '$_REQUEST[user]',0,'$_REQUEST[pregunta]', '$_REQUEST[respuesta]')") or die ("Problemas en el select ".mysqli_error($conexion));
mysqli_close($conexion);
echo "<script>alert('Se ha creado su cuenta, esta se activará en 24 horas')</script>";
echo "<script>location.href='index.html';</script>"
?>