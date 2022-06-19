
  <!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-light">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Mantente conectado con nosotros a traves de nuestras redes sociales:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        


        <!-- Grid column -->
        <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Mapa del sitio
          </h6>
          <p>
            <a href="./index.php" class="text-reset">Inicio</a>
          </p>
          <p>
            <a href="./evaluacion.php" class="text-reset">Evaluacion</a>
          </p>
          <p>
            <a href="./tratamiento.php" class="text-reset">Tratamiento</a>
          </p>
          <p>
            <a href="./casostratados.php" class="text-reset">Casos Tratados</a>
          </p>
          <p>
            <a href="./especialista.php" class="text-reset">Especialista</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contacto
          </h6>
          <p><i class="fas fa-home me-3"></i>Av. Arnaldo Márquez 2264, Jesús María</p>
          <p><i class="fas fa-phone me-3"></i> 01-4624248</p>
          <p><i class="fas fa-phone me-3"></i> 940-959-522</p>

          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Servicios
          </h6>
          <p><i class="fas fa-laptop me-3"></i>Telemedicina a nivel nacional</p>

          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            UBICACIÓN
          </h6>
          <!--Google map-->
          <div id="map-container-google-1" class="z-depth-1-half map-container" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3901.429819641009!2d-77.057!3d-12.0827!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c901dd1a675d%3A0x73633e555a7034d9!2sConsultorio%20Especializado%20de%20Pie%20Diabetico%20en%20Per%C3%BA%20%3A%20Vida%20Diab%C3%A9tica%20%2F%20Diabepie!5e0!3m2!1ses!2spe!4v1655512279606!5m2!1ses!2spe" class="mapa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!--Google Maps-->
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
  <img src="../img/logo_PD2.png" class="me-3" style="width: 50px;"> 
    <a class="text-reset fw-bold" href="./inicio.php">Pie diabetico</a>
    <button onclick="showMsj()" data-bs-toggle="modal" data-bs-target="#myModalM" id="btnOM" style="width:0px; height:0px; visibility: hidden;"></button>
        
        
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<div class="modal" id="myModalM">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal1 Header -->
                <div class="modal-header">
                    <h3 class="modal-title">Información importante</h3>
                    <button id="btnCM" type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal1 body -->
                <div class="modal-body text-center">
                <span class="iconify my-4" data-icon="carbon:information-filled" style="color: #699bf7; font-size: 150px;"></span>
                <h5 id="msjM"></h5>
                </div>

                </div>
            </div>
        </div>