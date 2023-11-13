<?php
session_start();
    if(!$_SESSION['user']){
    // si no hay sesion del usuario, es decir no esta logeado lo redirijo a la pagina de login
        header("Location: login.php");
         exit();
    }
require 'dbcon.php';
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

        <div class="col-12 col-md-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['nombre']; ?>">
        </div>

        <div class="col-12 col-md-3">
            <label for="exampleFormControlInput1" class="form-label">Apellido paterno</label>
            <input name="apellidop" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['apellidop']; ?>">
        </div>

        <div class="col-12 col-md-3">
            <label for="exampleFormControlInput1" class="form-label">Apellido materno</label>
            <input name="apellidom" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['apellidom']; ?>">
        </div>

        <div class="col-5">
            <label for="exampleFormControlInput1" class="form-label">Fecha de nacimiento</label>
            <input name="fechaNac" type="date" class="form-control" id="exampleFormControlInput1" value="<?= $student['fechaNac']; ?>">

        </div>

        <div class="col-4">
            <label for="exampleFormControlInput1" class="form-label">Edad</label>
            <input name="edad" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['edad']; ?>">
        </div>

        <div class="col-12 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
            <input name="direccion" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['direccion']; ?>">
        </div>

        <div class="col-5 col-md-3">
            <label for="exampleFormControlInput1" class="form-label">El menor vive con:</label>
            <input name="quien" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['quien']; ?>">
        </div>

        <div class="col-7 col-md-9">
            <label for="exampleFormControlInput1" class="form-label">Observaciones especiales</label>
            <input name="observaciones" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['observaciones']; ?>">
        </div>

        <div class="col-12 text-center">
            <h2>INFORMACIÓN DEL PADRE, MADRE O TUTOR</h2>
        </div>

        <div class="col-12 col-md-9">
            <label for="exampleFormControlInput1" class="form-label">Nombre del padre / madre o tutor (obligatorio)</label>
            <input name="nombrepmtuno" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['nombrepmtuno']; ?>">
        </div>

        <div class="col-5 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <input name="teluno" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['teluno']; ?>">
        </div>

        <div class="col-7 col-md-5">
            <label for="exampleFormControlInput1" class="form-label">Correo</label>
            <input name="emailuno" type="email" class="form-control" id="exampleFormControlInput1" value="<?= $student['emailuno']; ?>">
        </div>

        <div class="col-12 col-md-9">
            <label for="exampleFormControlInput1" class="form-label">Nombre del padre / madre o tutor (opcional)</label>
            <input name="nombrepmtdos" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['nombrepmtdos']; ?>">
        </div>

        <div class="col-5 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <input name="teldos" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['teldos']; ?>">
        </div>

        <div class="col-7 col-md-5">
            <label for="exampleFormControlInput1" class="form-label">Correo</label>
            <input name="emaildos" type="email" class="form-control" id="exampleFormControlInput1" value="<?= $student['emaildos']; ?>">
        </div>

        <div class="col-12 text-center">
            <h2>A QUIEN LLAMAR EN CASO DE NO PODER CONTACTÁR AL PADRE, MADRE O TUTOR EN UNA EMERGENCIA</h2>
        </div>

        <div class="col-12 col-md-9">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input name="nombremergencia" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['nombremergencia']; ?>">
        </div>

        <div class="col-5 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <input name="telemergencia" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['telemergencia']; ?>">
        </div>

        <div class="col-7 col-md-5">
            <label for="exampleFormControlInput1" class="form-label">Relación con el menor</label>
            <input name="relacion" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['relacion']; ?>">
        </div>

        <div class="col-12 col-md-9">
            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
            <input name="direccionemergencia" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['direccionemergencia']; ?>">
        </div>

        <div class="col-12 text-center">
                <h2>INFORMACIÓN MEDICA</h2>
        </div>

        <div class="col-12 col-md-9">
            <label for="exampleFormControlInput1" class="form-label">Doctor / Pediatra</label>
            <input name="doctor" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['doctor']; ?>">
        </div>

        <div class="col-5 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <input name="teldoc" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['teldoc']; ?>">
        </div>

        <div class="col-7 col-md-5">
            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
            <input name="direcciondoc" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['direcciondoc']; ?>">
        </div>

        <div class="col-12 col-md-9">
            <label for="exampleFormControlInput1" class="form-label">Dentista</label>
            <input name="dentista" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['dentista']; ?>">
        </div>

        <div class="col-5 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <input name="teldent" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['teldent']; ?>">
        </div>

        <div class="col-7 col-md-5">
            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
            <input name="direcciondent" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['direcciondent']; ?>">
        </div>

        <div class="col-6 col-md-5">
            <label for="exampleFormControlInput1" class="form-label">Trasladar en caso de emergencia</label>
            <input name="trasladar" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['trasladar']; ?>">
        </div>

        <div class="col-6 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Numero de registro en el seguro</label>
            <input name="ssn" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['ssn']; ?>">
        </div>

            <div class="col-12 text-center">
                <h2>PERSONA AUTORIZADA A REGOGER AL NIÑO DE LA GUARDERÍA</h2>
        </div>

        <div class="col-12 col-md-9">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input name="autorizado" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['autorizado']; ?>">
        </div>

        <div class="col-5 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <input name="telauto" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['telauto']; ?>">
        </div>

        <div class="col-7 col-md-5">
            <label for="exampleFormControlInput1" class="form-label">Relación con el niño</label>
            <input name="relacionauto" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $student['relacionauto']; ?>">
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