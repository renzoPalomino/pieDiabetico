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
    
    <div class="tarjeta border col-md-5">
      <div class="p-5">El 
          <span class="text-negrita">éxito</span> en el 
          <span class="text-negrita">tratamiento</span>  del pie diabético depende de realizar un buen 
          <span class="text-negrita">diagnóstico</span> </div>
    </div>
    <div class="col-md-7"></div>
    </div>
    </div>

<!--Info-->
<div class=" bg-frame4">
  <div class="row container mx-auto py-5">
<!--menuVertical-->
<div class="col-md-4 my-auto border-end border-5">
  <ul class="nav nav-pills flex-column" role="tablist">
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
  <div class="col-md-8">
  <div class="tab-content">
    <div id="menu1" class="container tab-pane active"><br>
      <img src="/img/evaluacion/clinico.png" class="img-radius d-block img-size1 border border-success border-5 mb-3">  
      <h3 class="text-center">Examen Clínico</h3>
      <p  class="text-center">Pulsos-hidratacion, Presencia de vellos, temperatura, llenado capilar</p>
    </div>

    <div id="menu2" class="container tab-pane fade"><br>
      <img src="/img/evaluacion/vascular.png" class="img-radius d-block img-size1 border border-success border-5 mb-3">  
      <h3 class="text-center">Examen Vascular</h3>
    </div>

    <div id="menu3" class="container tab-pane fade"><br>
      <img src="/img/evaluacion/termografia.png" class="img-radius d-block img-size1 border border-success border-5 mb-3">  
      <h3 class="text-center">Examen Termografia</h3>
      <p  class="text-center">Evidencia cientifica de presencia o disminucion de irrigacion de los pies</p>
    </div>

    <div id="menu4" class="container tab-pane fade"><br>
      <img src="/img/evaluacion/neuro.png" class="img-radius d-block img-size1 border border-success border-5 mb-3">  
      <h3 class="text-center">Examen Neurológico</h3>
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