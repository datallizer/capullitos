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

        <div class="col-4">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <p class="form-control"><?=$student['nombre'];?></p>
        </div>

        <div class="col-4">
            <label for="exampleFormControlInput1" class="form-label">Apellido paterno</label>
            <p class="form-control"><?=$student['apellidop'];?></p>
        </div>

        <div class="col-4">
            <label for="exampleFormControlInput1" class="form-label">Apellido materno</label>
            <p class="form-control"><?=$student['apellidom'];?></p>
        </div>

        <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Fecha de nacimiento</label>
            <p class="form-control"><?=$student['fechaNac'];?></p>
        </div>

        <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Edad</label>
            <p class="form-control"><?=$student['edad'];?></p>
        </div>

        <div class="col-8">
            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
            <p class="form-control"><?=$student['direccion'];?></p>
        </div>

        <div class="col-4">
            <label for="exampleFormControlInput1" class="form-label">El menor vive con:</label>
            <p class="form-control"><?=$student['quien'];?></p>
        </div>

        <div class="col-12">
            <label for="exampleFormControlInput1" class="form-label">Observaciones especiales</label>
            <p class="form-control"><?=$student['observaciones'];?></p>
        </div>

        <div class="col-12 text-center">
            <h2>INFORMACIÓN DEL PADRE, MADRE O TUTOR</h2>
        </div>

        <div class="col-12">
            <label for="exampleFormControlInput1" class="form-label">Nombre del padre / madre o tutor (obligatorio)</label>
            <p class="form-control"><?=$student['nombrepmtuno'];?></p>
        </div>

        <div class="col-4">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <p class="form-control"><?=$student['teluno'];?></p>
        </div>

        <div class="col-8">
            <label for="exampleFormControlInput1" class="form-label">Correo</label>
            <p class="form-control"><?=$student['emailuno'];?></p>
        </div>

        <div class="col-12">
            <label for="exampleFormControlInput1" class="form-label">Nombre del padre / madre o tutor (opcional)</label>
            <p class="form-control"><?=$student['nombrepmtdos'];?></p>
        </div>

        <div class="col-4">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <p class="form-control"><?=$student['teldos'];?></p>
        </div>

        <div class="col-8">
            <label for="exampleFormControlInput1" class="form-label">Correo</label>
            <p class="form-control"><?=$student['emaildos'];?></p>
        </div><br>

        <div class="col-12 text-center">
            <h2>A QUIEN LLAMAR EN CASO DE NO PODER CONTACTÁR AL PADRE, MADRE O TUTOR EN UNA EMERGENCIA</h2>
        </div>

        <div class="col-9">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <p class="form-control"><?=$student['nombremergencia'];?></p>
        </div>

        <div class="col-3">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <p class="form-control"><?=$student['telemergencia'];?></p>
        </div>

        <div class="col-4">
            <label for="exampleFormControlInput1" class="form-label">Relación con el menor</label>
            <p class="form-control"><?=$student['relacion'];?></p>
        </div>

        <div class="col-8">
            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
            <p class="form-control"><?=$student['direccionemergencia'];?></p>
        </div>

        <div class="col-12 text-center">
                <h2>INFORMACIÓN MEDICA</h2>
        </div>

        <div class="col-12">
            <label for="exampleFormControlInput1" class="form-label">Doctor / Pediatra</label>
            <p class="form-control"><?=$student['doctor'];?></p>
        </div>

        <div class="col-3">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <p class="form-control"><?=$student['teldoc'];?></p>
        </div>

        <div class="col-9">
            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
            <p class="form-control"><?=$student['direcciondoc'];?></p>
        </div>

        <div class="col-12">
            <label for="exampleFormControlInput1" class="form-label">Dentista</label>
            <p class="form-control"><?=$student['dentista'];?></p>
        </div>

        <div class="col-3">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <p class="form-control"><?=$student['teldent'];?></p>
        </div>

        <div class="col-9">
            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
            <p class="form-control"><?=$student['direcciondent'];?></p>
        </div>

        <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Trasladar en caso de emergencia</label>
            <p class="form-control"><?=$student['trasladar'];?></p>
        </div>

        <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Numero de registro en el seguro</label>
            <p class="form-control"><?=$student['ssn'];?></p>
        </div>

            <div class="col-12 text-center">
                <h2>PERSONA AUTORIZADA A REGOGER AL NIÑO DE LA GUARDERÍA</h2>
        </div>

        <div class="col-12">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <p class="form-control"><?=$student['autorizado'];?></p>
        </div>

        <div class="col-4">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <p class="form-control"><?=$student['telauto'];?></p>
        </div>

        <div class="col-8">
            <label for="exampleFormControlInput1" class="form-label">Relación con el niño</label>
            <p class="form-control"><?=$student['relacionauto'];?></p>
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