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
            <h1 class="mb-2">Servicio de Asesoría Legal Inmobiliaria</h1>
          </div>
        </div>
      </div>
    </div>
    <main class="main-services">
      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
              <img src="images/service_advisor.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 ml-auto" data-aos="fade-up" data-aos-delay="200">
              <p class="lead">En nuestra agencia de arrendamiento, ofrecemos un servicio integral de <b>asesoría legal inmobiliaria,</b> diseñado para brindar apoyo profesional y especializado en todos los aspectos legales relacionados con el alquiler, compra, venta y gestión de propiedades. Sabemos que los temas legales pueden ser complejos y confusos, por lo que nuestro equipo de abogados expertos está aquí para asegurarse de que todos los procesos sean claros, seguros y cumplan con la normativa vigente.</p>
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
                  <li><b>Redacción y revisión de contratos de arrendamiento: </b>Nos encargamos de la elaboración, revisión y actualización de contratos de arrendamiento, asegurándonos de que se ajusten a la legislación vigente y protejan los derechos tanto del arrendador como del arrendatario.</li>

                  <li><b>Asesoría en compra y venta de propiedades: </b>Brindamos asesoría legal en todas las fases de las transacciones inmobiliarias, desde la negociación hasta la firma del contrato de compraventa, garantizando que todos los documentos sean legales, claros y estén correctamente estructurados.</li>

                  <li><b>Resolución de conflictos: </b>Ayudamos a resolver disputas entre arrendadores e inquilinos, ya sea por pagos pendientes, problemas con el mantenimiento de la propiedad o cualquier otra cuestión relacionada. Nuestra meta es llegar a soluciones rápidas y justas para ambas partes.</li>

                  <li><b>Asesoría en desahucios: </b>En situaciones en las que sea necesario iniciar un proceso de desahucio, ofrecemos asesoría legal completa, asegurándonos de que se sigan todos los procedimientos legales correspondientes y protegiendo los derechos de nuestros clientes en todo momento.</li>

                  <li><b>Cumplimiento normativo y fiscal: </b>Te ayudamos a cumplir con las normativas locales, fiscales y de propiedad que son aplicables al arrendamiento de bienes raíces, asegurando que todas las obligaciones legales sean respetadas, evitando problemas futuros con las autoridades.</li>

                  <li><b>Asesoría sobre derechos y obligaciones: </b>Brindamos orientación continua sobre los derechos y responsabilidades de las partes involucradas en el arrendamiento o compra-venta, para evitar malentendidos y asegurar una relación clara y respetuosa entre arrendadores e inquilinos.</li>

                  <li><b>Trámites y documentación legal: </b>Nos encargamos de la gestión de trámites legales necesarios, como la inscripción de contratos en el registro público, pagos de impuestos relacionados con el arrendamiento, y cualquier otro trámite que sea necesario para que tu propiedad esté completamente legalizada.</li>
                </lu>
                <br>
                <h3>¿Por qué elegirnos?</h3>
                <lu>
                  <li><b>Expertos en derecho inmobiliario: </b>Nuestro equipo de abogados cuenta con amplia experiencia en derecho inmobiliario, lo que nos permite ofrecer soluciones precisas y efectivas para todas las situaciones legales relacionadas con bienes raíces.</li>

                  <li><b>Asesoría personalizada: </b>Entendemos que cada situación es única, por lo que ofrecemos un servicio personalizado, adaptado a las necesidades específicas de cada cliente, ya sea propietario, inquilino o comprador.</li>

                  <li><b>Confianza y transparencia: </b>Nos comprometemos a brindarte un servicio transparente y ético, siempre con el objetivo de proteger tus intereses y resolver cualquier duda o preocupación legal que puedas tener.</li>

                  <li><b>Soluciones rápidas y eficientes: </b>Nuestra meta es que el proceso legal sea lo menos complicado posible, por lo que trabajamos para brindarte soluciones ágiles, sin demoras innecesarias.</li>
                </lu>
                <br>
                <p><b>Si necesitas asesoría legal para gestionar el arrendamiento de tu propiedad, resolver un conflicto, o simplemente garantizar que todos los aspectos legales de tu transacción inmobiliaria estén en orden, no dudes en ponerte en contacto con nosotros. Estamos aquí para ayudarte a tomar decisiones informadas y seguras.</b></p>
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
                  <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">¿Se requiere seguro para arrendar una propiedad?<span class="icon"></span></a>
                </h3>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>No, La Inmobiliaria se encarga de gestionar el seguro de arrendamiento para todos los inmuebles que administra.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">¿Puedo cambiar la cerradura de la propiedad?<span class="icon"></span></a>
                </h3>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>No puedes cambiar la cerradura sin permiso del arrendador. Si es necesario por razones de seguridad, debes informarlo por escrito. Lo que sí está permitido es cambiar las claves de las cerraduras principales por motivos de seguridad.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">¿El arrendador puede subir el precio de la renta durante el contrato?<span class="icon"></span></a>
                </h3>
                <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Los contratos de arrendamiento tienen incrementos anuales de acuerdo con la ley 820 de 2003. O sea, el incremento se hace cada que el contrato cumpla un año, el monto del incremento es el autorizado por el gobierno que normalmente es el IPC (Índice de precios al Consumidor) del año inmediatamente anterior.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">¿Qué sucede si no se realiza un inventario de la propiedad al inicio del arrendamiento?<span class="icon"></span></a>
                </h3>
                <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>El inventario inicial es un requisito indispensable para entregar un inmueble ya que este valida el estado del inmueble que se está entregando y es la guía para entregar el inmueble a la inmobiliaria cuando el contrato se termine.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive">¿Qué sucede si tengo una disputa con el arrendador?<span class="icon"></span></a>
                </h3>
                <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>En caso de una disputa, lo mejor es tratar de resolverla de manera amigable. Si no es posible, puedes recurrir a los mecanismos legales o de mediación que estén establecidos en tu contrato o por la ley, Personería, secretaría de Gobierno o Centros de conciliación de las administraciones locales.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">¿Qué debo hacer si la propiedad tiene plagas o insectos?<span class="icon"></span></a>
                </h3>
                <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Debes informar al arrendador de inmediato. El arrendador es responsable de contratar servicios de exterminio, a menos que el problema haya sido causado por el inquilino.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseSeven">¿Cómo puedo renovar mi contrato de arrendamiento?<span class="icon"></span></a>
                </h3>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>El contrato se renueva automáticamente salvo cuando el inquilino manifiesta la intención de no renovación que debe ser enviada por escrito a la inmobiliaria con tres meses de anticipación según la exige la ley 820 de 2003.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseEigth" role="button" aria-expanded="false" aria-controls="collapseEigth">¿Cómo puedo cancelar el contrato si me mudo antes de tiempo?<span class="icon"></span></a>
                </h3>
                <div id="collapseEigth" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Para cancelar el contrato antes de tiempo, debes informar al arrendador con el tiempo estipulado en el contrato (3 meses de anticipación), pagar la penalidad (Tres cánones mensuales), servicios públicos al día y se debe agendar cita para realizar el inventario de entrega.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseNine" role="button" aria-expanded="false" aria-controls="collapseNine">¿Cómo se calcula el aumento en la renta al renovar el contrato?<span class="icon"></span></a>
                </h3>
                <div id="collapseNine" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>El IPC (Índice de precios del Consumidor) es la herramienta definida por ley para los incrementos del canon de arrendamiento, salvo cuando se trata de locales comerciales que regularmente se pacta cada año.</p>
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

  <?php include './controllers/scripts.php' ?>

</body>

</html>
