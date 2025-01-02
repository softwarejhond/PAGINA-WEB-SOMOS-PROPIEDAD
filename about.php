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
            <h1 class="mb-2">Acerca de Nosotros</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <img src="images/about.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <div class="site-section-title">
              <h2>Nuestra Empresa</h2>
            </div>
            <p class="lead">Somos propiedad es una empresa perteneciente al gremio inmobiliario que presta todos los servicios que tienen que ver con la renta de propiedades, ventas, asesorías legales, avalúos de propiedades, prestamos de Dinero a Interés y expedición de certificados. Tenemos presencia en el mercado desde 1.991, actualmente nos encontramos asociados con todos los entes de control que vigilan el gremio, entre ellos, La lonja de propiedad raíz de Medellín, Fenalco, La cámara Nacional Inmobiliaria. Dentro de nuestros aliados estratégicos contamos con: El Libertador aseguradora, Cien Cuadras, La lonja, Finca Raíz.com, Fenalco, Datacrédito Experian, Empatía, PSE.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up">
          <div class="col-md-8">
            <div class="site-section-title text-justify">
              <h2>Reseña Histórica</h2>
              <p>SOMOS PROPIESAS S.A.S. Es una empresa inmobiliaria fundada el 23 de abril de 1993 por el señor Jesús María Beltran Arias, está ubicada en el municipio de sabaneta, al sur del área metropolitana, en sus inicios como constructor, el señor Jesús María toma la decisión de fundar la empresa con el objetivo de que esta administrara los proyectos que se desarrollaban en el sector. Para el año de 1.995 se toma la decisión de prestar el servicio de arrendamiento abierto en el municipio de sabaneta consiguiendo así la matrícula de arrendador vigente hasta la fecha. Actualmente la compañía tiene presencia con sus servicios en todo el sur del valle de Aburra. La compañía cuenta con una junta directiva compuesta por tres miembros de la familia Beltran Montoya, la representación legal de la compañía actualmente esta en cabeza de la señora María Nohelia Beltran Montoya. En la actualidad la compañía opera bajo la supervisión de los entes de control, municipal y departamental y cuanta con el apoyo y acompañamiento de los gremios del sector Inmobiliario, Fenalco, La lonja de Propiedad Raíz de Medellín y La cámara nacional inmobiliaria. Como parámetro principal en sus estatutos esta operar bajo estricto cumplimiento de la ley 820 de 2003, que regula el sector inmobiliario.</p>
              <p>Paralelamente para el año 2.000 la Compañía toma la decisión de desarrollar el área de construcciones civiles teniendo como foco principal el municipio de Sabaneta. Inicia con proyectos pequeños y medianos que lo llevan a construir en los siguientes 10 años 32 edificios en el municipio de Sabaneta, para el año 2.009 se desarrolla el proyecto Santivary, compuesto por tres torres con 240 Apartamentos, Posteriormente se desarrolla el proyecto Bombay con dos torres de 44 apartamentos cada una, incursionando así en el desarrollo de grandes proyectos. Actualmente la empresa se encuentra consolidada en la región ocupando el segundo lugar en operación en el municipio de Sabaneta, según cifras de la cámara nacional Inmobiliaria. Adicionalmente la calificación que otorga la administración municipal cada año nos ubica en el primer lugar según los indicadores de Calidad en el servicio prestado.</p>
              <p>Los Objetivos de la Compañía se orientan en el corto plazo en la sostenibilidad y en la rentabilidad del negocio de manera segura para la comunidad y los accionistas.</p>
              <br>
              <h2>Misión</h2>
              <p>Mejorar la calidad de vida de quienes requieren un servicio inmobiliario, mediante la asesoría de nuestro equipo de trabajo, dentro de un marco de responsabilidad, seriedad y compromiso con nuestros aliados, apoyado en la calidad humana y en la atención oportuna y competente.</p>
              <br>
              <h2>Visión</h2>
              <p>Diferenciarnos en el mercado por la capacidad de solucionar eficazmente las necesidades de los clientes y superar sus expectativas, consolidarnos como la mejor opción Inmobiliaria en el sur del área metropolitana</p>
              <br>
              <h2>Valores Corporativos</h2>
              <p><strong>Pasión:</strong> Amamos lo que hacemos y creemos que una actitud entusiasta al momento de relacionarnos con nuestros clientes y compañeros de trabajo genera fidelización, confianza y recordación en el mercado.</p>
              <p><strong>Responsabilidad:</strong> Administramos propiedades y procuramos las mejores opciones inmobiliarias para nuestros clientes, siendo responsables social y patrimonialmente por cada paso que damos para servirles.</p>
              <p><strong>Integridad:</strong> Nuestra labor es realizada con rectitud, coherencia y respeto por los demás. Como equipo de trabajo, nos enfocamos en las mismas metas garantizando alto rendimiento y cumplimiento.</p>
              <p><strong>Comunicación:</strong> Administramos propiedades y procuramos las mejores opciones inmobiliarias para nuestros clientes, siendo responsables social y patrimonialmente por cada paso que damos para servirles.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include './controllers/agents.php';
    include './controllers/footer.php';
    ?>
  </div>
  <?php include './controllers/scripts.php' ?>
</body>

</html>
