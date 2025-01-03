<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './controllers/head.php' ?>

</head>

<body>

  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <?php
    include './controllers/navBar.php';
    include './controllers/hero.php';
    include './APIS/cardFilter.php';
    ?>

    <?php include './controllers/chooseUs.php';?>
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>Preguntas Frecuentes</h2>
            </div>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores quisquam saepe architecto error corporis aliquam. Cum ipsam a consectetur aut sunt sint animi, pariatur corporis, eaque, deleniti cupiditate officia.</p> -->
          </div>
        </div>

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">¿Cómo reporto un problema de mantenimiento en la propiedad?<span class="icon"></span></a>
                </h3>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Debes contactar a la inmobiliaria de inmediato. El un número de reparaciones es: 3006662367 o 6044447362 Ext 108 o correo electrónico reparaciones@somospropiedad.com  para estos casos.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">¿Cuál es el monto del depósito de seguridad?<span class="icon"></span></a>
                </h3>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Las inmobiliarias no pueden exigir depósitos de seguridad o fianzas. Existe una figura para facilitar el proceso si no se cumple con los requisitos anteriores que consiste en un depósito equivalente al valor de seis (6) cánones de arrendamiento mensuales. Este monto se devuelve al finalizar el contrato. Se hace con el fin de respaldar el contrato.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">¿Qué pasa si decido terminar el contrato antes de tiempo?<span class="icon"></span></a>
                </h3>
                <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Terminar el contrato antes de su vencimiento sin una justa causa implica una penalización, que equivale a tres cánones de arrendamiento mensual, según lo estipula la ley 820 de 2003.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">¿Puedo cambiar de propiedad dentro de la misma agencia?<span class="icon"></span></a>
                </h3>
                <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Si es posible, solo que se debe hacer un estudio nuevo con la aseguradora por tratarse de un inmueble diferente con condiciones y especificaciones diferentes. Adicional el inquilino debe estar a paz y salvo por todo concepto.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive">¿Puedo hacer modificaciones o renovaciones en la propiedad?<span class="icon"></span></a>
                </h3>
                <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>No puedes hacer modificaciones de ningún tipo sin el permiso previo de la inmobiliaria. Cualquier alteración debe ser reportada y debe ser aprobada por escrito.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">¿Puedo recibir visitas de manera frecuente?<span class="icon"></span></a>
                </h3>
                <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Depende de las condiciones del contrato. Algunos contratos limitan la cantidad de visitas o las condiciones en las que se pueden recibir. Normalmente son aceptadas y son legales las visitas temporales, lo que no se permite es incrementar de manera desmedida el número de ocupantes de forma que supere la capacidad del inmueble ya que esto acelera el deterioro del mismo generando causal de terminación del contrato.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseSeven">¿Qué sucede si la propiedad sufre daños no causados por mí?<span class="icon"></span></a>
                </h3>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>El arrendador es responsable de reparar daños estructurales o problemas no causados por el inquilino. Debes reportarlo inmediatamente.  A estos a este contacto 3006662367 o 6044447362 Ext 108 o correo electrónico reparaciones@somospropiedad.com  para estos casos.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseEigth" role="button" aria-expanded="false" aria-controls="collapseEigth">¿Puedo estacionar mi vehículo en el lugar de la propiedad?<span class="icon"></span></a>
                </h3>
                <div id="collapseEigth" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Esto depende de las condiciones del contrato. Algunas propiedades incluyen parqueaderos, lo que no se permite es ocupar zonas que no pertenezcan a la propiedad arrendada o dejar indefinidamente vehículos en zonas de parqueo de visitantes ya que esto acarrea sanciones de parte de las administraciones de las copropiedades.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseNine" role="button" aria-expanded="false" aria-controls="collapseNine">¿El arrendador puede entrar a la propiedad sin previo aviso?<span class="icon"></span></a>
                </h3>
                <div id="collapseNine" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>No. El arrendador debe notificar al inquilino con antelación antes de entrar a la propiedad, excepto en casos de emergencia.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseTen" role="button" aria-expanded="false" aria-controls="collapseTen">¿El arrendador puede pedir un aumento de renta durante el contrato?<span class="icon"></span></a>
                </h3>
                <div id="collapseTen" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Durante un contrato, el arrendador no puede modificar el valor de la renta. Sin embargo, al renovar el contrato, el arrendador puede aplicar un aumento de acuerdo con lo autorizado por la ley o por acuerdo mutuo entre las partes.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include './controllers/footer.php';?>

  </div>
<!-- Modal -->
<div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-black" id="miModalLabel">Bienvenido</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-black">
      Este sitio web está en proceso de remodelación. Para obtener información sobre nuestra inmobiliaria, no dudes en contactarnos a través de nuestras líneas de WhatsApp ubicadas en la esquina inferior derecha. 
      <br>¡Gracias por tu comprensión!
      </div>
 
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var miModal = new bootstrap.Modal(document.getElementById('miModal'));
    miModal.show();
  });
</script>

  <?php include './controllers/scripts.php' ?>
  <script type="text/javascript" src="js/departamentos_municipios_barrios.js?v=1"></script>
   
</body>

</html>
