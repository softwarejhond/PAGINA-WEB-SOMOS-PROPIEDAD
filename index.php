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
<!-- Modal -->
<div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-black" id="miModalLabel">Bienvenido</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-black">
      Este sitio web está en proceso de remodelación. Para obtener información sobre nuestra inmobiliaria, no dudes en contactarnos a través de nuestras líneas de WhatsApp ubicadas en la esquina inferior derecha. 
      <br>¡Gracias por tu comprensión!
      </div>
 
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var miModal = new bootstrap.Modal(document.getElementById('miModal'));
    miModal.show();
  });
</script>

  <?php include './controllers/scripts.php' ?>
  <script type="text/javascript" src="js/departamentos_municipios_barrios.js?v=1"></script>
   
</body>

</html>