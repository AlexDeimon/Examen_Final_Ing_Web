<?php
require("conectar.php");
$registros = mysqli_query($conexion, "select celular from alumnos where celular='$_REQUEST[celular]'") or die ("Problemas en el select: ".mysqli_error($conexion));
if($reg = mysqli_fetch_array($registros)){
    mysqli_query($conexion, "delete from alumnos where celular='$_REQUEST[celular]'") or die ("Problemas en el delete: ".mysqli_error($conexion));
    echo "Alumno borrado con éxito";
}
else{
    echo "<script>alert('El alumno ingresado no existe en la Base de datos')</script>";
}
mysqli_close($conexion);
echo "<script>location.href='indexp.html';</script>";
?>