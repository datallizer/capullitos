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

  <title>Información | Capullitos</title>
</head>

<body>

  <?php include 'top.php'; ?>

  <div data-aos="zoom-in" class="">
    <div class="container">
      <div class="row justify-content-center contbody">
        <div style="border-radius: 15px;" class="col-12 col-md-6 text-center colform bg-white">
        <h2>INFORMACIÓN</h2>
          <form method="post" class="row formulario" id="formdata">
            <div class="form-floating col-6 espaciado">
              <input name="nombre" id="nombre" type="text" class="form-control" autocomplete="off" placeholder="Nombre" required>
              <label for="nombre" class="form-label">Nombre</label>
            </div>
            <div class="form-floating col-6 espaciado">
              <input name="apellido" id="apellido" type="text" class="form-control" autocomplete="off" placeholder="Apellido" required>
              <label for="apellido" class="form-label">Apellido</label>
            </div>
            <div class="form-floating col-12 espaciado">
              <input name="email" type="email" class="form-control" id="email" placeholder="tucorreo@gmail.com" autocomplete="off" required>
              <label for="email" class="form-label">Email</label>
            </div>
            <div class="form-floating col-12 espaciado">
              <input name="telefono" type="text" class="form-control" id="telefono" placeholder="10 dígitos" autocomplete="off" required>
              <label for="telefono" class="form-label">Teléfono</label>
            </div>
            <div class="form-floating col-md-12 espaciado">
              <select name="paquete" id="paquete" class="form-select" autocomplete="off" required>
                <option disabled selected>Seleccione una opción</option>
                <option>Estancia infantil</option>
                <option>Cuidado por día</option>
                <option>Apoyo SEDESO (Subsidio gobierno)</option>
                <option>Vacantes de empleo</option>
                <option>Ubicación</option>
                <option>Información general</option>
                <option>Otros</option>
              </select>
              <label for="paquete" class="form-label">Opciones</label>
            </div>
            <div style="margin:15px 0px;" class="col-12">
              <!--button type="submit" name="save_mkt" class="btn btn-primary" id="botonenviar">Enviar</button-->
              <input type="hidden" id="save_mkt" name="save_mkt" value="save_mkt">
              <input type="button" id="botonenviar" value="Enviar" class="btn btn-success">
            </div>

          </form>
          <div id="exito" style="display:none">
            Sus datos han sido recibidos con éxito.
          </div>
          <div id="fracaso" style="display:none">
            Se ha producido un error durante el envío de datos.
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'redes.php'; ?>

  <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  <script src="js/whatsinfo.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    AOS.init();



    $(document).ready(function() { // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
      console.log("JQuery");
      $("#botonenviar").click(function() { // Con esto establecemos la acción por defecto de nuestro botón de enviar.
        // if(validaForm(){                               // Primero validará el formulario.
        $.post("codemkt.php", $("#formdata").serialize(), function(res) {
          console.log('res', res);
          // $("#formulario").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
          if (res == "Success") {
            $("#exito").delay(500).fadeIn("slow"); // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
            // ejecuta Wp
            abreWhatsApp()
          } else {
            $("#fracaso").delay(500).fadeIn("slow"); // Si no, lo mismo, pero haremos aparecer el div "fracaso"
          }
        });
        // }
      });
    });
  </script>
</body>

</html>