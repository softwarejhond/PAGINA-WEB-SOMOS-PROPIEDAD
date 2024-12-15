<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="mb-5">
               <img src="images/logo.png" alt="logo" width="150px"> 
            </div>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Navegación</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="about.php">Nosotros</a></li>
                            <li><a href="services.php">Servicios</a></li>
                            <li><a href="clientes.php">Clientes</a></li>
                            <li><a href="contact.php">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div class="col-md-12">
                    <h3 class="footer-heading mb-4">Navegación</h3>
                </div>
                <ul class="list-unstyled">
                    <li><a href="about.php">Acerca de Nosotros</a></li>
                    <li><a href="policies.php">Políticas Privacidad</a></li>
                    <li><a href="contact.php">Contacto</a></li>
                    <li><a href="lawRent.php">Ley de Arrendamiento</a></li>
                </ul>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Síguenos</h3>
                <div>
                    <a href="https://www.facebook.com/somospropiedadinmobiliaria" target="__blank"
                        class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="https://www.instagram.com/somospropiedad_inmobiliaria/" target="__blank"
                        class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="https://wa.link/hmoin4" target="__blank" class="pl-3 pr-3"><span
                            class="icon-whatsapp"></span></a>
                </div>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
            <?php

// $queryCompany = mysqli_query($conn, "SELECT nombre,nit FROM company");
// while ($empresaLog = mysqli_fetch_array($queryCompany)) {
//     $empresa = $empresaLog['nombre'] . '</label>';
// }
// ?>
<br>
<b class="text-white">&copy; Copyright <?php echo date("Y"); ?> Todos los derechos de uso para <label class="text-lime-dark"><b><?php echo $empresa ?> </b></label><br>
Made by <a class="text-light" href="https://agenciaeaglesoftware.com/" target="_blank">Agencia de Desarrollo Eagle Software</a>
            </div>

        </div>
    </div>
</footer>
<aside class="button-floating">
    <a target="_blank" href="https://wa.link/hmoin4"><span class="icon-whatsapp"></span></a>
</aside>