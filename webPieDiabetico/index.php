<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <?php include 'componentes/referencias.php' ?>
    <title>Inicio</title>
</head>
<body>

<div class="ParallaxVideo">
  <video autoplay muted loop>
  <source src="/video/VIDEO-1.mp4" type="video/mp4">
  </video>
</div>

<!--NAVBAR-->
<?php include 'componentes/navbar.php' ?>
<!--ENDNAVBAR-->

<!--video-->
<div class="fullscreen"></div>

<!--mensaje-->
<div class="mensaje navbar fullscreen">
<div class="container mt-5">
  <div class="row">
  <div class="col-md-2"></div>
  <div class="tarjeta border col-md-8">
    <div class="p-5"> 
        <span class="text-negrita">Vida diabética</span> es un consultorio especializado en el  
        <span class="text-negrita">tratamiento</span>  del pie diabético con personal de  
        <span class="text-negrita">larga experiencia</span> </div>
  </div>
  <div class="col-md-2"></div>
  </div>
  </div>
</div>

<!--info-->
<div class="navbar bg-gray">
  <div class="info container my-5 py-5">
  <div class="row navbar">
  <div class="col-md-8">
    <div class="row">
      <div class="col-md-12">
        <span class="text-negrita-2">Consultorio</span>
      </div>
      <div class="col-md-12">
        <span class="text-negrita-2">VIDA DIABETICA</span>
      </div>
      <div class="col-md-12 py-4">
        <div>VIDA DIABÉTICA es un Centro Especializado en tratamiento de pie diabético y heridas complejas. Nuestro objetivo es luchar por tu pies para devolver su función, es decir caminar.</div>
        <div class="py-3">El centro especializado pone a tu disposición tecnología de vanguardia y personal Médico de especialidad y experiencia.</div> 
        <div>Se realiza registros y seguimiento fotográfico de la evolución de la herida. Ofrecemos telemedicina sobre la especialidad de pie diabético a pacientes y otros profesionales de   medicina a nivel nacional</div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <img src="/img/logo_PD2.png" style="width: 100%;">
  </div>
  </div>
  </div>
</div>

<!--mensaje1-->
<div class="navbar bg-verdeoscuro ">
<div class="mensaje1 container my-5 py-5">
  <div class="row">
  
    <div class="tarjeta border col-md-7">
    <div class="p-5">EL 85% DE
        <span class="text-negrita">AMPUTACIONES</span> DE UNA PIERNA PUEDEN  
        <span class="text-negrita">EVITARSE</span>
    </div>
    </div>
    <div class="col-md-5"></div>
  </div>
  </div>

  <!--mensaje2-->
<div class="mensaje2 container my-5">
  <div class="row">
    <div class="col-md-5"></div>
    <div class="tarjeta border col-md-7">
    <div class="p-5"> 
        <span class="text-negrita">CADA 20 SEGUNDOS SE AMPUTA</span> UNA PIERNA EN ALGÚN LUGAR DEL MUNDO 
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
    ScrollReveal().reveal('.info', { delay: 500 });
		ScrollReveal().reveal('.mensaje', { delay: 800 });
    ScrollReveal().reveal('.mensaje1', { delay: 500 });
    ScrollReveal().reveal('.mensaje2', { delay: 500 });
	</script>
</body>
</html>