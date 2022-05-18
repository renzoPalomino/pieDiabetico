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
  <div class="mensaje1 container my-5">
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
  <!--iconWhatsapp-->
<?php include 'componentes/iconWhatsapp.php' ?>
  <!--Footer-->
  <?php include 'componentes/footer.php' ?>

  <script>
    ScrollReveal().reveal('.mensaje1', { delay: 500 });
	</script>
  </body>
</html>