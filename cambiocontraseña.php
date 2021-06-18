<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio Contraseña</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <style>
      body,
      html {
		margin: 0;
        padding: 0;
        height: 100%;
        background-image: linear-gradient(125deg,  #ffffff 30%, #dc3545 70% );
      }
      .user_card {
        height: 400px;
        width: 350px;
        margin-top: auto;
        margin-bottom: auto;
        background: transparent;
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 10px;
        box-shadow: 3px 0px 11px #000;
        -webkit-box-shadow: box-shadow: 3px 0px 11px #000;
        -moz-box-shadow: box-shadow: 3px 0px 11px #000;
        border: 2px solid black;
        border-radius: 5px;
      }
      .brand_logo_container {
        position: absolute;
        height: 170px;
        width: 170px;
        top: -75px;
        border-radius: 50%;
        background: transparent;
        padding: 10px;
        text-align: center;
      }
      .brand_logo {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        border: 2px solid white;
      }
      .form_container {
        margin-top: 100px;
      }
      .login_btn {
        width: 100%;
        background: #c0392b !important;
        color: white !important;
      }
      .login_btn:focus {
        box-shadow: none !important;
        outline: 0px !important;
      }
      .btn-danger {
        background: #c0392b !important;
        border-color:#c0392b;
        color: white !important;
        margin-top:10px;
      }
      .login_danger:focus {
        box-shadow: none !important;
        outline: 0px !important;
      }
      .login_container {
        padding: 0 2rem;
      }
      .input-group-text {
        background: #c0392b !important;
        color: white !important;
        border: 0 !important;
        border-radius: 0.25rem 0 0 0.25rem !important;
      }
      .input_user,
      .input_pass:focus {
        box-shadow: none !important;
        outline: 0px !important;
      }
      .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        background-color: #c0392b !important;
      }
      .modal-header{
          background-color:#dc3545 ;
          color: #fff;
      }
    </style>
</head>
<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
          <div class="user_card">
            <div class="d-flex justify-content-center">
              <div class="brand_logo_container">
                <img src="assets/Unilibre.png" class="brand_logo" alt="Logo">
              </div>
            </div>
            <div class="d-flex justify-content-center form_container">
              <form action="recuperar.php" method="POST">
                <?php
                require("conectar.php");
                $username = $_POST['email'];
                $pregunta = $_POST['pregunta'];
                $respuesta = $_POST['respuesta'];
                $sql2 = mysqli_query($conexion, "SELECT email,password,pregunta,respuesta FROM login where email = '$username'");
                if($f2 = mysqli_fetch_assoc($sql2)){
                    if($pregunta == $f2['pregunta'] and $respuesta == $f2['respuesta']){
                        if($reg = mysqli_fetch_array($sql2)){
        		            $reg[0];
        		            $reg[1];
        		            $reg[2];
        		            $reg[3];
                        }   
                    }else if($pregunta == $f2['pregunta'] and $respuesta != $f2['respuesta']){
                        echo "<script>alert('¡Respuesta erronea!')</script>";
                        echo "<script>location.href='index.html'</script>";
                    }else{
                    echo "<script>alert('Pregunta y respuesta incorrectas')</script>";
                    echo "<script>location.href='index.html'</script>";
                    }
                }
                else{
                echo "<script>alert('este usuario no existe en la base de datos, comuniquese con el administrador')</script>";
                echo "<script>location.href='index.html'</script>";
                }
                mysqli_close($conexion);
                ?>
                <div class="input-group mb-3">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="email" name="email" id="email" class="form-control input_user" readonly value="<?php echo $username; ?>">
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" name="password" id="password" class="form-control input_pass" placeholder="Ingrese Nueva password" required>
                </div>
                  <div class="d-flex justify-content-center mt-3 login_container">
                    <button type="submit" name="button" class="btn login_btn">Cambiar</button>
               </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>