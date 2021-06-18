<?php
require("conectar.php");
$registros = mysqli_query($conexion, "select id from alumnos where id='$_REQUEST[id]'") or die ("Problemas en el select: ".mysqli_error($conexion));
if($reg = mysqli_fetch_array($registros)){
    mysqli_query($conexion, "update alumnos set nombre='$_REQUEST[nombre]', direccion='$_REQUEST[direccion]', celular='$_REQUEST[celular]' where id='$_REQUEST[id]'") or die ("Problemas en el select ".mysqli_error($conexion));
}else{
    echo "El id del alumno ingresado no existe en la Base de datos";
}
mysqli_close($conexion);
echo "<script>alert('el alumno fue actualizado con éxito')</script>";
echo "<script>location.href='indexp.html';</script>"
?>