<?php
require("conectar.php");
mysqli_query($conexion, "insert into alumnos(nombre,direccion,celular) values('$_REQUEST[nombre]', '$_REQUEST[direccion]', '$_REQUEST[celular]')") or die ("Problemas en el select ".mysqli_error($conexion));
mysqli_close($conexion);
echo "<script>alert('El alumno fue agregado')</script>";
echo "<script>location.href='indexp.html';</script>"
?>