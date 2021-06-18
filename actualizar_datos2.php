<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body,
        html {
		margin: 0;
        padding: 0;
        height: 100%;
        background-image: linear-gradient(125deg,  #ffffff 30%, #dc3545 70% );
      }
    </style>
</head>
<body>
<?php include "indexp.html" ?>
<div class="container">
    <form method="post" action="actualizar.php" class="was-validate">
    <?php
        require("conectar.php");
        $registros = mysqli_query($conexion, "select id,nombre,direccion,celular from alumnos where id='$_REQUEST[id]'") or die ("Problemas en el select: ".mysqli_error($conexion));
        if($reg = mysqli_fetch_array($registros)){
		    $reg[0];
		    $reg[1];
		    $reg[2];
		    $reg[3];
        }
        else{
            echo "<script>alert('¡El alumno ingresado no existe en la Base de datos!')</script>";
        }
        mysqli_close($conexion);
    ?>
        <div class="form-group">
            <label for="id">Id</label>
            <input type="text" name="id" class= "form-control" id="id" readonly value="<?php echo $reg[0]; ?>">
        </div>
        <div class="form-group">
            <label for="uname">Nombre</label>
            <input type="text" name="nombre" class= "form-control" id="uname" value="<?php echo $reg[1]; ?>" required>
        </div>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" class= "form-control" id="direccion" value="<?php echo $reg[2]; ?>" required>
        </div>
        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" name="celular" class= "form-control" id="celular" value="<?php echo $reg[3]; ?>" required>
        </div>
        <button class="btn btn-warning" type="submit">actualizar</button>
    </form>
</div>
</body>
</html>