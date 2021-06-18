<?php
require("conectar.php");
$registros = mysqli_query($conexion, "select email from login where email='$_REQUEST[email]'") or die ("Problemas en el select: ".mysqli_error($conexion));
if($reg = mysqli_fetch_array($registros)){
    mysqli_query($conexion, "update login set activado=1 where email='$_REQUEST[email]'") or die ("Problemas en el select ".mysqli_error($conexion));
}else{
    echo "El usuario ingresado no existe en la Base de datos";
}
mysqli_close($conexion);
echo "<script>alert('¡Usuario Activado!')</script>";
echo "<script>location.href='indexa.html';</script>"
?>