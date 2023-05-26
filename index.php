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
          <li class="dropdown"><a href=""><span>CRUD</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Domini Restaurant<br>Delicious Food</h2>
          <p align="justify" data-aos="fade-up" data-aos-delay="100">
            Domini Restaurant adalah sebuah restoran cepat saji yang terkenal, khususnya dalam penyediaan layanan pengiriman pizza, 
            burger, dan pasta. Restoran ini menawarkan berbagai jenis pizza, burger, dan pasta dengan beragam pilihan rasa.
            Domini Restaurant selalu berkomitmen untuk menyajikan makanan berkualitas tinggi dan memberikan pengalaman yang memuaskan bagi pelanggannya.
          </p>
          <div class="d-flex">
            <a href="order.php" class="btn-book-a-table">Order Menu</a>
            <a href="https://youtu.be/rZBjWnW31xw" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/home2-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header mt-3 mb-3">
          <p>Domini <span>About Us</span></p>
        </div>

        <div class="row justify-content-between gy-5">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
            <div class="content ps-0 ps-lg-5">
              <p align="justify" data-aos="fade-up" data-aos-delay="100">
                Domini Restaurant adalah sebuah restoran cepat saji yang terkenal, khususnya dalam penyediaan layanan :
              </p>
                <ul data-aos="fade-up" data-aos-delay="100">
                  <li><i class="bi bi-check2-all"></i> Penyediaan layanan pengiriman pizza.</li>
                  <li><i class="bi bi-check2-all"></i> Penyediaan layanan pengiriman burger.</li>
                  <li><i class="bi bi-check2-all"></i> Penyediaan layanan pengiriman pasta.</li>
                </ul>
              <p align="justify" data-aos="fade-up" data-aos-delay="100">
                Restoran ini menawarkan berbagai jenis pizza, burger, dan pasta dengan beragam pilihan rasa. Domini Restaurant selalu berkomitmen untuk 
                menyajikan makanan berkualitas tinggi dan memberikan pengalaman yang memuaskan bagi pelanggannya.
              </p>
            </div>
          </div>
  
          <div class="col-lg-4 order-1 order-lg-2 text-center text-lg-start">
            <img src="assets/img/about.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
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

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header mt-3 mb-3">
          <p>Our <span>Proffesional</span> Chefs</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Pizza Chef</span>
                <p align="justify">Chef ahli dalam menciptakan dan memasak berbagai jenis pizza yang lezat. 
                  Mereka memiliki pengetahuan mendalam tentang adonan pizza, berbagai saus, 
                  topping, dan teknik memasak yang diperlukan untuk menghasilkan pizza yang sempurna.</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Burger Chef</span>
                <p align="justify">Chef ahli dalam menciptakan dan memasak berbagai jenis burger yang lezat. 
                  Mereka memiliki pengetahuan mendalam tentang adonan burger, berbagai saus, 
                  topping, dan teknik memasak yang diperlukan untuk menghasilkan burger yang sempurna.</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Pasta Chef</span>
                <p align="justify">Chef ahli dalam menciptakan dan memasak berbagai jenis pasta yang lezat. 
                  Mereka memiliki pengetahuan mendalam tentang adonan pasta, berbagai saus, 
                  topping, dan teknik memasak yang diperlukan untuk menghasilkan pasta yang sempurna.</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header mt-3 mb-3">
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header mt-3 mb-3">
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>Jl. KHI No. 234, Surabaya</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@domini.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <p>Mon - Sat : 11 AM - 23 PM</p>
                <p>Sunday  : Closed</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

      </div>
    </section><!-- End Contact Section -->

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