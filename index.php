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
    <title>Home | Capullitos</title>
</head>
<body>

<!-- Messenger Plugin de chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "101562632301069");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v15.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<?php include('top.php'); ?>   
<?php include('whatsapp.php'); ?>     

    <div data-aos="zoom-in" class="">
        <div class="container ">
            <div class="row bg-white bgmnpd contbody">
                <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/c1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/c2.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/c3.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>


                <div style="background-color:#77b8db; color:#ffffff;
                border-top:8px solid #9cd3a5;" class="col-12 col-md-3 txtsize">
                    <h2>Qué ofrecemos?</h2>
                    <p>Cuidado infantil de calidad. Donde lo más importante es el desarrollo de tu pequeño en las grandes áreas, emocional, física, motriz, afectiva y social.</p>
                    <a href="equipo.php">Leer más</a>
                </div>

                <div style="background-color:#ffbcbc; color:#ffffff;
                border-top:8px solid #76b8db;" class="col-12 col-md-3 txtsize">
                    <h2>Daycare</h2>
                    <p>Servicio de cuidado por día o por horas. Este servicio es para padres de familia  con la necesidad de tener en un lugar seguro donde dejar a sus hijos cuando sus planes cambian, tiene Consejo Técnico o simplemente necesitan un respiro.</p>
                    <a href="daycare.php">Leer más</a>
                </div>

                <div style="background-color:#9cd3a5; color:#ffffff;
                border-top:8px solid #ff8182;" class="col-12 col-md-3 txtsize">
                    <h2>Estimulación Temprana</h2>
                    <p>Tu pequeño recibirá esta importante herramienta para lograr un desarrollo óptimo desde los primeros meses de vida.</p>
                    <a href="escolarizado.php">Leer más</a>
                </div>

                <div style="background-color:#ff8182; color:#ffffff;
                border-top:8px solid #ffbcbc;" class="col-12 col-md-3 txtsize">
                    <h2>Contacto</h2>
                    <p>informes@estanciacapullitos.com <br>
                        Calle Nuevo Leon #110<br>
                        Fraccionamiento México      <br>                
                        Cp. 20277 Ags, Ags.       <br>                
                        Tel fijo 449 655 9492       <br>    
                        Movil 449 427 3797</p>
                    <a href="contacto.php">Leer más</a>
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