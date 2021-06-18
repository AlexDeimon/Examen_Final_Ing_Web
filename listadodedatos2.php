<!DOCTYPE html>
<html lang="es">
<head>
	<title>Listado</title>
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
    <?php include "indexs.html" ?>
	<div class="container">
		<?php
			require("conectar.php");
			$sql=("Select * from alumnos");
			$query=mysqli_query($conexion,$sql);
		?>
		<table class="table table-striped">
			<thead>
				<td>ID</td>
				<td>Nombres</td>
				<td>Direccion</td>
				<td>Celular</td>
			</thead>
			<tbody>
				<?php
					while($arreglo=mysqli_fetch_array($query)){
						echo "<tr>";
						echo "<td>$arreglo[0]</td>";
						echo "<td>$arreglo[1]</td>";
						echo "<td>$arreglo[2]</td>";
						echo "<td>$arreglo[3]</td>";
					}
					echo "</tr>";
					echo "</tbody>";
					echo "</table>";
				?>
	</div>
</body>
</html>