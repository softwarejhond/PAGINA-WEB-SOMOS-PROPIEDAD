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
      <?php
      include './controllers/questions.php';
      include './controllers/footer.php';
      ?>

  </div>

  <?php include './controllers/scripts.php' ?>

</body>

</html>