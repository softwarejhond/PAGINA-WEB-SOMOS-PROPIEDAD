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
            <h1 class="mb-2">Servicio de Avalúo de Propiedad Raíz</h1>
          </div>
        </div>
      </div>
    </div>
    <main class="main-services">
      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
              <img src="images/service_value.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 ml-auto" data-aos="fade-up" data-aos-delay="200">
              <!-- <div class="site-section-title">
              <h2>Servicio de Avalúo de Propiedad Raíz</h2>
            </div> -->
              <p class="lead">En Somos Propiedad agencia de arrendamiento, ofrecemos un servicio especializado de <b>avalúo de propiedad raíz,</b> diseñado para proporcionar a nuestros clientes una valoración precisa y confiable de sus bienes inmuebles. Ya sea que estés interesado en vender, comprar, arrendar o simplemente conocer el valor actual de tu propiedad, nuestros expertos en tasación te brindarán una evaluación profesional basada en los estándares más altos del mercado.</p>
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
                  <li><b>Avalúo comercial: </b>Realizamos un análisis detallado del mercado inmobiliario y de la propiedad en cuestión, teniendo en cuenta factores como la ubicación, tamaño, antigüedad, estado de conservación, y comparables en el mercado para determinar el valor justo de la propiedad.</li>

                  <li><b>Avalúo para fines de arrendamiento: </b>Si eres propietario de una propiedad y deseas arrendarla, nuestro servicio de avalúo te ayudará a establecer un precio competitivo y justo para la renta, teniendo en cuenta la oferta y demanda del mercado, además de las características específicas de la propiedad.</li>

                  <li><b>Avalúo para compra y venta: </b>Si estás interesado en comprar o vender una propiedad, nuestro servicio de avalúo te proporcionará una valoración precisa que te permitirá tomar decisiones informadas y negociar en condiciones favorables.</li>

                  <li><b>Avalúo para seguros: </b>Ofrecemos avalúos para la contratación de seguros de propiedad, asegurando que el valor asegurado sea acorde al valor real de la propiedad y sus bienes.</li>

                  <li><b>Informe detallado: </b>Tras realizar el avalúo, entregamos un informe completo y detallado que incluye los datos utilizados para la valoración, la metodología aplicada y las recomendaciones según el caso.</li>

                  <li><b>Asesoría profesional: </b>Nuestros expertos en tasación no solo realizan el avalúo, sino que también te ofrecen asesoría sobre cómo mejorar el valor de tu propiedad o estrategias para maximizar tus ingresos de arrendamiento o venta.</li>
                </lu>
                <br>
                <h3>¿Por qué elegirnos?</h3>
                <lu>
                  <li><b>Experiencia y profesionalismo: </b>Contamos con un equipo altamente capacitado en la tasación de bienes inmuebles y un profundo conocimiento del mercado local.</li>

                  <li><b>Métodos actualizados: </b>Utilizamos metodologías y herramientas actualizadas para garantizar una valoración precisa y acorde con las condiciones actuales del mercado.</li>

                  <li><b>Transparencia y confiabilidad: </b>Todos nuestros avalúos están basados en un análisis objetivo y respaldados por estándares profesionales, garantizando transparencia en todo el proceso.</li>

                  <li><b>Servicios integrales: </b>Además del avalúo, ofrecemos asesoría completa en temas relacionados con la compra, venta, arrendamiento y mantenimiento de propiedades.</li>
                </lu>
                <br>
                <p><b>Si necesitas conocer el valor exacto de tu propiedad o realizar una valoración antes de un arrendamiento, compra o venta, no dudes en contactarnos. Nuestro equipo está listo para ofrecerte un avalúo confiable y detallado que te ayude a tomar decisiones informadas y seguras.</b></p>
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