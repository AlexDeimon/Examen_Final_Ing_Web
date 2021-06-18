<!DOCTYPE html>
<html lang="es">
<head>
	<title>Buscar</title>
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
		<table class="table table-striped">
			<thead>
				<td>ID</td>
				<td>Nombres</td>
				<td>Direccion</td>
				<td>Celular</td>
			</thead>
			<tbody>
				<?php
                require("conectar.php");
                $registros = mysqli_query($conexion, "select id,nombre,direccion,celular from alumnos where nombre='$_REQUEST[nombre]'") or die ("Problemas en el select: ".mysqli_error($conexion));
                if($reg = mysqli_fetch_array($registros)){
                    echo "<tr>";
					echo "<td>$reg[0]</td>";
					echo "<td>$reg[1]</td>";
					echo "<td>$reg[2]</td>";
					echo "<td>$reg[3]</td>";
					echo "</tr>";
					echo "</tbody>";
					echo "</table>";
                }
                else{
                    echo "<script>alert('El alumno ingresado no existe en la Base de datos')</script>";
                }
                mysqli_close($conexion);
				?>
	</div>
</body>
</html>