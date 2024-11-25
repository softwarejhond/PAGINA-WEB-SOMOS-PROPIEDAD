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

    <?php include './controllers/navBar.php' ?>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Escríbenos</h1>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 mb-5">
          
            <form action="#" class="p-5 bg-white border">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nombre Completo</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Nobre Completo">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Correo Electrónico</label>
                  <input type="email" id="email" class="form-control" placeholder="Correo Electrónico">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Asunto</label>
                  <input type="text" id="subject" class="form-control" placeholder="Insertar Asunto">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Mensaje</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Mensaje"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Enviar Mensaje" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h6 text-black mb-3 text-uppercase">información de Contacto</h3>
              <p class="mb-0 font-weight-bold">Dirección</p>
              <p class="mb-4">Calle 73 Sur N° 45A-60 Local 9, Sabaneta, Antioquia</p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8475448317326!2d-75.62024242600957!3d6.151166527380218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4683df17f5bf79%3A0xf7a0bfc659f59cb5!2sSomos%20Propiedad%20Inmobiliaria!5e0!3m2!1ses!2sco!4v1732509769267!5m2!1ses!2sco" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              <p class="mb-0 font-weight-bold">Teléfonos</p>
              <p class="mb-4"><a href="#">(604) 444 73 62</a></p>
              <p class="mb-4"><a href="https://wa.link/hmoin4">+57 320 6716990</a></p>

              <p class="mb-0 font-weight-bold">Correo Electrónico</p>
              <p class="mb-0"><a href="#">servicios@somospropiedad.com</a></p>

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