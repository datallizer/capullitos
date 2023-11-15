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
    <link rel="stylesheet" href="css/styles.css">

    <title>Editar estudiante</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit 
                            <a href="formaunica.php" class="btn btn-danger float-end">BACK</a>
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
                                <form action="code.php" method="POST">
                                <input type="hidden" name="student_id" value="<?= $student['id']; ?>">
    <div class="container mgver">
        <div class="row justify-content-center bg-white contbody" >
            <div class="col-12 text-center"><h2>NOMBRE DEL NIÑO (A)</h2>
        </div>

        <div class="col-12 col-md-3 form-floating">
        <input name="nombre" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['nombre']; ?>" placeholder="Nombre" required>
            <label for="exampleFormControlInput1" class="form-label">Nombre</label><br>
        </div>

        <div class="col-12 col-md-3 form-floating">
        <input name="apellidop" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['apellidop']; ?>" placeholder="Apellido paterno" required>
            <label for="exampleFormControlInput1" class="form-label">Apellido paterno</label><br>
        </div>

        <div class="col-12 col-md-3 form-floating">
        <input name="apellidom" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['apellidom']; ?>" placeholder="Apellido mmaterno" required>
            <label for="exampleFormControlInput1" class="form-label">Apellido materno</label>
        </div>

        <div class="col-5 form-floating">
        <input name="fechaNac" type="date" class="form-control" id="exampleFormControlInput1" value="<?= $student['fechaNac']; ?>" placeholder="Fecha de nacimiento" required>
            <label for="exampleFormControlInput1" class="form-label">Fecha de nacimiento</label><br>

        </div>

        <div class="col-4 form-floating">
        <input name="edad" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['edad']; ?>" placeholder="Edad" required>
            <label for="exampleFormControlInput1" class="form-label">Edad</label>
        </div>

        <div class="col-12 col-md-6 form-floating">
        <input name="direccion" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['direccion']; ?>" placeholder="Dirección" required>
            <label for="exampleFormControlInput1" class="form-label">Dirección</label><br>
        </div>

        <div class="col-5 col-md-3 form-floating">
        <input name="quien" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['quien']; ?>" placeholder="El menor vive con:" required>
            <label for="exampleFormControlInput1" class="form-label">El menor vive con:</label>
        </div>

        <div class="col-7 col-md-9 form-floating">
        <input name="observaciones" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['observaciones']; ?>" placeholder="Observaciones especiales" required>
            <label for="exampleFormControlInput1" class="form-label">Observaciones especiales</label><br>
        </div>

        <div class="col-12 text-center">
            <h2>INFORMACIÓN DEL PADRE, MADRE O TUTOR</h2>
        </div>

        <div class="col-12 col-md-9 form-floating">
        <input name="nombrepmtuno" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['nombrepmtuno']; ?>" placeholder="Nombre del padre / madre o tutor (obligatorio)" required>
            <label for="exampleFormControlInput1" class="form-label">Nombre del padre / madre o tutor (obligatorio)</label><br>
        </div>

        <div class="col-5 col-md-4 form-floating">
        <input name="teluno" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['teluno']; ?>" placeholder="Teléfono" required>
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label><br>
        </div>

        <div class="col-7 col-md-5 form-floating">
        <input name="emailuno" type="email" class="form-control" id="exampleFormControlInput1" value="<?= $student['emailuno']; ?>" placeholder="Correo" required>
            <label for="exampleFormControlInput1" class="form-label">Correo</label>
        </div>

        <div class="col-12 col-md-9 form-floating">
        <input name="nombrepmtdos" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['nombrepmtdos']; ?>" placeholder="Nombre del padre / madre o tutor (opcional)" required>
            <label for="exampleFormControlInput1" class="form-label">Nombre del padre / madre o tutor (opcional)</label><br>
        </div>

        <div class="col-5 col-md-4 form-floating">
        <input name="teldos" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['teldos']; ?>" placeholder="Teléfono" required>
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
        </div>

        <div class="col-7 col-md-5 form-floating">
        <input name="emaildos" type="email" class="form-control" id="exampleFormControlInput1" value="<?= $student['emaildos']; ?>" placeholder="Correo" required>
            <label for="exampleFormControlInput1" class="form-label">Correo</label><br>
        </div>

        <div class="col-12 text-center">
            <h2>A QUIEN LLAMAR EN CASO DE NO PODER CONTACTÁR AL PADRE, MADRE O TUTOR EN UNA EMERGENCIA</h2><br>
        </div>

        <div class="col-12 col-md-9 form-floating">
        <input name="nombremergencia" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['nombremergencia']; ?>" placeholder="Nombre" required>
            <label for="exampleFormControlInput1" class="form-label">Nombre</label><br>
        </div>

        <div class="col-5 col-md-4 form-floating">
        <input name="telemergencia" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['telemergencia']; ?>" placeholder="Teléfono" required>
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label><br>
        </div>

        <div class="col-7 col-md-5 form-floating">
        <input name="relacion" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['relacion']; ?>" placeholder="Relación con el menor" required>
            <label for="exampleFormControlInput1" class="form-label">Relación con el menor</label>
        </div>

        <div class="col-12 col-md-9 form-floating">
        <input name="direccionemergencia" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['direccionemergencia']; ?>" placeholder="Dirección" required>
            <label for="exampleFormControlInput1" class="form-label">Dirección</label><br>
        </div>

        <div class="col-12 text-center">
                <h2>INFORMACIÓN MEDICA</h2><br>
        </div>

        <div class="col-12 col-md-9 form-floating">
        <input name="doctor" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['doctor']; ?>" placeholder="Doctor / Pediatra" required>
            <label for="exampleFormControlInput1" class="form-label">Doctor / Pediatra</label><br>
        </div>

        <div class="col-5 col-md-4 form-floating">
        <input name="teldoc" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['teldoc']; ?>" placeholder="Teléfono" required>
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label><br>
        </div>

        <div class="col-7 col-md-5 form-floating">
        <input name="direcciondoc" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['direcciondoc']; ?>" placeholder="Dirección" required>
            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
        </div>

        <div class="col-12 col-md-9 form-floating">
        <input name="dentista" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['dentista']; ?>" placeholder="Dentista" required>
            <label for="exampleFormControlInput1" class="form-label">Dentista</label><br>
        </div>

        <div class="col-5 col-md-4 form-floating">
        <input name="teldent" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['teldent']; ?>" placeholder="Teléfono" required>
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label><br>
        </div>

        <div class="col-7 col-md-5 form-floating">
        <input name="direcciondent" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['direcciondent']; ?>" placeholder="Dirección" required>
            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
        </div>

        <div class="col-6 col-md-5 form-floating">
        <input name="trasladar" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['trasladar']; ?>" placeholder="Trasladar en caso de emergencia" required>
            <label for="exampleFormControlInput1" class="form-label">Trasladar en caso de emergencia</label><br>
        </div>

        <div class="col-6 col-md-4 form-floating">
        <input name="ssn" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['ssn']; ?>" placeholder="Numero de registro en el seguro" required>
            <label for="exampleFormControlInput1" class="form-label">Numero de registro en el seguro</label><br>
        </div>

            <div class="col-12 text-center">
                <h2>PERSONA AUTORIZADA A REGOGER AL NIÑO DE LA GUARDERÍA</h2><br>
        </div>

        <div class="col-12 col-md-9 form-floating">
        <input name="autorizado" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['autorizado']; ?>" placeholder="Nombre" required>
            <label for="exampleFormControlInput1" class="form-label">Nombre</label><br>
        </div>

        <div class="col-5 col-md-4 form-floating">
        <input name="telauto" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['telauto']; ?>" placeholder="Telefono" required>
        <label for="exampleFormControlInput1" class="form-label">Telefono</label>    
        </div>

        <div class="col-7 col-md-5 form-floating">
        <input name="relacionauto" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['relacionauto']; ?>" placeholder="Relación con el niño" required>
            <label for="exampleFormControlInput1" class="form-label">Relación con el niño</label><br>
        </div>

        <div class="col-12 col-md-9 text-center">
            <button type="submit" name="update_student" class="btn btn-primary">
                Actualizar información
            </button>
        </div>


        </div>
    </div>
                                    
</form>
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