<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Scrowz Archive - Home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/index/style.css') ?>"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>   
</head>
 
<body>
    <!--Navbar-->
     <nav class="navbar navbar-expand-lg navbar-white ">
        <div class="container">
          <a class="navbar-brand" href="#">
            <p class="logo">Scrowz Archive</p>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('product/view_products') ?>">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('design') ?>">Upload Design</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="testimoni.html">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
              <?php if ($this->session->userdata('logged_in')) { ?>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('auth/logout') ?>">Logout</a>
              </li>
          <?php } else { ?>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('auth/login') ?>">Login</a>
              </li>
          <?php } ?>

            </ul>
          </div>    
        </div>
      </nav>
      <!--End Navbar-->

      <!--Body-->
    <img src="<?php echo base_url('assets/index/img/background.jpg') ?>" alt="" style="width: 100%; height: 100%;">
        <br>
        <img src="<?php echo base_url('assets/index/img/background3.jpg') ?>" alt="" style="width: 100%; height: 100%;">
        <div class="container">

        <div class="row align-items-start">
    <?php foreach ($latest_products as $product): ?>
        <div class="col">
            <div class="card" style="width: 18rem;">
            <img src="<?php echo base_url('assets/product/' . $product['image_url']); ?>" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['name']; ?></h5>
                    <p class="card-text"><b>Description: <?php echo $product['description']; ?></b></p>
                    <p class="card-text"><b>Price: <?php echo $product['price']; ?></b></p>
                    <p class="card-text"><b>Stock: <?php echo $product['stock']; ?></b></p>
                    <a href="#" class="btn btn-primary">Add To Chart</a>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
  </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/index/img/slide1.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/index/img/slide2.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/index/img/slide3.jpg') ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <img src="<?php echo base_url('assets/index/img/background2.jpg') ?>" alt="" style="width: 100%; height: 100%;">
        <br>
            <img src="<?php echo base_url('assets/index/img/background1.jpg') ?>" alt="" style="width: 100%; height: 100%;">
 
<!-- footer -->
<footer>
    <p>Contact Us</p>
         
    <!--paragraph-->
    <p>contact the account below for further needs.</p>
    <!--social-->
    <div class="social-icons">
        <a href="https://api.whatsapp.com/send?phone=+"><i class="fab fa-whatsapp"></i></a>
        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
    </div>
     
    <!--copyright-->
    <p class="copyright">Copyright by Scrowz Archive @ 2022</p>
</footer>
</body>
 
</html>