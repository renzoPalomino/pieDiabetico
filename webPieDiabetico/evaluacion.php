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
  <body>
<!--NAVBAR-->
<?php include 'componentes/navbar.php' ?>
<!--ENDNAVBAR-->

  <!--MENSAJE 1-->
    <div class="mensaje1 container my-5 pt-5">
    <div class="row">
    
    <div class="tarjeta border col-md">
      <div class="p-5">El 
          <span class="text-negrita">éxito</span> en el 
          <span class="text-negrita">tratamiento</span>  del pie diabético depende de realizar un buen 
          <span class="text-negrita">diagnóstico</span> </div>
    </div>
    <!--div class="col-md-7"></div-->
    </div>
    </div>

<!--Info-->
<div class=" bg-frame4">
  <div class="row container mx-auto py-5">
<!--menuVertical-->
<div class="col-md-12 my-auto">
  <ul class="nav nav-pills justify-content-around" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="pill" href="#menu1">Examen Clínico</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="pill" href="#menu2">Examen Vascular</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="pill" href="#menu3">Examen Termografia </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="pill" href="#menu4">Examen Neurológico</a>
    </li>
  </ul>
  </div>

<!--Contenido-->
  <div class="col-md-12">
  <div class="tab-content">
<div id="menu1" class="container tab-pane active"><br>
  <div class="row">
  <div class="navbar justify-content-center col-md-5">
                  <div>
                    <h3>Evaluación Clínica</h3>
                    <div>Donde se evalúa detalladamente las características del pie:</div>
                    <div>
                      <ul>
                        <li>Temperatura - color - hidratación</li>
                        <li>Deformidades de los dedos</li>
                        <li>Zonas con hiperqueratosis (callos)</li>
                        <li>Descartar hongos -  Uñas</li>
                        <li>Presencia de lesiones   - Pulsos</li>
                        <li>Descartar pie de Charcot</li>
                      </ul>
                    </div>
                  </div>
      </div>
  <div class="col-md-6">
          <!-- Carousel -->
    <div id="demo1" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo1" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo1" data-bs-slide-to="1"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="/img/evaluacion/exCli1.png" class="img-radius d-block img-size1">
      </div>
      <div class="carousel-item ">
        <img src="/img/evaluacion/exCli2.png" class="img-radius d-block img-size1">
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo1" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo1" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
    </div>
                  </div>
      
    </div>
    </div>
        
          

<div id="menu2" class="container tab-pane fade"><br>
  <div class="row">
  <div class="navbar justify-content-center col-md-5">
                  <div>
                    <h3>Evaluación Vascular</h3>
                    <div>Se realizan el examen de los pies con el <strong>DOPPLER</strong> arterial, el cual nos ayuda a determinar el grado de irrigación que llega a la parte distal del pie.</div><br>
                    <div>El Doppler se realiza en arterias de la Ingle, parte posterior de la rodilla (poplítea) y del pie.</div>
                  </div>
      </div>
  <div class="col-md-6">
          <!-- Carousel -->
    <div id="demo2" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="/img/evaluacion/exVas1.png" class="img-radius d-block img-size1">
      </div>
      <div class="carousel-item">
        <img src="/img/evaluacion/exVas2.png" class="img-radius d-block img-size1">
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
    </div>
                  </div>
      
    </div>
    </div>

<div id="menu3" class="container tab-pane fade"><br>
  <div class="row">
  <div class="navbar justify-content-center col-md-6">
    <div>
                    <h3>Evaluación Termográfica</h3>
                    <div>El examen que permite detectar la luz infrarroja emitida por los pies, donde muestra los cambios relacionados con la temperatura cuando hay variación en la cantidad de sangre que irriga los pies.</div>
                  </div>
    </div>
  <div class="col-md-6">
          <!-- Carousel -->
    <div id="demo3" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo3" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo3" data-bs-slide-to="1"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="/img/evaluacion/exTer1.png" class="img-radius d-block img-size1">
      </div>
      <div class="carousel-item">
        <img src="/img/evaluacion/exTer2.png" class="img-radius d-block img-size1">
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo3" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo3" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
    </div>
                  </div>
      
    </div>
    </div>


<div id="menu4" class="container tab-pane fade"><br>
  <div class="row">
  <div class="navbar justify-content-center col-md-6">
                  <div>
                    <h3>Evaluación Neurológico</h3>
                    <div>Para identificar la disminución o pérdida de la sensibilidad del dolor, vibración o temperatura.
 La disminución de la sensibilidad del dolor es la causa principal de no poder percibir una herida
 ocasionada por un traumatismo leve y ser el inicio de una herida que puede evolucionar hasta
  llegar a una amputación del pie.</div>
                  </div>
      </div>
  <div class="col-md-6">
      <img src="/img/evaluacion/neuro.png" class="img-radius d-block img-size1">
    </div>

    </div>
    </div>
</div>
</div>
</div>
</div>
 
    <!--iconWhatsapp-->
<?php include 'componentes/iconWhatsapp.php' ?>
  <!--Footer-->
  <?php include 'componentes/footer.php' ?>

  <script>
    ScrollReveal().reveal('.mensaje1', { delay: 500 });
	</script>
  </body>
</html>