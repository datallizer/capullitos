<link rel="stylesheet" href="css/formulario.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

<form id="formulario" class="formulario">
             <div class="box-input">
             <input name="nombre" id="nombre" type="text" autocomplete="off" required>
             <span data-placeholder="Nombre"></span>
             </div>
             <div class="box-input">
             <input name="phon" id="phon" type="text" autocomplete="off" required>
             <span data-placeholder="Teléfono de contacto"></span>
             </div>
             <div class="box-input">
             <input name="detales" id="detales" type="text" autocomplete="off" required>
             <span data-placeholder="Detalles"></span>
             </div>
             <button style="width: 100%;" id="submit" type="submit" class="boton"><i class="wa fa fa-whatsapp"></i> Enviar whatspp</button>
             </form>

             <script type="text/javascript">
    $(".box-input input").on("focus", function() {
      $(this).addClass("focus");
    });

    $(".box-input input").on("blur", function() {
      if ($(this).val() == "") {
        $(this).removeClass("focus");
      }
    });

 
  </script>

