<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include './controllers/conexion.php';
  include './controllers/head.php';
  ?>

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

    <?php include './controllers/navBar.php' ?>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/banner.png);" data-aos="fade" data-stellar-background-ratio="0.2">
        <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Servicio de Arrendamiento de Propiedad</h1>
          </div>
        </div>
      </div>
    </div>
    <main class="main-services">
      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
              <img src="images/service_rent.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 ml-auto" data-aos="fade-up" data-aos-delay="200">
              <p class="lead">En Somos Propiedad agencia de arrendamiento, ofrecemos un servicio especializado para aquellos que buscan alquilar propiedades, ya sea para vivienda o para fines comerciales. Nos encargamos de gestionar todo el proceso de arrendamiento, desde la búsqueda del inmueble ideal hasta la firma del contrato, brindando soluciones personalizadas tanto a arrendadores como a arrendatarios.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section pt-0">
        <div class="container">
          <div class="row mb-5 justify-content-center" data-aos="fade-up">
            <div class="col-md-8">
              <div class="site-section-title text-justify">
                <h3>¿Qué ofrecemos?</h3>
                <lu>
                  <li><b>Asesoramiento personalizado: </b>Escuchamos tus necesidades y preferencias para encontrar la propiedad que más se ajuste a tu estilo de vida, presupuesto y ubicación deseada, ya sea un departamento, casa o local comercial.</li>

                  <li><b>Selección de propiedades: </b>Contamos con una amplia cartera de propiedades en distintas zonas, con opciones tanto para alquiler a corto como a largo plazo. Nos aseguramos de que cada propiedad esté en excelentes condiciones y cumpla con los requisitos legales y de seguridad.</li>

                  <li><b>Gestión de contratos de arrendamiento: </b>Elaboramos contratos claros, detallados y ajustados a la ley, asegurando tanto a propietarios como inquilinos que todos los aspectos legales y administrativos estén cubiertos, incluyendo cláusulas de pago, mantenimiento y derechos y responsabilidades de ambas partes.</li>

                  <li><b>Revisión y asesoría legal: </b>Brindamos asesoría para la revisión de documentos legales, asegurándonos de que todos los acuerdos estén correctamente firmados y sin posibles inconvenientes en el futuro.</li>

                  <li><b>Gestión de pagos y cobros: </b>Nos encargamos de la administración de pagos de renta, así como de la cobranza, para asegurar que los arrendadores reciban puntualmente los pagos y que los arrendatarios tengan claridad en los términos acordados.</li>

                  <li><b>Mantenimiento y atención continua: </b>Ofrecemos un servicio de atención constante, gestionando las solicitudes de mantenimiento o reparaciones y asegurando que la propiedad esté siempre en óptimas condiciones.</li>

                  <li><b>Seguridad y confianza: </b>Priorizamos la seguridad de las transacciones, tanto para propietarios como para inquilinos, con la garantía de que todos los procesos se llevan a cabo de forma transparente, justa y segura.</li>
                </lu>
                <br>
                <h3>¿Por qué elegirnos?</h3>
                <lu>
                  <li><b>Experiencia y conocimiento del mercado: </b>Contamos con años de experiencia en el sector de arrendamientos, con un equipo de profesionales capacitados para ofrecer el mejor servicio.</li>

                  <li><b>Variedad de opciones: </b>Tenemos una amplia gama de propiedades disponibles para alquilar, tanto para uso residencial como comercial.</li>

                  <li><b>Atención personalizada: </b>Nos encargamos de hacer que todo el proceso de arrendamiento sea sencillo y cómodo para nuestros clientes, con una atención personalizada en cada paso.</li>

                  <li><b>Compromiso y transparencia: </b>Trabajamos con el compromiso de ofrecer un servicio transparente y eficiente, asegurando la satisfacción tanto de arrendadores como de arrendatarios.</li>
                </lu>
                <br>
                <p><b>Si estás buscando arrendar una propiedad o deseas poner tu propiedad en alquiler, no dudes en contactarnos. Nuestro equipo está listo para ayudarte a encontrar la mejor solución para tus necesidades.</b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
</main>
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
                  <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">¿Qué documentos necesito para arrendar una propiedad?<span class="icon"></span></a>
                </h3>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Necesitas una identificación oficial, (cédula de ciudadanía), Tener ingresos por el doble del valor del canon, presentar un Codeudor que tenga ingresos por el doble del valor del canon y gestionar el formato de estudio de crédito con la aseguradora.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">¿Cómo se realiza el pago de la renta?<span class="icon"></span></a>
                </h3>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>El pago puede hacerse mediante transferencia bancaria, depósito en un corresponsal bancario, con QR o por PSE en la plataforma de pagos incorporada en la página WEB.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">¿Puedo tener mascotas en la propiedad?<span class="icon"></span></a>
                </h3>
                <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Algunos arrendadores permiten mascotas bajo ciertas condiciones, como el pago de un depósito adicional o restricciones en el tipo o tamaño de la mascota.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">¿Puedo subarrendar la propiedad que estoy arrendando?<span class="icon"></span></a>
                </h3>
                <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>El subarrendamiento no está permitido sin la autorización previa del arrendador. Si se permite, podría implicar condiciones adicionales, como la terminación inmediata del contrato.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive">¿Qué sucede si no puedo pagar la renta a tiempo?<span class="icon"></span></a>
                </h3>
                <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Si no puedes pagar a tiempo, debes notificar a la inmobiliaria lo antes posible. Dependiendo del contrato, podría haber cargos por demora o si supera los 30 Días tendrá un reporte a la aseguradora, la cual cobre intereses y honorarios.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">¿Puedo transferir mi contrato de arrendamiento a otra persona?<span class="icon"></span></a>
                </h3>
                <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Para ceder un contrato de arrendamiento a un tercero, se debe hacer el estudio completo con la aseguradora cumpliendo los requisitos que esta demanda.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseSeven">¿Cuál es la duración del contrato de arrendamiento?<span class="icon"></span></a>
                </h3>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>La duración estándar de un contrato de arrendamiento es de 12 meses, aunque también pueden existir contratos de 6 meses o incluso por tiempo indefinido. Se define al momento de firmar el contrato.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseEigth" role="button" aria-expanded="false" aria-controls="collapseEigth">¿Qué debo hacer si la propiedad tiene problemas con la plomería o electricidad?<span class="icon"></span></a>
                </h3>
                <div id="collapseEigth" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Contacta a la agencia o al arrendador lo antes posible para que se resuelvan estos problemas. En la mayoría de los casos, el arrendador es responsable de las reparaciones.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseNine" role="button" aria-expanded="false" aria-controls="collapseNine">¿El contrato de arrendamiento incluye servicios como agua o electricidad?<span class="icon"></span></a>
                </h3>
                <div id="collapseNine" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Cada inquilino debe hacerse cargo del pago de los servicios públicos, estos se deben recibir al día e igual se deben entregar de la misma forma. Pagos hasta el día de entrega del inmueble. Los servicios de telefonía e internet corren por cuenta del inquilino y debe retirar la conexión al finalizar el contrato.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include './controllers/footer.php'; ?>

  </div>

  <?php include './controllers/scripts.php' ?>

</body>

</html>
