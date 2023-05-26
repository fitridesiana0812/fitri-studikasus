<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Domini Restaurant-Studi Kasus</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main2.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Domini<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a href="index.php#hero">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#menu">Menu</a></li>
            <li><a href="index.php#chefs">Chefs</a></li>
            <li><a href="index.php#gallery">Gallery</a></li>
            <li><a href="index.php#contact">Contact</a></li>
            <li class="dropdown"><a href="#"><span>CRUD</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                <li><a href="menu.php">Data Menu</a></li>
                <li><a href="customer.php">Data Customer</a></li>
                <li><a href="transaksi.php">Data Transaksi</a></li>
                </ul>
            </li>
          
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="order.php">Order Menu</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

    <!-- ======= Menu Section ======= -->
    <section id="crud" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header mt-3">
          <p>Check Our <span>Domini Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Pizza</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Burger</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Pasta</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Drink</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Pizza</h3>
            </div>

            <div class="row gy-5">

              <?php
                include ('connect.php');
                  $data_menu = mysqli_query($conn, "SELECT * FROM `menu` WHERE kategori = 'pizza'");
                while($menu = mysqli_fetch_array($data_menu)){
              ?>

              <div class="col-lg-4 menu-item">
                <a class="glightbox"><img src="assets/img/menu1/<?php echo $menu['gambar'] ?>" class="menu-img img-fluid" alt=""></a>
                <h4><?php echo $menu['nama'] ?></h4>
                <p align= "center" class="ingredients">
                  <?php echo $menu['deskripsi'] ?>
                </p>
                <p class="price">
                  Rp. <?php echo $menu['harga'] ?>
                </p>
              </div><!-- Menu Item -->
              
              <?php 
              } 
              ?>

            </div>

          </div><!-- End Pizza Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Burger</h3>
            </div>

            <div class="row gy-5">

              <?php
                include ('connect.php');
                  $data_menu = mysqli_query($conn, "SELECT * FROM `menu` WHERE kategori = 'burger'");
                while($menu = mysqli_fetch_array($data_menu)){
              ?>

              <div class="col-lg-4 menu-item">
              <a class="glightbox"><img src="assets/img/menu1/<?php echo $menu['gambar'] ?>" class="menu-img img-fluid" alt=""></a>
                <h4><?php echo $menu['nama'] ?></h4>
                <p align= "center" class="ingredients">
                  <?php echo $menu['deskripsi'] ?>
                </p>
                <p class="price">
                  Rp. <?php echo $menu['harga'] ?>
                </p>
              </div><!-- Menu Item -->
              
              <?php 
              } 
              ?>

            </div>

          </div><!-- End Burger Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Pasta</h3>
            </div>

            <div class="row gy-5">

              <?php
                include ('connect.php');
                  $data_menu = mysqli_query($conn, "SELECT * FROM `menu` WHERE kategori = 'pasta'");
                while($menu = mysqli_fetch_array($data_menu)){
              ?>

              <div class="col-lg-4 menu-item">
              <a class="glightbox"><img src="assets/img/menu1/<?php echo $menu['gambar'] ?>" class="menu-img img-fluid" alt=""></a>
                <h4><?php echo $menu['nama'] ?></h4>
                <p align= "center" class="ingredients">
                  <?php echo $menu['deskripsi'] ?>
                </p>
                <p class="price">
                  Rp. <?php echo $menu['harga'] ?>
                </p>
              </div><!-- Menu Item -->
              
              <?php 
              } 
              ?>

            </div>

          </div><!-- End Pasta Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Drink</h3>
            </div>

            <div class="row gy-5">

              <?php
                include ('connect.php');
                  $data_menu = mysqli_query($conn, "SELECT * FROM `menu` WHERE kategori = 'minuman'");
                while($menu = mysqli_fetch_array($data_menu)){
              ?>

              <div class="col-lg-4 menu-item">
              <a class="glightbox"><img src="assets/img/menu1/<?php echo $menu['gambar'] ?>" class="menu-img img-fluid" alt=""></a>
                <h4><?php echo $menu['nama'] ?></h4>
                <p align= "center" class="ingredients">
                  <?php echo $menu['deskripsi'] ?>
                </p>
                <p class="price">
                  Rp. <?php echo $menu['harga'] ?>
                </p>
              </div><!-- Menu Item -->
              
              <?php 
              } 
              ?>

            </div>

            </div>
          </div><!-- End Drink Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Jl. KHI No. 234, Surabaya <br>
              Jawa Timur - Indonesia<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone :</strong> +1 5589 55488 55<br>
              <strong>Email :</strong> info@domini.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
            <strong>Mon-Sat :</strong> 11 AM - 23 PM<br>
            <strong>Sunday :</strong> Closed<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Domini</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Fitri Desiana Afani</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>