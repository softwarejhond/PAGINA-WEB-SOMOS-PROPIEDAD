<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './controllers/head.php' ?>

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

    <?php
    include './controllers/navBar.php';
    include './controllers/hero.php';
    include './APIS/cardFilter.php';
    ?>

    <?php
    include './controllers/chooseUs.php';
    include './controllers/questions.php';
    include './controllers/footer.php';
    ?>

  </div>

  <?php include './controllers/scripts.php' ?>
  <script type="text/javascript" src="js/departamentos_municipios_barrios.js?v=1"></script>
   
</body>

</html>