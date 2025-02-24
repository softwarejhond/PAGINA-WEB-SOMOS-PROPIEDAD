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
                        <h1 class="mb-2">Añadir mi propiedad</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 mb-5">
                        <?php
                        include './APIS/addProperty/nuevaPropiedad.php';
                        ?>

                    </div>
                </div>
            </div>
        </div>

        <?php
        include './controllers/footer.php';
        ?>

    </div>
    <script type="text/javascript" src="js/departamentos_municipios_barrios.js"></script> 
    <?php include './controllers/scripts.php' ?>

</body>

</html>