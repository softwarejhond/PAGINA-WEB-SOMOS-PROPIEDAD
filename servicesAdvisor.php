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

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
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

    <?php
    include './controllers/questions.php';
    include './controllers/footer.php';
    ?>

  </div>

  <?php include './controllers/scripts.php' ?>

</body>

</html>