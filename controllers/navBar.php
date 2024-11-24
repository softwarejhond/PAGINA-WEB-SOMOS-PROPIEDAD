<?php 
$currentPage = basename($_SERVER["PHP_SELF"]);
?>
<div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>Homeland<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="<?php echo $currentPage == "index.php" ? "active" : "" ?>">
                    <a href="index.php">Home</a>
                  </li>
                  <li class="<?php echo $currentPage == "buy.php" ? "active" : "" ?>">
                    <a href="buy.php">Buy</a></li>
                  <li class="<?php echo $currentPage == "rent.php" ? "active" : "" ?>">
                    <a href="rent.php">Rent</a></li>
                  <li class="has-children <?php echo $currentPage == "properties.php" ? "active" : "" ?>">
                    <a href="properties.php">Properties</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#">Condo</a></li>
                      <li><a href="#">Property Land</a></li>
                      <li><a href="#">Commercial Building</a></li>
                      <li class="has-children">
                        <a href="#">Sub Menu</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="<?php echo $currentPage == "blog.php" ? "active" : "" ?>">
                    <a href="blog.php">Blog</a></li>
                  <li class="<?php echo $currentPage == "about.php" ? "active" : "" ?>">
                    <a href="about.php">About</a></li>
                  <li class="<?php echo $currentPage == "contact.php" ? "active" : "" ?>">
                    <a href="contact.php">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>