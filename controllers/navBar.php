<?php
$currentPage = basename($_SERVER["PHP_SELF"]);
?>
<div class="site-navbar mt-4">
  <div class="container py-1">
    <div class="row align-items-center">
      <div class="col-4 col-md-4 col-lg-4">
        <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><img src="images/logo.png" alt="logo" width="100px"></a></h1>
      </div>
      <div class="col-8 col-md-8 col-lg-8">
        <nav class="navbar site-navigation text-right text-md-right" role="navigation">

          <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          <ul class="navbar-nav site-menu js-clone-nav d-none d-lg-block">
            <li class="nav-item <?php echo $currentPage == "index.php" ? "active" : "" ?>">
              <a href="index.php">Inicio</a>
            </li>
            <li class=" nav-item <?php echo $currentPage == "about.php" ? "active" : "" ?>">
              <a href="about.php">Nosotros</a>
            </li>
            <li class="nav-item dropdown <?php echo stripos($currentPage, 'services') !== false ? "active" : "" ?>">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="servicesRent.php">Arrendamiento</a>
                <a class="dropdown-item" href="servicesSales.php">Venta</a>
                <a class="dropdown-item" href="servicesValue.php">Avalúo</a>
                <a class="dropdown-item" href="servicesAdvisor.php">Asesoría</a>
                <a class="dropdown-item" href="servicesMoney.php">Dinero a Interés</a>
              </div>
            </li>
            
            <li class="nav-item <?php echo $currentPage == "contact.php" ? "active" : "" ?>">
              <a href="contact.php">Contacto</a>
            </li>
            <li class="nav-item <?php echo $currentPage == "add_property.php" ? "active" : "" ?>">
              <a href="add_property.php">Tu Propiedad</a>
            </li>
            <li class="nav-item <?php echo $currentPage == "add_property.php" ? "active" : "" ?>">
              <a href="https://portalpagos.davivienda.com/#/comercio/10783/SOMOS%20PROPIEDAD" target="_blank">Pagos en línea</a>
            </li>
            <li class="nav-item <?php echo $currentPage == "https://somospropiedad.com/admin" ? "active" : "" ?>">
              <a href="https://somospropiedad.com/admin" target="_blank"><i class="bi bi-ui-checks-grid"></i> Administración</a>
            </li>
          </ul>
        </nav>


      </div>
    </div>
  </div>
</div>
</div>

<!-- <div class="site-navbar mt-4">
  <div class="container py-1">
    <nav class="navbar navbar-expand-lg">
      <div class="d-flex justify-content-between align-items-center">
        <h1 class="navbar-brand mb-0"><a href="index.php" class="text-white h2 mb-0"><img src="images/logo.png" alt="logo" width="100px"></a></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="bi bi-list"></i></span>
        </button>
      </div>

      <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item <?php echo $currentPage == "index.php" ? "active" : "" ?>">
            <a class="nav-link" href="index.php">Inicio</a>
          </li>
          <li class="nav-item <?php echo $currentPage == "about.php" ? "active" : "" ?>">
            <a class="nav-link" href="about.php">Nosotros</a>
          </li>
          <li class="nav-item dropdown <?php echo stripos($currentPage, 'services') !== false ? "active" : "" ?>">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="servicesRent.php">Arrendamiento</a>
              <a class="dropdown-item" href="servicesSales.php">Venta</a>
              <a class="dropdown-item" href="servicesValue.php">Avalúo</a>
              <a class="dropdown-item" href="servicesAdvisor.php">Asesoría</a>
              <a class="dropdown-item" href="servicesMoney.php">Dinero a Interés</a>
            </div>
          </li>
          <li class="nav-item <?php echo $currentPage == "client.php" ? "active" : "" ?>">
            <a class="nav-link" href="client.php">Clientes</a>
          </li>
          <li class="nav-item <?php echo $currentPage == "contact.php" ? "active" : "" ?>">
            <a class="nav-link" href="contact.php">Nosotros</a>
          </li>
          <li class="nav-item <?php echo $currentPage == "https://somospropiedad.com/admin" ? "active" : "" ?>">
            <a class="nav-link" href="https://somospropiedad.com/admin" target="_blank"><i class="bi bi-ui-checks-grid"></i> Administración</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div> -->