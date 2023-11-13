<?php
session_start();
require 'dbcon.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];

        if (password_verify($password, $hashed_password)) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $row['id'];
            $_SESSION['rol'] = $row['rol']; // Guardar el rol en la sesión
            header("Location: menu.php"); // Redirigir a la página deseada
            exit();
        } else {
            //COntraseña incorrecta
            $_SESSION['message'] = "La contraseña es incorrecta";
            header("Location: login.php"); // Redirigir a la página deseada
            exit();
        }
    } else {
        // Usuario no encontrado
        $_SESSION['message'] = "El usuario es incorrecto";
        header("Location: login.php"); // Redirigir a la página deseada
       
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Inicio de sesion - Capullitos</title>
</head>
<body>

<?php include('top.php'); ?>   

<div data-aos="zoom-in" class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-md-5 bg-white loginpad text-center">
                <h2 class="mb-3">INICIAR SESIÓN</h2>
            <?php include('message.php'); ?>   
                <form action="" method="POST">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="username" id="username" placeholder="Usuario">
                      <label style="margin-left: 0px;" for="username" class="form-label">Usuario</label>
                  
                    </div>

                    <div class="form-floating" style="margin-top: 15px;">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                      <label style="margin-left: 0px;" for="password" class="form-label">Contraseña</label>
                    </div>

                    <div class="text-center"><button style="margin-top: 15px;" type="submit" class="btn btn-primary">Entrar</button> </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('redes.php'); ?> 

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  AOS.init();
</script>
</body>
</html>