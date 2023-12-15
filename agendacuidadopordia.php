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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Agenda cuidado por día | Capullitos</title>
</head>
<body>
    <?php include('top.php'); ?>
    <?php include('whatsapp.php'); ?>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-11 col-md-5 agendacard text-center">
                <h2>AGENDA</h2>
                <p><b>SERVICIO DE CUIDADO POR DÍA</b></p>
                <form action="codeagenda.php" method="post" class="row">
                    <div class="col-12 form-floating mb-3">
                        <input type="text" id="datepicker" class="form-control" placeholder="Selecciona el día" name="dia" required>
                        <label for="datepicker" style="margin-left: 10px;">Selecciona el día</label>
                    </div>

                    <div class="col-12 form-floating mb-3">
                        <select class="form-select" id="entrada" name="entrada" required>
                            <option disabled selected>Seleccione una opcion</option>
                            <option value="8:00">8:00 am</option>
                            <option value="9:00">9:00 am</option>
                            <option value="10:00">10:00 am</option>
                            <option value="11:00">11:00 am</option>
                            <option value="12:00">12:00 pm</option>
                            <option value="13:00">1:00 pm</option>
                            <option value="14:00">2:00 pm</option>
                            <option value="15:00">3:00 pm</option>
                            <option value="16:00">4:00 pm</option>
                            <option value="17:00">5:00 pm</option>
                            <option value="18:00">6:00 pm</option>
                        </select>
                        <label for="entrada" style="margin-left: 10px;">Hora de entrada</label>
                    </div>

                    <div class="col-12 form-floating mb-3" id="salidadiv">
                        <select class="form-select" id="salida" name="salida" required>
                            <option disabled selected>Seleccione una opcion</option>
                            <option value="9:00">9:00 am</option>
                            <option value="10:00">10:00 am</option>
                            <option value="11:00">11:00 am</option>
                            <option value="12:00">12:00 pm</option>
                            <option value="13:00">1:00 pm</option>
                            <option value="14:00">2:00 pm</option>
                            <option value="15:00">3:00 pm</option>
                            <option value="16:00">4:00 pm</option>
                            <option value="17:00">5:00 pm</option>
                            <option value="18:00">6:00 pm</option>
                            <option value="19:00">7:00 pm</option>
                        </select>
                        <label for="salida" style="margin-left: 10px;">Hora de salida</label>
                    </div>

                    <div class="col-5 form-floating mb-3">
                        <input type="text" id="horas" class="form-control" placeholder="Selecciona el día" name="horas" value="" readonly>
                        <label for="horas" style="margin-left: 10px;">Numero de horas agendadas</label>
                    </div>

                    <div class="col-7 form-floating mb-3">
                        <input type="text" id="costo" class="form-control" placeholder="Costo del servicio" name="costo" value="" readonly>
                        <label for="costo" style="margin-left: 10px;">Costo del servicio</label>
                    </div>

                    <div class="col-12 form-floating">
                        <input type="email" id="email" class="form-control" placeholder="Correo electronico" name="email" required>
                        <label for="email" style="margin-left: 10px;">Correo electronico</label>
                        <p style="font-size: 13px;" class="mt-3">*Asegurate de escribir bien tu correo electronico ya que ahí recibiras la información sobre tu cita</p>
                    </div>
                    <div class="col-12"><button class="btn btn-primary" type="submit" name="save">Agendar</button></div>
                </form>
            </div>
        </div>
    </div>

    <?php include('redes.php'); ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        AOS.init();
        $(function() {
            $("#datepicker").datepicker({
                beforeShowDay: function(date) {
                    var day = date.getDay();
                    return [(day !== 0), '']; // Deshabilitar domingos (0: domingo)
                },
                dateFormat: 'yy-mm-dd' // Formato de la fecha
            });

            // Ocultar los campos de horas y costo al principio
            $("#salidadiv").hide();

            $("select[name='entrada']").on("change", function(){
                $("#salidadiv").show();
            });

            $("#horas, #costo").hide();

            $("select[name='salida']").on("change", function() {
                // Mostrar los campos de horas y costo al seleccionar una opción del select salida
                $("#horas, #costo").show();
                
                var horaEntrada = $("select[name='entrada']").val();
                var horaSalida = $("select[name='salida']").val();

                var diff = (new Date("1970-01-01 " + horaSalida) - new Date("1970-01-01 " + horaEntrada)) / 1000 / 60;
                var horas = diff / 60;

                $("#horas").val(horas);

                var costo = 0;

                if (horas <= 7) {
                    costo = 170;
                } else if (horas === 8) {
                    costo = 190;
                } else if (horas === 9) {
                    costo = 220;
                } else if (horas === 10) {
                    costo = 260;
                } else if (horas === 11) {
                    costo = 290;
                }

                $("#costo").val("$" + costo);
            });
        });
    </script>
    </script>
</body>
</html>