<?php
session_start();
require 'dbcon.php';

//Verificar si existe una sesión activa y los valores de usuario y contraseña están establecidos
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Consultar la base de datos para verificar si los valores coinciden con algún registro en la tabla de usuarios
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($con, $query);

    // Si se encuentra un registro coincidente, el usuario está autorizado
    if (mysqli_num_rows($result) > 0) {
        // El usuario está autorizado, se puede acceder al contenido
    } else {
        // Redirigir al usuario a una página de inicio de sesión
        header('Location: login.php');
        exit(); // Finalizar el script después de la redirección
    }
} else {
    // Redirigir al usuario a una página de inicio de sesión si no hay una sesión activa
    header('Location: login.php');
    exit(); // Finalizar el script después de la redirección
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/print.css" media="print">
    <link rel="stylesheet" href="css/styles.css">

    <title>Vista de forma unica</title>
</head>
<body>

    <div class="container print mgver">
        <div class="row print">
            <div class="col-md-12 print">
                <div class="card">
                    <div class="col-12 text-center verimg">
                        <img src="images/logocolor.png" alt="">
                    </div>
                    <div class="card-header text-center">
                        <h4>FORMA UNICA DE IDENTIFICACIÓN Y EMERGENCIA
                            <a href="formaunica.php" class=" back btn btn-danger float-end">BACK</a>

                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM formaunica WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                            $student = mysqli_fetch_array($query_run);
                        ?>

<div class="container">
        <div class="row justify-content-center contbody" >
            <div class="col-12 text-center"><h2>NOMBRE DEL NIÑO (A)</h2>
        </div>

        <div class="col-4 form-floating">
            <input name="nombre" id="nombre" type="text" class="form-control" autocomplete="off" value="<?=$student['nombre']; ?>" placeholder="Nombre" required>
            <label for="exampleFormControlInput1" class="form-label">Nombre</label><br>
        </div>

        <div class="col-4 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['apellidop']; ?>" autocomplete="off" placeholder="Apellido Paterno" required>
        <label for="exampleFormControlInput1" class="form-label">Apellido paterno</label><br>
        </div>

        <div class="col-4 form-floating">
            <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['apellidom']; ?>" autocomplete="off" placeholder="Apellido Materno" required>
            <label for="exampleFormControlInput1" class="form-label">Apellido materno</label>
            
        </div>

        <div class="col-6 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['fechaNac']; ?>" autocomplete="off" placeholder="Fecha de Nacimiento" required>
        <label for="exampleFormControlInput1" class="form-label">Fecha de nacimiento</label><br>
        </div>

        <div class="col-6 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['edad']; ?>" autocomplete="off" placeholder="Edad" required>
        <label for="exampleFormControlInput1" class="form-label">Edad</label>
        </div>

        <div class="col-8 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['direccion']; ?>" autocomplete="off" placeholder="Direccion" required>
        <label for="exampleFormControlInput1" class="form-label">Dirección</label><br>
        </div>

        <div class="col-4 form-floating">
            <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['quien']; ?>" autocomplete="off" placeholder="El menor vive con:" required>
            <label for="exampleFormControlInput1" class="form-label">El menor vive con:</label>
        </div>

        <div class="col-12 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['observaciones']; ?>" autocomplete="off" placeholder="Observaciones especiales" required>
        <label for="exampleFormControlInput1" class="form-label">Observaciones especiales</label><br>
        </div>

        <div class="col-12 text-center">
            <h2>INFORMACIÓN DEL PADRE, MADRE O TUTOR</h2>
        </div>

        <div class="col-12 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['nombrepmtuno']; ?>" autocomplete="off" placeholder="Nombre del padre / madre o tutor (obligatorio)" required>
        <label for="exampleFormControlInput1" class="form-label">Nombre del padre / madre o tutor (obligatorio)</label><br>
        </div>

        <div class="col-4 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['teluno']; ?>" autocomplete="off" placeholder="Telefono" required>
        <label for="exampleFormControlInput1" class="form-label">Teléfono</label><br>
        </div>

        <div class="col-8 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['emailuno']; ?>" autocomplete="off" placeholder="Correo" required>
        <label for="exampleFormControlInput1" class="form-label">Correo</label>
        </div>

        <div class="col-12 form-floating">
            <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['nombrepmtdos']; ?>" autocomplete="off" placeholder="Nombre del padre / madre o tutor (opcional)" required>
            <label for="exampleFormControlInput1" class="form-label">Nombre del padre / madre o tutor (opcional)</label><br>
        </div>

        <div class="col-4 form-floating">
            <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['teldos']; ?>" autocomplete="off" placeholder="Teléfono" required>
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
        </div>

        <div class="col-8 form-floating">
            <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['emaildos']; ?>" autocomplete="off" placeholder="Correo" required>
            <label for="exampleFormControlInput1" class="form-label">Correo</label><br>
        </div><br>

        <div class="col-12 text-center">
            <h2>A QUIEN LLAMAR EN CASO DE NO PODER CONTACTÁR AL PADRE, MADRE O TUTOR EN UNA EMERGENCIA</h2>
        </div>

        <div class="col-9 form-floating">
            <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['nombremergencia']; ?>" autocomplete="off" placeholder="Nombre" required>
            <label for="exampleFormControlInput1" class="form-label">Nombre</label><br>
        </div>

        <div class="col-3 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['telemergencia']; ?>" autocomplete="off" placeholder="Telefono" required>
        <label for="exampleFormControlInput1" class="form-label">Teléfono</label><br>
        </div>

        <div class="col-4 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['relacion']; ?>" autocomplete="off" placeholder="Relación con el menor" required>
        <label for="exampleFormControlInput1" class="form-label">Relación con el menor</label>
        </div>

        <div class="col-8 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['direccionemergencia']; ?>" autocomplete="off" placeholder="Dirección" required>
        <label for="exampleFormControlInput1" class="form-label">Dirección</label><br>
        </div>

        <div class="col-12 text-center">
                <h2>INFORMACIÓN MEDICA</h2>
        </div>

        <div class="col-12 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['doctor']; ?>" autocomplete="off" placeholder="Doctor / Pediatra" required>
        <label for="exampleFormControlInput1" class="form-label">Doctor / Pediatra</label><br>
        </div>

        <div class="col-3 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['teldoc']; ?>" autocomplete="off" placeholder="Teléfono" required>
        <label for="exampleFormControlInput1" class="form-label">Teléfono</label><br>
        </div>

        <div class="col-9 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['direcciondoc']; ?>" autocomplete="off" placeholder="Dirección" required>
        <label for="exampleFormControlInput1" class="form-label">Dirección</label>
        </div>

        <div class="col-12 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['dentista']; ?>" autocomplete="off" placeholder="Dentista" required>
        <label for="exampleFormControlInput1" class="form-label">Dentista</label><br>
        </div>

        <div class="col-3 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['teldent']; ?>" autocomplete="off" placeholder="Teléfono" required>
        <label for="exampleFormControlInput1" class="form-label">Teléfono</label><br>
        </div>

        <div class="col-9 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['direcciondent']; ?>" autocomplete="off" placeholder="Dirección" required>
        <label for="exampleFormControlInput1" class="form-label">Dirección</label>
        </div>

        <div class="col-6 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['trasladar']; ?>" autocomplete="off" placeholder="Trasladar en caso de emergencia" required>
        <label for="exampleFormControlInput1" class="form-label">Trasladar en caso de emergencia</label><br>
        </div>

        <div class="col-6 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['ssn']; ?>" autocomplete="off" placeholder="Numero de registro en el seguro" required>
        <label for="exampleFormControlInput1" class="form-label">Numero de registro en el seguro</label><br>
        </div>

            <div class="col-12 text-center">
                <h2>PERSONA AUTORIZADA A REGOGER AL NIÑO DE LA GUARDERÍA</h2>
        </div>

        <div class="col-12 form-floating">
        <input name="apellido" id="apellido" type="text" class="form-control" value="<?=$student['autorizado']; ?>" autocomplete="off" placeholder="Nombre" required>
        <label for="exampleFormControlInput1" class="form-label">Nombre</label><br>
        </div>

        <div class="col-4 form-floating">
        <input name="telauto"  type="text" class="form-control" value="<?=$student['telauto']; ?>" autocomplete="off" placeholder="Teléfono" required>
        <label for="exampleFormControlInput1" class="form-label">Telefono</label>
        </div>

        <div class="col-8 form-floating">
        <input name="relacionauto" type="text" class="form-control" value="<?=$student['relacionauto']; ?>" autocomplete="off" placeholder="Relación con el niño" required>
        <label for="exampleFormControlInput1" class="form-label">Relación con el niño</label><br>
        </div>

    <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>