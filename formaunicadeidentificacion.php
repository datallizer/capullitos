<?php
session_start();
require 'dbcon.php';
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
    <title>Forma unica de identificación | Capullitos</title>
</head>

<body>
    <?php include('top.php'); ?>
    <?php include('whatsapp.php'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php include('message.php'); ?>
            <?php
            if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
                // Si no hay una sesión para el correo, muestra el formulario
                echo '
                <div class="col-11" id="formauno">
                <form data-aos="zoom-in" action="code.php" method="post">
                    <div style="padding: 80px 0px;border-radius:15px;" class="row justify-content-center bg-white contbody">
                        <div class="col-12 text-center mb-3">
                            <h2>NOMBRE DEL NIÑO (A)</h2>
                        </div>

                        <div class="form-floating col-12 col-md-3 mb-3">
                            <input name="nombre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Daniela / Luis" pattern="[a-zA-Z\s]{1-50}">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        </div>

                        <div class="form-floating col-12 col-md-3 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="apellidop" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Perez">
                            <label for="exampleFormControlInput1" class="form-label">Apellido paterno</label>
                        </div>

                        <div class="form-floating col-12 col-md-3 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="apellidom" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Beltrán">
                            <label for="exampleFormControlInput1" class="form-label">Apellido materno</label>
                        </div>


                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input name="direccion" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Calle Nuevo León #554, Fracc. Mexico, Aguascalientes, Ags.">
                            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                        </div>

                        <div class="form-floating col-12 col-md-5 mb-3">
                            <input name="fechaNac" type="date" class="form-control" id="exampleFormControlInput1">
                            <label for="exampleFormControlInput1" class="form-label">Fecha de nacimiento</label>
                        </div>

                        <div class="form-floating col-12 col-md-4 mb-3">
                            <input name="edad" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Edad">
                            <label for="exampleFormControlInput1" class="form-label">Edad</label>
                        </div>

                        <div class="form-floating col-12 col-md-4 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="quien" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Madre">
                            <label for="exampleFormControlInput1" class="form-label">El menor vive con:</label>
                        </div>

                        <div class="form-floating col-12 col-md-5 mb-3">
                            <input name="observaciones" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alergías, medicamentos, etc.">
                            <label for="exampleFormControlInput1" class="form-label">Observaciones especiales</label>
                        </div>

                        <div class="col-12 text-center mt-5 mb-2">
                            <h2>INFORMACIÓN DEL PADRE, MADRE O TUTOR</h2>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="nombrepmtuno" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alicia Chavez Munguia">
                            <label for="exampleFormControlInput1" class="form-label">Nombre de la madre</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="teluno" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                           <input name="emailuno" type="email" class="form-control" id="exampleFormControlInput1" placeholder="micorreo@gmail.com">
                           <label for="exampleFormControlInput1" class="form-label">Correo</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="nombrepmtdos" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Marcela Chavez Munguia">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del padre</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="teldos" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input name="emaildos" type="email" class="form-control" id="exampleFormControlInput1" placeholder="micorreo@gmail.com">
                            <label for="exampleFormControlInput1" class="form-label">Correo</label>
                        </div>

                        <div class="col-12 col-md-9 text-center mt-5 mb-3">
                            <h2>A QUIEN LLAMAR EN CASO DE NO PODER CONTACTÁR AL PADRE, MADRE O TUTOR EN UNA EMERGENCIA</h2>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="nombremergencia" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Aldo Ruiz Munguia">
                            <label for="exampleFormControlInput1" class="form-label">Nombre autorizado 1</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="telemergencia" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="relacion" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Abuelo">
                            <label for="exampleFormControlInput1" class="form-label">Relación con el menor</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input name="direccionemergencia" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Niccolo Paganini #783, Santa Anita I, Aguascalientes, Ags.">
                            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="nombremergenciados" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Juan Chavez Munguia">
                            <label for="exampleFormControlInput1" class="form-label">Nombre autorizado 2</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="telemergenciados" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="relaciondos" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Primo">
                            <label for="exampleFormControlInput1" class="form-label">Relación con el menor</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input name="direccionemergenciados" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Niccolo Paganini #783, Santa Anita I, Aguascalientes, Ags.">
                            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="nombremergenciatres" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rosalinda Chavez Munguia">
                            <label for="exampleFormControlInput1" class="form-label">Nombre autorizado 3</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="telemergenciatres" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="relaciontres" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tía">
                            <label for="exampleFormControlInput1" class="form-label">Relación con el menor</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input name="direccionemergenciatres" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Niccolo Paganini #783, Santa Anita I, Aguascalientes, Ags.">
                            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                        </div>

                        <div class="col-12 text-center mt-5 mb-3">
                            <h2>INFORMACIÓN MEDICA</h2>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="doctor" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Graciela Aguilar Suarez">
                            <label for="exampleFormControlInput1" class="form-label">Doctor / Pediatra</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="teldoc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input name="direcciondoc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Morelos #101, Col. San Marcos, Aguascalientes, Ags.">
                            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="dentista" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Aldo Ruiz Vazquez">
                            <label for="exampleFormControlInput1" class="form-label">Dentista</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="teldent" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input name="direcciondent" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Verdana #204, Fracc. Campestre, Aguascalientes, Ags.">
                            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                        </div>

                        <div class="form-floating col-12 col-md-5 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="trasladar" type="text" class="form-control" id="exampleFormControlInput1" placeholder="IMSS / ISSSTE / OTRO">
                            <label for="exampleFormControlInput1" class="form-label">Trasladar en caso de emergencia</label>
                        </div>

                        <div class="form-floating col-12 col-md-4 mb-3">
                            <input name="ssn" type="text" class="form-control" id="exampleFormControlInput1" placeholder="AD58766256547">
                            <label for="exampleFormControlInput1" class="form-label">Número de afiliación en el seguro</label>
                        </div>

                        <div class="col-12 text-center mt-5 mb-3">
                            <h2>PERSONA AUTORIZADA A RECOGER AL NIÑO DE LA GUARDERÍA</h2>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="autorizado" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Maricela Ruiz Vazquez">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="telauto" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="relacionauto" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Hermana">
                            <label for="exampleFormControlInput1" class="form-label">Relación con el niño</label>
                        </div>

                        <div style="margin-top: 20px;" class="col-9 text-center">
                            <button type="submit" name="save_student" class="btn btn-primary">Guardar</button>
                        </div>

                    </div>
                </form>
            </div>';
            } else {
                $email = $_SESSION['email'];
                $query = "SELECT * FROM formaunica WHERE emailuno = '$email'";
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0) {
                    // Si se encuentra un registro, muestra el div con el select
                    // y crea las opciones del select con los datos de la tabla

                    echo '
<div class="col-11 col-md-6 p-5 text-center" id="existente" style="border-radius:15px;background-color:#fff;">
    <h2>SELECCIONA A QUIEN DESEAS AGENDAR</h2>
    <form action="codeagenda.php" class="row mt-4" method="post">
        <div class="col-12 mb-3">
            <select name="asociado" id="nombresSelect" class="form-control">
                <option selected disabled>Selecciona un nombre</option>';

                    while ($row = mysqli_fetch_assoc($result)) {
                        $nombreCompleto = $row['nombre'] . ' ' . $row['apellidop'] . ' ' . $row['apellidom'];
                        $id = $row['id'];
                        echo "<option value='$id'>$nombreCompleto</option>";
                    }

                    echo '</select>
        </div>
        <input type="hidden" name="id_seleccionado" id="id_seleccionado" value="">
        <div class="col-12 text-center mt-4">
            <button type="submit" name="existente" class="btn btn-primary">Registrar</button>
        </div>
    </form>
</div>';
                } else {
                    // Si no se encuentra el correo, muestra el div con el formulario para ingresar datos

                    echo '
                <div class="col-11" id="formauno">
                <form data-aos="zoom-in" action="code.php" method="post">
                    <div style="padding: 80px 0px;border-radius:15px;" class="row justify-content-center bg-white contbody">
                        <div class="col-12 text-center mb-3">
                            <h2>NOMBRE DEL NIÑO (A)</h2>
                        </div>

                        <div class="form-floating col-12 col-md-3 mb-3">
                            <input name="nombre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Daniela / Luis" pattern="[a-zA-Z\s]{1-50}">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        </div>

                        <div class="form-floating col-12 col-md-3 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="apellidop" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Perez">
                            <label for="exampleFormControlInput1" class="form-label">Apellido paterno</label>
                        </div>

                        <div class="form-floating col-12 col-md-3 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="apellidom" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Beltrán">
                            <label for="exampleFormControlInput1" class="form-label">Apellido materno</label>
                        </div>


                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input name="direccion" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Calle Nuevo León #554, Fracc. Mexico, Aguascalientes, Ags.">
                            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                        </div>

                        <div class="form-floating col-12 col-md-5 mb-3">
                            <input name="fechaNac" type="date" class="form-control" id="exampleFormControlInput1">
                            <label for="exampleFormControlInput1" class="form-label">Fecha de nacimiento</label>
                        </div>

                        <div class="form-floating col-12 col-md-4 mb-3">
                            <input name="edad" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Edad">
                            <label for="exampleFormControlInput1" class="form-label">Edad</label>
                        </div>

                        <div class="form-floating col-12 col-md-4 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="quien" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Madre">
                            <label for="exampleFormControlInput1" class="form-label">El menor vive con:</label>
                        </div>

                        <div class="form-floating col-12 col-md-5 mb-3">
                            <input name="observaciones" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alergías, medicamentos, etc.">
                            <label for="exampleFormControlInput1" class="form-label">Observaciones especiales</label>
                        </div>

                        <div class="col-12 text-center mt-5 mb-2">
                            <h2>INFORMACIÓN DEL PADRE, MADRE O TUTOR</h2>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="nombrepmtuno" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alicia Chavez Munguia">
                            <label for="exampleFormControlInput1" class="form-label">Nombre de la madre</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="teluno" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                           <input name="emailuno" type="email" class="form-control" id="exampleFormControlInput1" value="' . $email . '" placeholder="micorreo@gmail.com" disabled>
                           <label for="exampleFormControlInput1" class="form-label">Correo</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="nombrepmtdos" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Marcela Chavez Munguia">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del padre</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="teldos" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input name="emaildos" type="email" class="form-control" id="exampleFormControlInput1" placeholder="micorreo@gmail.com">
                            <label for="exampleFormControlInput1" class="form-label">Correo</label>
                        </div>

                        <div class="col-12 col-md-9 text-center mt-5 mb-3">
                            <h2>A QUIEN LLAMAR EN CASO DE NO PODER CONTACTÁR AL PADRE, MADRE O TUTOR EN UNA EMERGENCIA</h2>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="nombremergencia" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Aldo Ruiz Munguia">
                            <label for="exampleFormControlInput1" class="form-label">Nombre autorizado 1</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="telemergencia" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="relacion" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Abuelo">
                            <label for="exampleFormControlInput1" class="form-label">Relación con el menor</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input name="direccionemergencia" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Niccolo Paganini #783, Santa Anita I, Aguascalientes, Ags.">
                            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="nombremergenciados" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Juan Chavez Munguia">
                            <label for="exampleFormControlInput1" class="form-label">Nombre autorizado 2</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="telemergenciados" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="relaciondos" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Primo">
                            <label for="exampleFormControlInput1" class="form-label">Relación con el menor</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input name="direccionemergenciados" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Niccolo Paganini #783, Santa Anita I, Aguascalientes, Ags.">
                            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="nombremergenciatres" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rosalinda Chavez Munguia">
                            <label for="exampleFormControlInput1" class="form-label">Nombre autorizado 3</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="telemergenciatres" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="relaciontres" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tía">
                            <label for="exampleFormControlInput1" class="form-label">Relación con el menor</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input name="direccionemergenciatres" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Niccolo Paganini #783, Santa Anita I, Aguascalientes, Ags.">
                            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                        </div>

                        <div class="col-12 text-center mt-5 mb-3">
                            <h2>INFORMACIÓN MEDICA</h2>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="doctor" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Graciela Aguilar Suarez">
                            <label for="exampleFormControlInput1" class="form-label">Doctor / Pediatra</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="teldoc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input name="direcciondoc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Morelos #101, Col. San Marcos, Aguascalientes, Ags.">
                            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="dentista" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Aldo Ruiz Vazquez">
                            <label for="exampleFormControlInput1" class="form-label">Dentista</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="teldent" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input name="direcciondent" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Verdana #204, Fracc. Campestre, Aguascalientes, Ags.">
                            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                        </div>

                        <div class="form-floating col-12 col-md-5 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="trasladar" type="text" class="form-control" id="exampleFormControlInput1" placeholder="IMSS / ISSSTE / OTRO">
                            <label for="exampleFormControlInput1" class="form-label">Trasladar en caso de emergencia</label>
                        </div>

                        <div class="form-floating col-12 col-md-4 mb-3">
                            <input name="ssn" type="text" class="form-control" id="exampleFormControlInput1" placeholder="AD58766256547">
                            <label for="exampleFormControlInput1" class="form-label">Número de afiliación en el seguro</label>
                        </div>

                        <div class="col-12 text-center mt-5 mb-3">
                            <h2>PERSONA AUTORIZADA A RECOGER AL NIÑO DE LA GUARDERÍA</h2>
                        </div>

                        <div class="form-floating col-12 col-md-9 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="autorizado" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Maricela Ruiz Vazquez">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        </div>

                        <div class="form-floating col-5 col-md-4 mb-3">
                            <input name="telauto" type="text" class="form-control" id="exampleFormControlInput1" placeholder="4495467894">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        </div>

                        <div class="form-floating col-7 col-md-5 mb-3">
                            <input pattern="[a-zA-Z\s]{1-50}" name="relacionauto" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Hermana">
                            <label for="exampleFormControlInput1" class="form-label">Relación con el niño</label>
                        </div>

                        <div style="margin-top: 20px;" class="col-9 text-center">
                            <button type="submit" name="save_student" class="btn btn-primary">Guardar</button>
                        </div>

                    </div>
                </form>
            </div>';
                }
            }

            ?>

        </div>

    </div>
    <?php include('redes.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init();
        $(document).ready(function() {
            $('#nombresSelect').on('change', function() {
                var selectedId = $(this).val();
                $('#id_seleccionado').val(selectedId);
            });
        });
    </script>
</body>

</html>