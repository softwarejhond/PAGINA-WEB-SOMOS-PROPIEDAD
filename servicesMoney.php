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
            <h1 class="mb-2">Servicio de Dinero a Interés</h1>
          </div>
        </div>
      </div>
    </div>
    <main class="main-services">
      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
              <img src="images/dinero.png" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 ml-auto" data-aos="fade-up" data-aos-delay="200">
              <p class="lead">En Somos Propiedad agencia de arrendamiento, ofrecemos un servicio de <b>dinero a interés,</b> una solución financiera ideal para aquellos propietarios de bienes raíces o inquilinos que necesiten financiamiento rápido y flexible, garantizando el respaldo de la propiedad. Este servicio permite acceder a capital mediante un préstamo, con un interés acordado, que puede ser utilizado para diversos fines, como mejoras en la propiedad, pago de deudas, inversión en nuevos inmuebles, entre otros.</p>
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
                  <li><b>Préstamos respaldados por propiedad raíz: </b>Ofrecemos financiamiento a propietarios de bienes raíces, donde la propiedad actúa como garantía del préstamo. Esto permite acceder a dinero en efectivo rápidamente, con tasas de interés competitivas y condiciones flexibles.</li>

                  <li><b>Tasas de interés accesibles: </b>Establecemos tasas de interés justas y adaptadas al perfil financiero del solicitante, lo que asegura que el pago de la deuda sea accesible y adecuado a tus necesidades.</li>

                  <li><b>Plazos de pago flexibles: </b>Los plazos para el pago del préstamo son negociables, y buscamos siempre la mejor opción para que el proceso sea conveniente y no represente una carga financiera difícil de manejar.</li>

                  <li><b>Aprobación rápida y sencilla: </b>Nuestro proceso de aprobación es ágil y transparente, con requisitos claros. Evaluamos la propiedad como garantía para asegurar que el monto del préstamo sea adecuado a su valor de mercado.</li>

                  <li><b>Uso de los fondos: </b>El dinero obtenido a través de este servicio puede ser utilizado para diversas finalidades, tales como renovaciones de propiedades, pagos de deudas relacionadas con bienes raíces, o incluso como inversión en nuevas propiedades.</li>

                  <li><b>Asesoría profesional: </b>Nuestros expertos brindan asesoría en cada paso del proceso, ayudándote a entender las mejores opciones para ti, así como los términos y condiciones del préstamo, asegurando que tomes decisiones informadas.</li>
                </lu>
                <br>
                <h3>¿Por qué elegirnos?</h3>
                <lu>
                  <li><b>Experiencia y confianza: </b>Contamos con años de experiencia en el sector inmobiliario y financiero, brindando soluciones de financiamiento personalizadas y seguras.</li>

                  <li><b>Proceso transparente: </b>Nuestra agencia se caracteriza por un proceso claro y transparente, sin costos ocultos, con una comunicación abierta en todo momento.</li>

                  <li><b>Soluciones flexibles: </b>Entendemos que cada cliente tiene necesidades diferentes, por lo que ofrecemos alternativas financieras adaptadas a las circunstancias de cada persona o negocio.</li>

                  <li><b>Acceso rápido a fondos: </b>Gracias a nuestra eficiencia en la evaluación de propiedades y la aprobación de préstamos, podemos ofrecer acceso a fondos en tiempos cortos, lo que te permite actuar rápidamente ante cualquier necesidad financiera.</li>
                </lu>
                <br>
                <p><b>Si necesitas financiamiento y tienes una propiedad como respaldo, nuestro servicio de dinero a interés es la opción perfecta. No dudes en contactarnos para obtener más información y empezar el proceso de financiamiento con las mejores condiciones.</b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php
    include './controllers/footer.php';
    ?>

  </div>

  <?php include './controllers/scripts.php' ?>

</body>

</html>
