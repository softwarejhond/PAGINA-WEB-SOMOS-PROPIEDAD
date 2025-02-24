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
            <h1 class="mb-2">Servicio de Venta de Propiedad Raíz</h1>
          </div>
        </div>
      </div>
    </div>
    <main class="main-services">
      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
              <img src="images/service_sale.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 ml-auto" data-aos="fade-up" data-aos-delay="200">
              <p class="lead">En Somos Propiedad agencia de arrendamiento, no solo nos especializamos en la gestión de alquileres, sino también en la <b>venta de propiedades.</b> Ofrecemos un servicio integral para aquellos interesados en adquirir bienes raíces, ya sea para inversión, residencia o negocio. Nuestro equipo de expertos está capacitado para asesorar a compradores y vendedores a lo largo de todo el proceso, garantizando una experiencia fluida, transparente y sin sorpresas.</p>
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
                  <li><b>Asesoramiento personalizado: </b>Te ayudamos a identificar las propiedades que mejor se ajusten a tus necesidades y presupuesto, ya sea una casa, departamento, local comercial o terreno.</li>

                  <li><b>Valoración de propiedades: </b>Realizamos un análisis detallado del mercado inmobiliario y de la propiedad en cuestión, asegurándonos de que obtengas el mejor precio.</li>

                  <li><b>Gestión de trámites legales y administrativos: </b>Nos encargamos de todo el papeleo, incluyendo la revisión de documentos legales, contratos de compra-venta, pagos de impuestos y otros trámites, asegurando que el proceso sea rápido y seguro.</li>

                  <li><b>Red de contactos: </b>Disponemos de una amplia cartera de propiedades y una red de contactos con otros agentes y propietarios, lo que aumenta las posibilidades de encontrar la propiedad ideal para ti.</li>

                  <li><b>Transparencia y confianza: </b>Trabajamos con total transparencia, proporcionándote toda la información necesaria para que tomes decisiones informadas y seguras.</li>
                </lu>
                <br>
                <h3>¿Por qué elegirnos?</h3>
                <lu>
                  <li><b>Experiencia en el sector: </b>Nuestra agencia cuenta con años de experiencia en el mercado inmobiliario y un equipo profesional altamente capacitado.</li>

                  <li><b>Compromiso con nuestros clientes: </b>Nos enfocamos en tus necesidades y trabajamos para brindarte un servicio que cumpla con tus expectativas.</li>

                  <li><b>Variedad de opciones: </b>Desde propiedades de lujo hasta opciones más accesibles, tenemos una amplia variedad para ofrecerte.</li>
                </lu>
                <br>
                <p><b>Si estás pensando en comprar una propiedad o deseas vender la tuya, no dudes en ponerte en contacto con nosotros. Te asesoraremos en cada paso para garantizar que hagas la mejor inversión.</b></p>
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
