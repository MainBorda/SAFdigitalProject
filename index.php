<?php
include("plantillas/header.php");
?>
<?php
include("plantillas/dashboard.php");
?>
<!-- carrusel -->
<div class="content-fluid">
   <div class="" width="800" height="400"> 
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/redes.jpg" class="d-block w-100" alt="..." width="800" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>Basico</h5>
        <p>Creacion de redes sociales</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/bots.jpg" class="d-block w-100" alt="..." width="800" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>Standar</h5>
        <p>Creacion de redes sociales/ Configuracion de bots</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/administracion.jpg" class="d-block w-100" alt="..." width="800" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>Premiun</h5>
        <p>Creacion de redes sociales/ Configuracion de bots/ Administracion de redes sociales</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>

</div>
<br>
<!-- FIGURAS -->
<div class="container">
    <figure class="figure">
      <img src="imagenes/nosotros.png" class="figure-img img-fluid rounded" alt="..." width="369" >
      <figcaption class="figure-caption">Nosotros</figcaption>
    </figure>
    <figure class="figure">
      <img src="imagenes/mision.png" class="figure-img img-fluid rounded" alt="..." width="369" >
      <figcaption class="figure-caption">Mision</figcaption>
    </figure>
    <figure class="figure">
      <img src="imagenes/vision.jpg" class="figure-img img-fluid rounded" alt="..." width="369" >
      <figcaption class="figure-caption">Vision</figcaption>
    </figure>
    </div>
<?php
include("plantillas/footer.php");
?>