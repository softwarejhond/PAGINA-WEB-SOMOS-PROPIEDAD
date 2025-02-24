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
            <h1 class="mb-2">Ley de Arrendamiento</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <iframe src="./files/Ley 820 de 2003.pdf" frameborder="0" type="application/pdf"></iframe>
        </div>
      </div>
    </div>
    
    <?php 
    include './controllers/footer.php';
    ?>

  </div>

  <?php include './controllers/scripts.php' ?>
    
  </body>
</html>