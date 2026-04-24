<?php
$currentPage = basename($_SERVER["PHP_SELF"]);
?>
<div class="site-navbar">
  <div class="container py-2">
    <div class="d-flex align-items-center justify-content-between">

      <!-- Logo -->
      <div class="site-navbar__brand">
        <a href="index.php">
          <img src="images/logo.png" alt="Somos Propiedad" height="56">
        </a>
      </div>

      <!-- Toggle móvil -->
      <div class="d-lg-none">
        <a href="#" class="site-menu-toggle js-menu-toggle text-white">
          <span class="icon-menu" style="font-size:1.6rem;"></span>
        </a>
      </div>

      <!-- Menú desktop -->
      <nav class="site-navigation d-none d-lg-block" role="navigation">
        <ul class="navbar-nav site-menu js-clone-nav d-flex flex-row align-items-center mb-0">

          <li class="nav-item <?php echo $currentPage === 'index.php' ? 'active' : ''; ?>">
            <a href="index.php">Inicio</a>
          </li>

          <li class="nav-item <?php echo $currentPage === 'about.php' ? 'active' : ''; ?>">
            <a href="about.php">Nosotros</a>
          </li>

          <li class="nav-item dropdown <?php echo stripos($currentPage, 'services') !== false ? 'active' : ''; ?>">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Servicios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="servicesRent.php">
                <i class="fas fa-house-user fa-fw mr-2" style="color:#e5097f;"></i>Arrendamiento
              </a>
              <a class="dropdown-item" href="servicesSales.php">
                <i class="fas fa-tag fa-fw mr-2" style="color:#e5097f;"></i>Venta
              </a>
              <a class="dropdown-item" href="servicesValue.php">
                <i class="fas fa-chart-line fa-fw mr-2" style="color:#e5097f;"></i>Avalúo
              </a>
              <a class="dropdown-item" href="servicesAdvisor.php">
                <i class="fas fa-handshake fa-fw mr-2" style="color:#e5097f;"></i>Asesoría
              </a>
              <a class="dropdown-item" href="servicesMoney.php">
                <i class="fas fa-coins fa-fw mr-2" style="color:#e5097f;"></i>Dinero a Interés
              </a>
            </div>
          </li>

          <li class="nav-item <?php echo $currentPage === 'contact.php' ? 'active' : ''; ?>">
            <a href="contact.php">Contacto</a>
          </li>

          <li class="nav-item <?php echo $currentPage === 'add_property.php' ? 'active' : ''; ?>">
            <a href="add_property.php">Tu Propiedad</a>
          </li>

          <!-- Botón pago en línea -->
          <li class="nav-item nav-item--cta">
            <a href="https://gateway2.tucompra.com.co/sites/somospropiedad"
              target="_blank" rel="noopener" class="navbar-btn-payment">
              <i class="fas fa-credit-card"></i> Pagos en línea
            </a>
          </li>

          <!-- Administración -->
          <li class="nav-item">
            <a href="https://somospropiedad.com/admin" target="_blank" rel="noopener"
              class="navbar-btn-admin" title="Panel de administración">
              <i class="fas fa-th-large"></i> Administración
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </div>
</div>