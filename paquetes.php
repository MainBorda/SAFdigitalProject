<?php
include("plantillas/header.php");
?>
<?php
include("plantillas/dashboard.php");
?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">PAQUETES</h1>
      <p class="fs-5 text-muted">En SAFdigital te ofrecemos los mejores servicios , estos son los paquetes que te podemos brindar.
!Recuerda: "Una buena inversión en tu negocio hace la diferencia con la competencia....."¡</p>
    </div>
  </header>


    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3 text-white bg-success border-primary">
            <h4 class="my-0 fw-normal">Básico</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">S/15<small class="text-muted fw-light">/mes.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Creación de Redes Sociales</li>
			  <li>Publicidad</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-dark">Adquirir Paquete</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3 text-white bg-info border-primary">
            <h4 class="my-0 fw-normal">Estándar</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">S/30<small class="text-muted fw-light">/mes.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Creación de Redes Sociales</li>
			  <li>Publicidad</li>
              <li>Configuración de Bots</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-dark">Adquirir Paquete</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm ">
          <div class="card-header py-3 text-white bg-warning border-primary">
            <h4 class="my-0 fw-normal">Premiun</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">S/50<small class="text-muted fw-light">/mes.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Creación de Redes Sociales</li>
			  <li>Publicidad</li>
              <li>Configuración de Bots</li>
              <li>Administración de Redes Sociales</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-dark">Adquirir Paquete</button>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4">Compración De Planes</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Básico</th>
            <th style="width: 22%;">Estándar</th>
            <th style="width: 22%;">Premiun</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Creación de Redes Sociales</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Publicidad</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
			
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Configuración de Bots</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
		</tbody>
		<tbody>
          <tr>
            <th scope="row" class="text-start">Administración de Redes Sociales</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>
      </table>
    </div>



</div>

<?php
include("plantillas/footer.php");
?>
