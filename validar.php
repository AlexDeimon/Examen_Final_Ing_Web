<?php
require("conectar.php");
$username = $_POST['email'];
$password = $_POST['password'];
$sql2 = mysqli_query($conexion, "SELECT * FROM login where email = '$username'");
if($f2 = mysqli_fetch_assoc($sql2)){
    $tipousuario = $f2['tipousuario'];
    $activado = $f2['activado'];
    if($password == $f2['password'] and $tipousuario == 'Profesor' and $activado == 1){
        echo "<script>alert('¡Bienvenido Profesor!')</script>";
        echo "<script>location.href='indexp.html'</script>";
    }else if($password == $f2['password'] and $tipousuario == 'Profesor' and $activado !=1 ){
        echo "<script>alert('¡Su cuenta aun no ha sido activada!')</script>";
        echo "<script>location.href='index.html'</script>";
    }else if($password == $f2['password'] and $tipousuario == 'Estudiante' and $activado == 1){
        echo "<script>alert('¡Bienvenido Estudiante!')</script>";
        echo "<script>location.href='indexs.html'</script>";
    }else if($password == $f2['password'] and $tipousuario == 'Estudiante' and $activado !=1 ){
        echo "<script>alert('¡Su cuenta aun no ha sido activada!')</script>";
        echo "<script>location.href='index.html'</script>";
    }else if($password == $f2['password'] and $tipousuario == 'Administrador'){
        echo "<script>alert('¡Bienvenido Administrador!')</script>";
        echo "<script>location.href='indexa.html'</script>";
    }else if($password == $f2['password'] and $tipousuario == 'Visitante'){
        echo "<script>alert('¡Ha accedido al sistema como invitado! Solo podra tiene acceso a la lista de estudiantes')</script>";
        echo "<script>location.href='indexi.html'</script>";
    }else{
        echo "<script>alert('Contraseña incorrecta')</script>";
        echo "<script>location.href='index.html'</script>";
    }
}
else{
    echo "<script>alert('este usuario no existe en la base de datos, comuniquese con el administrador')</script>";
    echo "<script>location.href='index.html'</script>";
}
?>