<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <?php include 'componentes/referencias.php' ?>
    <title>Evaluacion</title>
  </head>
  <body class="bg-frame4">
<!--NAVBAR-->
<?php include 'componentes/navbar.php' ?>
<!--ENDNAVBAR-->

<div class="navbar justify-content-center text-negrita-2 py-5">Casos tratados</div>

<!--acordeon-->
<div class="container mt-3">
  <div id="accordion">
    <div class="card my-4">
      <div class="card-header">
        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
        Dedo necrófito infectado
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
        <div class="card-body">
          <div class="row">
              <div class="col-md-8">
                  <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="/img/la.jpg" alt="Los Angeles" class="img-radius d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="/img/chicago.jpg" alt="Chicago" class="img-radius d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="/img/ny.jpg" alt="New York" class="img-radius d-block" style="width:100%">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>
              </div>
              <div class="navbar col-md-4">
                <div>
                  <div>Mujer de 65 años</div>
                  <div>Diabetes de 20 años</div>
                  <div>Diagnóstico : Osteomielitis</div>
                  <div>Tratamiento: Retiro óseo distal</div>
                  <div>Tiempo de cierre : 25 días.</div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card my-4">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
        Primer ortejo: Osteomielitis
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card my-4">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
          Collapsible Group Item #3
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
  </div>
</div>

<!--iconWhatsapp-->
<?php include 'componentes/iconWhatsapp.php' ?>
  <!--Footer-->
  <?php include 'componentes/footer.php' ?>


  </body>
</html>