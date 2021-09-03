<?php
include("plantillas/header.php");
?>
<?php
include("plantillas/dashboard.php");
?>

<div class="">
  <!--carrusel-->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="overlay-image" style="background-image:url(imagenes/redes-sociales.png);"></div>
        <div class="carousel-caption d-none d-md-block">
          <h5>Básico</h5>
          <p>Creación de redes sociales</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="overlay-image" style="background-image:url(imagenes/bot-2.jpg);"></div>
        <div class="carousel-caption d-none d-md-block">
          <h5>Stándar</h5>
          <p>Creación de redes sociales/ Configuración de bots</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="overlay-image" style="background-image:url(imagenes/administracion.jpg);"></div>
        <div class="carousel-caption d-none d-md-block">
          <h5>Premiun</h5>
          <p>Creación de redes sociales/ Configuración de bots/ Administración de redes sociales</p>
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

  <!--contenido-->
  <div class="container" id="contenido">
    <br>
    <div class="row">
      <div class="col-12">
        <div class="card mb-3" style="max-width: 1000px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="imagenes/nosotros.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Nosotros</h5>
                <p class="card-text">Nuestro equipo está conformado por un grupo de personas que ponen todos sus conocimientos, habilidades y experiencia en un sólo objetivo: ser parte del éxito de tu empresa. ¡Somos SAFdigital! Un equipo de especialistas en diferentes disciplinas que busca llevar tu negocio digital a un camino de éxito progresivo</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card mb-3 ms-auto" style="max-width: 1000px;">
          <div class="row g-0">
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Misión</h5>
                <p class="card-text">Ofrecer a nuestros clientes estrategias y soluciones digitales que puedan solventar sus necesidades actuales y, sobre todo, los impulse a manejar de la mejor manera los posibles problemas que se presenten en el futuro a nivel tanto comunicacional como publicitario.</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
            <div class="col-md-4">
              <img src="imagenes/mision.png" class="img-fluid rounded-start" id="" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card mb-3" style="max-width: 1000px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="imagenes/vision.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">visión</h5>
                <p class="card-text">Contamos con un gran grupo de profesionales altamente preparados para crear, repentizar, adaptar y desarrollar diferentes campañas y proyectos creativos, siempre garantizando la satisfacción de cada uno de nuestros clientes</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php
include("plantillas/footer.php");
?>