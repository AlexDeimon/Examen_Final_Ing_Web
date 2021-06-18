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
    <form method="post" action="actualizar_datos2.php" class="was-validate">
        <div class="form-group">
            <label for="id">Id</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Ingrese Id estudiante a actualizar" name="id" id="id">
                <div class="input-group-append">
                    <button class="btn btn-warning" type="submit">Buscar</button>
                </div>
            </div>
            <div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Por favor ingrese un id</div>
        </div>
    </form>
</div>
</body>
</html>